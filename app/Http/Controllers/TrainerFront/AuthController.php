<?php

namespace App\Http\Controllers\TrainerFront;


use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Traits\StripeCard;
use App\Traits\StripePayment;

use App\Models\PaymentLog;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use App\Models\Product;
use App\Models\Course;
use App\Notifications\SendEmail;
use App\Notifications\SendNotification;
use DB;
use Session;
use Carbon\Carbon;

class AuthController extends Controller
{
    use StripeCard, StripePayment;

    public function index()
    {
        $data['course']=  Course::with('features','questions','syllabus','user','quiz_attempts','registrations')->whereStatus('active')->get();
        // dd($data);
        $data['product']=Product::with('multi_images','wishlist')->whereStatus('active')->get();
        return view('user.index',$data);
    }
        


    public function trainer_register_1()
    {

        return view('trainer.auth.trainer_register-1');
    }


    public function trainer_register_1_insert(request $request)
    {
        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'type' => 'trainer',
            'trial_ends_at'=>date('Y-m-d'),
        ]);

        $user->save();
    
       return redirect(url('trainer/trainer_register_2/'.$user->id));
  
     
     
        
    }

    public function trainer_register_2_insert(request $request)
    {
        $user = User::whereId($request->register_id)->first();
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zipcode = $request->zipcode;
        $user->save();
    
       return redirect(url('trainer/trainer_register_3/'.$user->id));
    }



    public function trainer_register_2($id)
    {
        $data['register_id'] = $id;
        return view('trainer.auth.trainer_register-2',$data);
    }

    public function trainer_register_3($id)
    {
        $data['register_id'] = $id;
        $data['plan'] = Plan::all();

        return view('trainer.auth.trainer_register-3',$data);
    }



    public function trainer_register_4(request $request)
    {
       $data['package_id'] =  $request->radio;
       $data['register_id'] =     $request->register_id;
        return view('trainer.auth.trainer_register-4',$data);  
    }
    
    public function trainer_register_4_insert(request $request)
    {

        $user = User::whereId($request->register_id)->first();
        $plan = Plan::whereId($request->package_id)->first();
        
        $month_year = explode('/',$request->exp_month_year);
        $month = $month_year[0];
        $year = $month_year[1];

        $stripe_payment = $this->stripe($request->card_number, $month,$year, $request->cvv_code, $plan->amount ,$user->email);  
        if($stripe_payment->original['status'] !== 'error')
        {

        DB::beginTransaction();
        

        $userplan = new UserPlan();
        $userplan->user_id = $request->register_id;
        $userplan->plan_id = $request->package_id;
        $userplan->status = '1';
        $userplan->save();


        $paymentlog = new PaymentLog();
        $paymentlog->subscription_id = $userplan->id;
        $paymentlog->user_id = $request->register_id;
        $paymentlog->amount = $plan->amount;
        $paymentlog->charge_id = $stripe_payment->original['customer'];
        $paymentlog->paymentable_type = 'App\Models\Subscription';
        $paymentlog->paymentable_id = $request->package_id;
        $paymentlog->payment_type = 'subscription';
        $paymentlog->status = '1';
        $paymentlog->save();


        DB::commit();
    }
    
    $user->save();

   


    return redirect(url('user_login'));

}

    public function trainer_auth(request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
        {
        return redirect( url('user_front_profile'));
        }else{
        Session::flash('error','email or Password is incorrect');
        return redirect( url('user_login'));
        }
    }

    public function user_front_logout()
    {
        Auth::logout();
        return redirect( url('user_login'));
    }

    public function trainer_front_profile()
    {

        return view('trainer.profile.trainer_profile');
    }

    public function trainer_front_edit_profile()
    {

        return view('trainer.profile.trainer_edit-profile');
    }

    public function trainer_front_update(request $request)
    {

        if( $request->file('user_image') )
        {
            $file                    = $request->file('user_image');
            $timestamp               = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $image   = $timestamp.'-'.str_replace([' ', ':'], '-', $file->getClientOriginalName());
            $file->move( public_path('storage/images/'), $image );
            $image_url = url('/storage/images/').'/'.$image;
            $request['userimage'] = $image_url;
        }
        $user = User::whereId(Auth::user()->id)->first();
        $user->userimage = $image_url ?? $user->userimage;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zipcode = $request->zipcode;
        $user->save();

        Session::flash('message',"Profile has been Updated Successfully");
        return redirect(url('trainer/trainer_front_profile'));
        
    }
    
    

    public function trainer_front_change_password()
    {

        return view('trainer.profile.trainer_change-password');
    }

    public function trainer_front_update_password(request $request)
    {
    
        $user  =User::whereId(auth()->user()->id)->first();
    
    
        if (!(Hash::check($request->current_password, $user->password))) {
            Session::flash('error','Your current password does not matches with the password you provided');
            return redirect('user_front_change_password');
        }
    
        if (strcmp($request->current_password, $request->password) == 0) {
            Session::flash('error','New Password cannot be same as your current password. Please choose a different password');
            return redirect('user_front_change_password');
        }
    
        $user->password = Hash::make($request->password);
        $user->save();
    
        Session::flash('message','Your password has been changed!');
        return redirect('user_front_change_password');

    }


        
}
