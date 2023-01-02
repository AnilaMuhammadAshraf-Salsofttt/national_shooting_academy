<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseQuizQuestion;
use App\Models\CourseSyllabiAttempt;
use Illuminate\Http\Request;
use App\Models\CourseQuizQuestionAnswer;
use App\Models\UserQuizAnswer;
use App\Models\UserQuizResult;
use PDF;
use Symfony\Component\Console\Question\Question;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function user_course()
    {
        $data['course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations')
            ->whereStatus('active')->paginate(6);

        return view('user.course.courselisting', $data);
    }

    public function user_course_detail($id)
    {
        $data['course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations', 'files')
            ->whereStatus('active')->whereId($id)->first();

        return view('user.course.coursedetail', $data);
    }

    public function user_course_logs()
    {

        $data['course_log'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations')->when(request('to'), function ($q) {

            $from_date = request('from') . '00:00:01';
            $to_date = request('to') . '23:59:59';
            $fm = date('Y-m-d H:i:s', strtotime($from_date));
            $t = date('Y-m-d H:i:s', strtotime($to_date));
            $q->whereBetween('created_at', [$fm, $t]);
        })
            ->whereStatus('active')->whereHas('registrations', function ($q) {
                $q->whereUserId(auth()->user()->id);
            })->paginate(6);

        return view('user.course.course_log', $data);
    }

    public function booked_course_view($id)
    {
        $data['booked_course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations', 'files')
            ->whereId($id)
            ->first();
        return view('user.course.booked_course.booked_course', $data);
    }

    public function quiz_view($id)
    {
        $data['quiz'] = Course::with('features', 'questions.answers', 'syllabus', 'user', 'quiz_attempts', 'registrations')
            ->whereId($id)
            ->first();
        return view('user.course.booked_quiz.booked_quiz', $data);
    }

    public function quiz_submit(Request $request)
    {

        // $question = Course::with('features', 'questions.answers', 'syllabus', 'user', 'quiz_attempts', 'registrations')
        //     ->whereId(request('course_id'))
        //     ->get();
        $marks=Course::where('id',$request->id)->latest()->first();
              $check=UserQuizAnswer::where(['user_id'=>auth()->user()->id,'course_id'=>$request->id])->latest()->first();
           if($check){
               $attempt=$check->attempt;
               if($attempt >= 1){
                  $attempt+=1;
               }
           }else{
               $attempt=1;
           }
       foreach ($request->output as $key=> $data) {
           if($data['answer']=='CORRECT'){
                $points=Course::where('id',$request->id)->first();
                $point=$points->points_per_quesiton;
                //  dd($point->points_per_quesiton);
           }else{
               $point=0;
           }
              $add=new UserQuizAnswer();
              $add->user_id=auth()->user()->id;
              $add->course_id=$request->id;
              $add->question_id=$data['questionid'];
              $add->status=$data['answer'];
              $add->point=$point;
              $add->attempt=$attempt;
              $add->marks_per_qtn= $marks->points_per_quesiton;
              $add->save();
              $new_attempt=$add->attempt;
       }
       $user_points=UserQuizAnswer::where(['user_id'=>auth()->user()->id,'course_id'=>$request->id,'attempt'=> $new_attempt])->sum('point');
       $total_marks=UserQuizAnswer::where(['user_id'=>auth()->user()->id,'course_id'=>$request->id,'attempt'=> $new_attempt])->sum('marks_per_qtn');
       $total=($user_points / $total_marks) * 100;
       $result=new UserQuizResult();
       $result->user_id=auth()->user()->id;
       $result->course_id=$request->id;
       $result->total=$total;
       $result->save();
       return response()->json(['marks'=>$total]);
    //    return redirect()->back()->with('marks',$total);
    }

    public function booked_course_detail($id)
    {
        $data['booked_course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations')
            ->whereId($id)->whereHas('registrations', function ($q) {
                $q->whereUserId(auth()->user()->id);
            })
            ->first();
        return view('user.course.booked_course.booked_video', $data);
    }

    public function syllabi_mark_completed()
    {
        $course = CourseSyllabiAttempt::whereCourseId(request('course_id'))
            ->whereSyllabiId(request('syllabi_id'))
            ->whereUserId(auth()->user()->id)->count();
        $output = ["task" => "Already mark as Completed", "completed" => 'error'];

        if ($course == 0) {
            $syllabi = new CourseSyllabiAttempt();
            $syllabi->user_id = auth()->user()->id;
            $syllabi->course_id = request('course_id');
            $syllabi->syllabi_id = request('syllabi_id');
            $syllabi->save();
            $output = ["task" => "You have mark completed this lecture", "completed" => 'success'];
        }
        return response()->json($output);
    }

    //quiz ceritificate
     public function htmlPDF()
    {
        return view('user.course.htmlpdf.pdf_html');
    }

    public function generatePDF(Request $request)
    {
        $customPaper = array(0,0,720,1440);
        $marks=UserQuizResult::where(['user_id'=>auth()->user()->id,'course_id'=>$request->id])->orderBy('created_at', 'desc')->latest()->first();
        $course=Course::where('id',$request->id)->first();
        $data=['course_name'=>$course->name,'name'=>auth()->user()->first_name.' '.auth()->user()->last_name,'total'=>$marks->total,'date'=>$marks->created_at];
        $pdf = PDF::loadView('user.course.htmlpdf.pdf_html',$data)->setPaper($customPaper,'landscape');
        return $pdf->download('certificate.pdf');
    }



}
