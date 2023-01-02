<?php

namespace App\Http\Controllers\TrainerFront;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\PaymentLog;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function index()
    {
      $data['course_register']=  CourseRegistration::with('user','course')
        ->whereHas('course',function($course){
            $course->whereTrainerId(auth()->user()->id);

        })->when(request('to'),function($q){

            $from_date = request('from'). '00:00:01';
            $to_date = request('to'). '23:59:59';
            $fm = date('Y-m-d H:i:s', strtotime($from_date));
            $t = date('Y-m-d H:i:s', strtotime($to_date));
            $q->whereBetween('created_at', [$fm, $t]);
         })->get();

        return view('trainer.payment.pay_logs',$data);
    }

}
