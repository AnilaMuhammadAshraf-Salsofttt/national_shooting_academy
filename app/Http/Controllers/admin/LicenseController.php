<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\License;
use App\Models\LicenseAttempts;
use App\Models\LicenseQuestion;
use App\Models\LicenseQuestionAnswer;
use App\Models\Category;
use Session;

class LicenseController extends Controller
{
    public function index()
    {
        $data['license'] =License::with('category')->when(request('to'),function($q){
            $q->whereBetween('created_at',[request('from'),request('to')]);
         })->get();
        return view('admin.license.license-management',$data);
    }

    public function license_add()
    {
      $data['category'] =  Category::all();

        return view('admin.license.add-new-license',$data);
    }

    public function license_insert(request $request)
    {
// dd($request->customRadio1);
// dd($request);

      $license =  new License();
      $license->fill($request->all());
      $license->save();


for($cc=0; $cc < count($request->form);  $cc++)
{
    $license_question =  new LicenseQuestion();
$license_question->license_id  = $license->id;
$license_question->question  = addslashes($request->question[$cc]);
$license_question->form  = addslashes($request->form[$cc]);
$license_question->save();
}

for($ee=1; $ee <= count($request->form);  $ee++)
{

for($dd=0; $dd < count($request->input('ans'.$ee));  $dd++)
{

  $id = 0;
  $id++;
    $LicenseQuestionAnswer =  new LicenseQuestionAnswer();
$LicenseQuestionAnswer->license_questions_id  = $license_question->id;
$LicenseQuestionAnswer->answer  = addslashes($request->input('ans'.$id)[$dd]);
$LicenseQuestionAnswer->correct  = 0;
$LicenseQuestionAnswer->save();

}
}
      Session::flash('message','License has been Added Successfully');
      return redirect(url('license'));
    }

    public function license_edit(request $request,$id)
    {
      $data['category'] =  Category::all();

      $data['license'] =  License::with('questions.answers','questions')->whereId($id)->first();
      $data['count'] =  LicenseQuestion::whereLicenseId($id)->count();
      return view('admin.license.edit-license',$data);

    }
    public function license_view(request $request,$id)
    {
      $data['category'] =  Category::all();

      $data['license'] =  License::with('questions.answers','questions','category')->whereId($id)->first();
      $data['count'] =  LicenseQuestion::whereLicenseId($id)->count();
      return view('admin.license.view-license',$data);

    }
    public function license_update(request $request)
    {
      $license=  License::whereId($request->id)->first();
      $license->fill($request->all());
      $license->save();

      Session::flash('message','License has been Updated Successfully');
      return redirect(url('license'));
    }

    public function license_delete(request $request,$id)
    {
        License::whereId($id)->delete();
      Session::flash('error','License has been Deleted Successfully');
      return redirect(url('license'));
    }

    public function license_question_delete(request $request,$id,$page_id)
    {
      LicenseQuestion::whereId($id)->delete();
      LicenseQuestionAnswer::whereLicenseQuestionsId($id)->delete();
      Session::flash('error','License has been Deleted Successfully');
      return redirect(url('license_edit/'.$page_id));
    }



    public function change_status(request $request)
    {
         $license=  License::whereId($request->id)->first();
        $license->status = $request->status;
        $license->save();

    }



}
