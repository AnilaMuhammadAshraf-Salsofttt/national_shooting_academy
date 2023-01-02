<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseRegistration;
use App\Models\Course;
use App\Models\CourseQuizQuestion;

class CourseController extends Controller
{
  
public function course(request $request,$id)
{
    if($request->from && $request->to && $id){

    $data['course'] = CourseRegistration::with('course')->whereUserId($id)->whereBetween('created_at',[request('from'),request('to')])->get();
    }else{
    $data['course'] = CourseRegistration::with('course')->whereUserId($id)->get();

    }
    return view('admin.courses',$data);

}

  
public function course_detail(request $request,$course_id)
{
    if($request->from && $request->to && $course_id){

    $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereId($course_id)->whereBetween('created_at',[request('from'),request('to')])->first();
    }else{
    $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereId($course_id)->first();
    }
    return view('admin.course-detail',$data);

}
public function course_log_detail(request $request,$course_id)
{
    if($request->from && $request->to && $course_id){

    $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereId($course_id)->whereBetween('created_at',[request('from'),request('to')])->first();
    }else{
    $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereId($course_id)->first();
    }
    return view('admin.view-course-log',$data);

}

public function course_enroll_user(request $request,$course_id)
{

    $data['course'] = CourseRegistration::with('course','user')->whereCourseId($course_id)->get();
    $data['trainer'] = Course::with('user')->whereId($course_id)->first();

    return view('admin.course-enroll-user',$data);

}

public function course_quiz(request $request,$course_id)
{
    $data['trainer'] = Course::with('user')->whereId($course_id)->first();
    $data['course_quiz'] =  CourseQuizQuestion::with('answers')->whereCourseId($course_id)->get();
    $data['count'] =  CourseQuizQuestion::with('answers')->whereCourseId($course_id)->count();

    return view('admin.course-quiz',$data);

}


public function trainer_course(request $request,$id)
{
    if($request->from && $request->to && $id){

        $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereTrainerId($id)->whereBetween('created_at',[request('from'),request('to')])->get();

    }else{
        $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereTrainerId($id)->get();

    }
    return view('admin.trainer-courses-log',$data);

}


public function change_course_status(request $request)
{

    $course = Course::whereId($request->id)->first();
    $course->status = $request->status;
    $course->save();
    return json_encode(array('message'=>'Status has beend changed to '.$request->status));
}

public function course_log(request $request)
{
    if($request->from && $request->to){

        $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereBetween('created_at',[request('from'),request('to')])->get();

    }else{
        $data['course'] = Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->get();

    }
    return view('admin.courses-log',$data);

}


}
