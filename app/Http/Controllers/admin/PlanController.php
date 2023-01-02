<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPlan;

class PlanController extends Controller
{
 
    public function user_sub_logs(request $request,$id)
    {
        if($request->from && $request->to && $id){

        $data['UserPlan']=UserPlan::with('plan')->whereUserId($id)->whereBetween('created_at',[request('from'),request('to')])->orderBy('id','desc')->get();
        }else{
        $data['UserPlan']=UserPlan::with('plan')->whereUserId($id)->orderBy('id','desc')->get();

        }
        return view('admin.user-sub-log',$data);
    }

    public function trainer_sub_logs(request $request,$id)
    {
        if($request->from && $request->to && $id){

        $data['UserPlan']=UserPlan::with('plan')->whereUserId($id)->whereBetween('created_at',[request('from'),request('to')])->orderBy('id','desc')->get();
        }else{
        $data['UserPlan']=UserPlan::with('plan')->whereUserId($id)->orderBy('id','desc')->get();

        }
        return view('admin.trainer-sub-log-v1',$data);
    }

 public function subscription_logs_user(request $request)
    {
        if($request->from && $request->to){

        $data['UserPlan']=UserPlan::with('plan','user')->whereHas('user',function($q){
            $q->whereType('user');
        })->whereBetween('created_at',[request('from'),request('to')])->orderBy('id','desc')->get();
        }else{
        $data['UserPlan']=UserPlan::with('plan','user')->whereHas('user',function($q){
            $q->whereType('user');
        })->orderBy('id','desc')->get();

        }
        return view('admin.subscription-logs-user',$data);
    }
    
    public function subscription_logs_trainer(request $request)
    {
        if($request->from && $request->to){

        $data['UserPlan']=UserPlan::with('plan','user')->whereHas('user',function($q){
            $q->whereType('trainer');
        })->whereBetween('created_at',[request('from'),request('to')])->orderBy('id','desc')->get();
        }else{
        $data['UserPlan']=UserPlan::with('plan','user')->whereHas('user',function($q){
            $q->whereType('trainer');
        })->orderBy('id','desc')->get();

        }
        return view('admin.subscription-logs-trainer',$data);
    }
    

}
