<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Session;

class FeedbackController extends Controller
{
    public function feedback(request $request)
    {

    if($request->from && $request->to){
        $data['feedback']= Feedback::with('user')->whereHas('user',function($q){
            $q->whereType('user');
            })->whereBetween('created_at',[request('from'),request('to')])->get();
    }else{
        $data['feedback']= Feedback::with('user')->whereHas('user',function($q){
            $q->whereType('user');
            })->get(); 
    }
        return view('admin.feedback',$data);
    }

    public function trainer_feedback(request $request)
    {

    if($request->from && $request->to){

        $data['feedback']= Feedback::with('user')->whereHas('user',function($q){
        $q->whereType('trainer');
        })->whereBetween('created_at',[request('from'),request('to')])->get();
    }else{
        $data['feedback']= Feedback::with('user')->whereHas('user',function($q){
            $q->whereType('trainer');
            })->get(); 
    }
        return view('admin.trainer-feedback',$data);
    }


    public function feedback_user_view($id)
    {
       $data['feedback'] = Feedback::with('user')->whereId($id)->first();
        return view('admin.feedback-user-details',$data);
    }

    public function feedback_trainer_view($id)
    {
        $data['feedback'] = Feedback::with('user')->whereId($id)->first();
        return view('admin.feedback-trainer-details',$data);
    }

    public function feedback_delete($id)
    {
         Feedback::whereId($id)->delete();
         Session::flash('error','Feedback has been Deleted');
         return redirect( url('feedback'));
 
    }
}
