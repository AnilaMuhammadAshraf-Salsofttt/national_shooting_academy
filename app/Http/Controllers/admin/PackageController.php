<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Session;

class PackageController extends Controller
{
   
public function index(request $request)
{
    $data['plan']=Plan::latest()->first();

    return view('admin.package-management',$data);
}

public function edit_package(request $request,$id)
{
    $data['plan']=Plan::whereId($id)->first();

    return view('admin.package-management-edit',$data);
}


public function update_package(request $request)
{
    $plan = Plan::whereId($request->id)->first();
    $plan->name = $request->name;
    $plan->amount = $request->amount;
    $plan->save();

    Session::flash('message','Package Has Been Added Successfully');
    return redirect('package_management');
}
}
