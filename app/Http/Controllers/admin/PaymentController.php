<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseRegistration;
use App\Models\Order;
use App\Models\PaymentLog;

class PaymentController extends Controller
{
    public function user_pay_logs(request $request,$id)
    {
    if($request->from && $request->to && $id){

        $data['CourseRegistration']=CourseRegistration::with('course')->whereBetween('created_at',[request('from'),request('to')])->whereUserId($id)->get();
    }else{
        $data['CourseRegistration']=CourseRegistration::with('course')->whereUserId($id)->get();

    }
        return view('admin.order-log-v1',$data);
    }

  public function payment_logs(request $request)
  {
      $data['payment']=Order::with('payment','order_payment','user')->get();
      
      return view('admin.payment-log',$data);
  }



  public function payment_logs_course(request $request)
  {
    if($request->from && $request->to){
        $data['payment']=CourseRegistration::with('course')->whereBetween('created_at',[request('from'),request('to')])->get();
    }else{
        $data['payment']=CourseRegistration::with('course')->get();

    }

      return view('admin.payment-log-course',$data);
  }


}
