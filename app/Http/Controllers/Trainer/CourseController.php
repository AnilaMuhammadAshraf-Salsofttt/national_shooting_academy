<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseFeature;
use App\Models\CourseQuizQuestion;
use App\Models\CourseQuizQuestionAnswer;
use App\Models\CourseRegistration;
use App\Models\CourseSyllabus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    public function createCourse(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'quiz_title' => 'required',
            'duration' => 'required',
            'attempts' => 'required',
            'passing_criteria' => 'required',
            'charges' => "required",
            'points_per_question' => 'required',
            'features' => 'required',
            'syllabusDetail' => 'required',
            'questions' => 'required',


        ]);

        $course = new Course([
            'trainer_id' => $user->id,
            'product_id' => $request->product_id,
            'name' => $request->name,
            'status' => $request->status,
            'description' => $request->description,
            'quiz_title' => $request->quiz_title,
            'duration' => $request->duration,
            'attempts' => $request->attempts,
            'passing_criteria' => $request->passing_criteria,
            'points_per_quesiton' => $request->points_per_question,
            'charges' => $request->charges,
        ]);
        $course->save();



        //need to save uploaded video to file. will come back here after other fields
        foreach ($request->syllabusDetail as $data) {

            $syllabus = new CourseSyllabus([
                'course_id' => $course->id,
                'title' => $data['lectureTitle'],
                // 'video' => $data['video'],
            ]);

            if ($data['video']) {
                $ext = $data['video']->extension();
                $video = $data['video']->storeAs('videos', Str::random(24) . ".{$ext}", 'public');
                $syllabus->video = "storage/" . $video;
            }
            $syllabus->save();


            //error_log($data['video']);
        }

        foreach ($request->features as $data) {

            $features = new CourseFeature([
                'course_id' => $course->id,
                'title' => $data['featureTitle'],
                'value' => $data['FeatureValue'],
            ]);
            $features->save();

            // error_log($data['featureTitle']);
        }

        $g = CourseRegistration::whereCourse_id($course->id)->whereUser_id($user->id)->count();
           if($g == 0){

            $CourseRegistration = new  CourseRegistration([
             'course_id' =>$course->id,
             'user_id' =>$user->id,
            'price_paid' =>$request->charges,
            'status' =>"In process",
            ]);

            $CourseRegistration->save();
            }



        foreach ($request->questions as $data) {
            $courseQuizQuestions = new CourseQuizQuestion([
                'course_id' => $course->id,
                'question' => $data['question'],
                'form' => $data['answerType'],
            ]);
            $courseQuizQuestions->save();
            //error_log($data['question']);
            foreach ($data['answers'] as $data2) {

                $answers = new CourseQuizQuestionAnswer([
                    'course_question_id' => $courseQuizQuestions->id,
                    'answer' => $data2['answer'],
                    'correct' => $data2['correct'],
                ]);
                $answers->save();
                // error_log($data2['answer']);
            }
        }


        return response()->json(["message" => "Course Created Successfully"]);
    }

    public function getCourse(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $course = Course::with('features', 'syllabus', 'questions.answers')->withCount(['quiz_attempts as quiz_attempts' => function($q){
            $q->where('user_id',auth()->id());
        }])
            ->whereId($request->id)
            ->whereTrainerId(auth()->id())
            ->first();

        if ($course) {
            return response()->json(["Course" => $course]);
        }
        return response()->json(["message" => "Course doesn't exist "], 404);
    }

    public function getCourses()
    {

        // ->when(request('from') && request('to'), function($q){
        //     $q->whereBetween('created_at', [request('from'),request('to')]);
        // })
        $courses = Course::with('features', 'syllabus', 'questions.answers')
                    ->whereTrainerId(auth()->id())
                    ->when(request('search', false), function($q){
                        $q->where('name', 'LIKE', '%'. request('search') .'%');
                    })
                    ->when(request('from', false) && request('to', false), function($q){
                        $q->whereBetween('created_at', [request('from').' 00:00:00', request('to').' 23:59:59']);
                    })
                    ->get();

        return response()->json(["Courses" => $courses]);
    }

    public function editCourse(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            // 'course_id' => 'required',
            // 'product_id' => 'required',
            // 'name' => 'required',
            // 'status' => 'required',
            // 'description' => 'required',
            // 'quiz_title' => 'required',
            // 'duration' => 'required',
            // 'attempts' => 'required',
            // 'passing_criteria' => 'required',
            // 'charges' => "required",
            // 'points_per_question' => 'required',
            // 'features' => 'required',
            // 'syllabusDetail' => 'required',
            // 'questions' => 'required',


        ]);
        $course = Course::whereId($request->course_id)->whereTrainer_id($user->id)->first()->update([
            'name' => $request->name,
            'status' => $request->status,
            'description' => $request->description,
            'quiz_title' => $request->quiz_title,
            'duration' => $request->duration,
            'attempts' => $request->attempts,
            'passing_criteria' => $request->passing_criteria,
            'points_per_quesiton' => $request->points_per_question,
            'charges' => $request->charges,
        ]);
        $course = Course::find($request->course_id);



        //need to save uploaded video to file. will come back here after other fields
        CourseSyllabus::whereCourse_id($course->id)->delete();
        foreach ($request->syllabusDetail as $data) {

            $syllabus = new CourseSyllabus([
                'course_id' => $course->id,
                'title' => $data['lectureTitle'],
                // 'video' => $data['video'],
            ]);

            if ($data['video']) {
                $ext = $data['video']->extension();
                $video = $data['video']->storeAs('videos', Str::random(24) . ".{$ext}", 'public');
                $syllabus->video = "storage/" . $video;
            }
            $syllabus->save();


            //error_log($data['video']);
        }
        CourseFeature::whereCourse_id($course->id)->delete();
        foreach ($request->features as $data) {

            $features = new CourseFeature([
                'course_id' => $course->id,
                'title' => $data['featureTitle'],
                'value' => $data['FeatureValue'],
            ]);
            $features->save();

            // error_log($data['featureTitle']);
        }

        $g = CourseRegistration::whereCourse_id($course->id)->whereUser_id($user->id)->count();
        if($g == 0){

         $CourseRegistration = new  CourseRegistration([
          'course_id' =>$course->id,
          'user_id' =>$user->id,
         'price_paid' =>$request->charges,
         'status' =>"In process",
         ]);

         $CourseRegistration->save();
         }


        CourseQuizQuestion::whereCourse_id($course->id)->delete();

        foreach ($request->questions as $data) {
            $courseQuizQuestions = new CourseQuizQuestion([
                'course_id' => $course->id,
                'question' => $data['question'],
                'form' => $data['answerType'],
            ]);
            $courseQuizQuestions->save();
            //error_log($data['question']);
            foreach ($data['answers'] as $data2) {

                $answers = new CourseQuizQuestionAnswer([
                    'course_question_id' => $courseQuizQuestions->id,
                    'answer' => $data2['answer'],
                    'correct' => $data2['correct'],
                ]);
                $answers->save();
                // error_log($data2['answer']);
            }
        }


        return response()->json(["message" => "Course Updated Successfully"]);
    }

    public function lectureDetail(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $lecture = CourseSyllabus::find($request->id);
        return response()->json(["Lecture" => $lecture]);
    }

    // public function  getEnrolledUsers(Request $request, $from = '1970-01-01', $to = '2970-01-01')
    // {
    //     if ($request->from) {
    //         $from = $request->from;
    //     }
    //     if ($request->to) {
    //         $to = $request->to;
    //     }
    //     $request->validate([
    //         'id' => 'required'
    //     ]);

    //     $registrations = CourseRegistration::with('user')->whereCourse_id($request->id)->whereBetween('created_at', [$from, $to])->get();
    //     return response()->json(["Enrolled" => $registrations]);
    // }


    public function  getEnrolledUsers(Request $request, $from = '1970-01-01', $to = '2970-01-01')
    {
        if ($request->from) {
            $from = $request->from;
        }
        if ($request->to) {
            $to = $request->to;
        }

        $registrations = CourseRegistration::with('user')->whereBetween('created_at', [$from, $to]);

if($request->id){
    $registrations->whereCourseId($request->id);
}

    $registration =  $registrations->get();


        return response()->json([
            "Enrolled" => $registration,
            "attempts" => "no data to show",
    ]);
    }


    public function getEnrolledUsersDetail(Request $request, $from = '1970-01-01', $to = '2970-01-01')
    {
        if ($request->from) {
            $from = $request->from;
        }
        if ($request->to) {
            $to = $request->to;
        }
        return response()->json(CourseRegistration::with('user','course.registrations','course.features','course.syllabus','course.questions.answers')
        ->whereBetween('created_at', [$from, $to])->whereId($request->id)->get());

        // return response()->json(Course::with(['registrations' => function ($query) use ($to, $from) {
        //     $query->whereBetween('created_at', [$from, $to]);
        // }, 'features', 'syllabus', 'questions.answers'])->whereTrainer_id(auth()->user()->id)->get());

// old code
        // return response()->json(Course::with(['registrations' => function ($query) use ($to, $from) {
        //     $query->whereBetween('created_at', [$from, $to]);
        // }, 'features', 'syllabus', 'questions.answers'])->whereTrainer_id(auth()->user()->id)->get());

// old code

    }

    public function paymentLog(Request $request, $from = '1970-01-01', $to = '2970-01-01', $search = "")
    {
        if ($request->from) {
            $from = $request->from;
        }
        if ($request->to) {
            $to = $request->to;
        }
        if ($request->search && $request->search != "") {
            $search = $request->search;
        }

        return response()->json(["payments" => Course::with(['registrations' => function ($query) use ($to, $from) {
            $query->whereBetween('created_at', [$from, $to]);
        }])->where('name', 'LIKE', "%{$search}%")->select('name', 'id')->get()]);
    }
}
