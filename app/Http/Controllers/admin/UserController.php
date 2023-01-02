<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  
    public function index(request $request)
    {

        if($request->from && $request->to){
            $data['user']=User::whereType('user')->whereStatus('active')->whereBetween('created_at',[request('from'),request('to')])->get();

        }else{
            $data['user']=User::whereType('user')->whereStatus('active')->get();

        }
    return view('admin.users',$data);
    }


    public function user_profile(request $request,$id)
    {
        $data['user']=User::whereType('user')->whereId($id)->first();
         return view('admin.user-profile',$data);
    }


    public function user_edit_profile(request $request,$id)
    {
        $data['user']=User::whereType('user')->whereId($id)->first();
         return view('admin.user-edit-profile',$data);
    }



    public function update_profile(request $request)
    {

        $user=User::whereType('user')->whereId($request->id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zipcode = $request->zipcode;
        $user->phone = $request->phone;
        $user->save();

        return redirect( url('user_edit_profile',$request->id))->with('message','User Updated successfully');

    }



    public function block_user(request $request)
    {
        if($request->from && $request->to){
            $data['user']=User::whereType('user')->whereStatus('block')->whereBetween('created_at',[request('from'),request('to')])->get();

        }else{
            $data['user']=User::whereType('user')->whereStatus('block')->get();

        }
    return view('admin.block-user',$data);
    }



    public function chnage_status_block(request $request)
    {
        $user=User::whereType('user')->whereId($request->id)->first();
        $user->status = $request->status;
        $user->save();
    echo '
    <div class="modal fade blocked-modal" id="confirmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/check-blu.png" alt="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="modal-h1">System Message</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="txt">User '.$user->first_name.' has been '.$user->status.'</p>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>

        </div>
    </div>
</div>
    
    ';
    }

    
    
}
