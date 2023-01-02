<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Cashier\Subscription;
use Stripe\StripeClient;


class UserController extends Controller
{
    public function user()
    {
        return response()->json(["user" => Auth::user()]);
    }

    public function signup(Request $request)
    {
        // return response()->json("Received");
    

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            // 'userimage' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'device_id' => 'required',
            'plan' => 'required|exists:plans,id',
            'card_details' => 'array',
            'card_details.number' => 'required',
            'card_details.cvc' => 'required',
            'card_details.expiry' => 'required',

            // 'card_details.exp_year' => 'required',
        ]);

       
      
            
        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'userimage' => $request->userimage,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'zipcode' => $request->zipcode,
            'phone' => $request->phone,
            'device_id' => $request->device_id,
            'trial_ends_at'=>date('Y-m-d'),
        ]);

        $user->save();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = Str::random(80);
            $user->api_token = $token;
            $user->device_id = $request->device_id;
            $user->save();
        }
        \DB::beginTransaction();
        try {
        $SubscriptionController = new SubscriptionController();
        $plans = Plan::all();
        
        $stripe = new StripeClient(
          env('STRIPE_SECRET')
        );

        $stripeResult = $stripe->customers->create([
            'email' => $request->email,
        ]);
        $user->customer_id = $stripeResult->id;
        $user->save();

        $plan = Plan::find($request->plan);
        $user->subscribe($plan);
        
        \DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();
            // return response()->json(['message' => $e->getMessage()]);    
        }
        return response()->json([
            'plans' => $plans,
            'token' => Auth::user()->api_token,
            "message" => "Trainer Created successfully",
            'user' => Auth::user(),
        ]);
    }

    public function editUser(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'userimage' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
        ]);

        $user = auth()->user();

        if ($request->userimage) {
            $ext = $request->userimage->extension();
            $photo = $request->userimage->storeAs('images', Str::random(24) . ".{$ext}", 'public');
            $user->userimage = "storage/" . $photo;
        }

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
        return response()->json(["message" => "User updated Successfully"]);
    }


    public function changepassword(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required',

        ]);
        if (Hash::check($request->current_password, $user->password)) {
            if ($request->new_password == $request->password_confirmation) {
                $user->password = Hash::make($request->new_password);
                $user->save();
                return response()->json(["status" => "Password Updated"], 200);
            }
            return response()->json(["status" => "New Password and Confirm password must match"], 406);
        }
        return response()->json(["status" => "incorrect current password"], 406);
    }
}
