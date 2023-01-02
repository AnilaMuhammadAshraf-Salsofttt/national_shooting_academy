<?php

namespace App\Http\Controllers\TrainerFront;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseFeature;
use App\Models\CourseFiles;
use App\Models\CourseQuizQuestion;
use App\Models\CourseQuizQuestionAnswer;
use App\Models\CourseRegistration;
use App\Models\CourseSyllabus;
use App\Models\Product;
use Asm89\Stack\Cors;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function trainer_course_detail($id)
    {
        $data['course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations')
            ->whereStatus('active')->whereId($id)->first();

        return view('user.course.coursedetail', $data);
    }

    public function trainer_course_logs()
    {
        $data['course_log'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations')
            ->when(request('to'), function ($q) {

                $from_date = request('from') . '00:00:01';
                $to_date = request('to') . '23:59:59';
                $fm = date('Y-m-d H:i:s', strtotime($from_date));
                $t = date('Y-m-d H:i:s', strtotime($to_date));
                $q->whereBetween('created_at', [$fm, $t]);
            })->whereTrainerId(auth()->user()->id)
            ->paginate(6);

        return view('trainer.course.course_log', $data);
    }

    public function course_add($id = null)
    {
        if ($id) {
            $data['courses'] = Course::with('product', 'features', 'syllabus', 'questions', 'questions.answers', 'files')->whereId($id)->first();
            return view('trainer.course.course_add', $data);
        } else {
            $data['product'] = Product::all();
            return view('trainer.course.course_add_1', $data);
        }
    }

    public function course_enrolled_users($id)
    {
        $data['enrolled_course'] = CourseRegistration::with('course', 'user')->whereCourseId($id)->get();
        return view('trainer.course.enrolled_users', $data);
    }

    public function course_enrolled_users_details($id)
    {
        $data['enrolled_course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations.user')
            ->whereId($id)->first();

        return view('trainer.course.enrolled_user_detail', $data);
    }

    public function course_view_quiz($id)
    {
        $data['enrolled_course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations.user')
            ->whereId($id)->first();

        return view('trainer.course.course_view_quiz', $data);
    }

    public function course_insert()
    {
        $course = new Course();
        $course->trainer_id = auth()->user()->id;
        $course->product_id = request('product_id');
        $course->save();

        return redirect(route('course.create', $course->id));
    }

    public function course_feature_insert(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $course = Course::whereId($id)->first();
        $course->name = request('name');
        $course->description = request('description');
        $course->status = request('status');
        $course->save();

           if ($request->feature_name) {
            CourseFeature::whereCourseId($id)->delete();

            for ($i = 0; $i < count(request('feature_name')); $i++) {
                $feature = new CourseFeature();
                $feature->course_id = $course->id;
                $feature->title = request('feature_name')[$i];
                $feature->value = request('feature_value')[$i];
                $feature->save();
            }
        }
        return redirect(route('course.create', $course->id));
    }

    public function course_lecture_insert(Request $request, $id)
    {
        $request->validate([
            'lecture_name' => 'required',
            'upload_video' => 'required',
        ]);

        CourseSyllabus::whereCourseId($id)->delete();

        foreach (request()->file('upload_video') as $key => $file) {

            $feature = new CourseSyllabus();
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $video = $timestamp . '-' . str_replace([' ', ':'], '-', $file->getClientOriginalName());
            $file->move(public_path('storage/videos/'), $video);
            $video_url = '/storage/videos/' . $video;


            $feature->course_id = $id;
            $feature->title = request('lecture_name')[$key];
            $feature->video = $video_url;
            $feature->duration = '3';
            $feature->save();

        }
        return redirect(route('course.create', $id));
    }

    public function course_file_insert(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'upload_file' => 'required',
        ]);

        $files = CourseFiles::whereCourseId($id)->get();

        foreach ($files as $file){
            if (unlink(public_path() . $file->path)) {
                $file->delete();
            }
        }

        foreach (request()->file('upload_file') as $key => $file) {

            $courseFile = new CourseFiles();
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $video = $timestamp . '-' . str_replace([' ', ':'], '-', $file->getClientOriginalName());
            $file->move(public_path('storage/files/'), $video);
            $fileUrl = '/storage/files/' . $video;

            $courseFile->course_id = $id;
            $courseFile->title = request('title')[$key];
            $courseFile->path = $fileUrl;
            $courseFile->save();
        }
        return redirect(route('course.create', $id));
    }
    
    public function course_image_insert(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $course = Course::whereId($id)->first();

        if ($course->image != 0) {
            if (unlink(public_path('storage/course/') . $course->image)) {
                $file = $this->imageUpload($request);
                $course->image = $file;
            }
        } else {
            $file = $this->imageUpload($request);
            $course->image = $file;
        }
        $course->save();

        return redirect(route('course.create', $id));
    }

    private function imageUpload($request)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $file = $timestamp . '-' . str_replace([' ', ':'], '-', $request->image->getClientOriginalName());
        $request->image->move(public_path('storage/course/'), $file);
        return $file;
    }

    public function course_file_remove(Request $request)
    {
        $courseFile = CourseFiles::whereId($request->id)->first();
        if (unlink(public_path() . $courseFile->path)) {
            $output = ["task" => "You have Deleted Video", "completed" => 'success'];
            $courseFile->delete();
        } else {
            $output = ["task" => "Something Went Wrong", "completed" => 'error'];
            $courseFile->delete();
        }

        return response()->json($output);
    }

    public function course_quiz_insert($id)
    {
        $course = Course::whereId($id)->first();
        $course->quiz_title = request('quiz_title');
        $course->duration = request('duration');
        $course->passing_criteria = request('passing_criteria');
        $course->points_per_quesiton = request('points_per_question');
        $course->charges = request('charges');
        $course->attempts = request('attempts');

        $course->save();

        if (request('question')) {

            foreach (request('question') as $question) {
                $quiz_ques = new CourseQuizQuestion();
                $quiz_ques->question = $question[0];
                $quiz_ques->form = $question[1];
                $quiz_ques->course_id = $id;
                $quiz_ques->save();

                foreach ($question['value_of_ans'] as $all_ans) {

                    $j = 0;
                    for ($i = 0; $i < count($all_ans) - 1; $i++) {
                        $j++;
                        $quiz_ques_ans = new CourseQuizQuestionAnswer();
                        $quiz_ques_ans->answer = $all_ans[$i];
                        $quiz_ques_ans->correct = isset($all_ans['correct_ans'][$j]) ? $all_ans['correct_ans'][$j] : '0';
                        $quiz_ques_ans->course_question_id = $quiz_ques->id;
                        $quiz_ques_ans->save();
                    }
                }
            }
        }
        return redirect(route('course.create', $id));
    }

    public function course_feature_remove()
    {
        CourseFeature::whereId(request('id'))->delete();
        $output = ["task" => "You have Deleted feature", "completed" => 'success'];
        return response()->json($output);

    }

    public function course_video_remove()
    {
        $course = CourseSyllabus::whereId(request('id'))->first();
        $course->video = null;
        $course->save();

        $output = ["task" => "You have Deleted Video", "completed" => 'success'];
        return response()->json($output);
    }

    public function course_lecture_remove()
    {
        CourseSyllabus::whereId(request('id'))->delete();
        $output = ["task" => "You have Deleted Lecture", "completed" => 'success'];
        return response()->json($output);
    }

    public function quiz_question_remove()
    {
        CourseQuizQuestion::whereId(request('id'))->delete();
        CourseQuizQuestionAnswer::whereCourseQuestionId(request('id'))->delete();

        $output = ["task" => "You have Deleted Quiz", "completed" => 'success'];
        return response()->json($output);
    }
}
