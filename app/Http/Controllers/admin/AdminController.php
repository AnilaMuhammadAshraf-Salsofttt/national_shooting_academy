<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Session;
use App\Models\PaymentLog;
use App\Models\Notification;


class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function index()
    {
        return view('admin.login');
    }


    public function auth(request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect(url('dashboard'));

        } else {
            Session::flash('error', 'email or Password is incorrect');
            return redirect(url('/admin'));

        }

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(url('/admin'));

    }

    public function dashboard()
    {
        // dd(Auth::guard('admin')->user());


        $data['customer'] = User::count();
        $data['order'] = PaymentLog::count();
        $data['sale'] = PaymentLog::select(DB::raw('sum(amount) as amount'))->get();
        $data['average'] = PaymentLog::select(DB::raw('avg(amount) as avg'))->get();
        $data['totalUser'] = $this->totalUser();
        $data['totalCourse'] = $this->totalCourse();
        $data['notif'] = Notification::all();

        return view('admin.dashboard', $data);
    }

    public function totalUser()
    {
        $records = PaymentLog::
        select(DB::raw("Count(id) as count, MONTH(created_at) month"))
            ->groupBy(DB::raw("year(created_at), MONTH(created_at)"))
            ->get();

        $month = User::select(DB::raw("Count(id) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("month(created_at)"))
            ->get()->toArray();
        $month = array_column($month, 'count');

        $months = collect(['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);

        $chartData = collect([]);

        for ($i = 1; $i <= 12; $i++) {
            $std = new \stdClass();
            $std->key = $months[$i];
            $std->value = $records->where('month', $i)->sum('count');
            $chartData->push($std);
        }

        return $chartData;


    }

    public function totalCourse()
    {
        $records = PaymentLog::
        select(DB::raw("Count(amount) as count, MONTH(created_at) month"))
            ->groupBy(DB::raw("year(created_at), MONTH(created_at)"))
            ->get();

        $month = Course::select(DB::raw("Count(id) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("month(created_at)"))
            ->get()->toArray();
        $month = array_column($month, 'count');

        $months = collect(['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);

        $chartData = collect([]);

        for ($i = 1; $i <= 12; $i++) {
            $std = new \stdClass();
            $std->key = $months[$i];
            $std->value = $records->where('month', $i)->sum('count');
            $chartData->push($std);
        }

        return $chartData;


    }

    public function profile()
    {
        return view('admin.view-profile');
    }

    public function edit_profile()
    {
        return view('admin.edit-profile');
    }

    public function update_admin(request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'max:50'],
        //     'phone_number' => ['required', 'min:8'],
        //     'address' => ['required'],
        // ],[
        //     'name.required' => 'Name field is required.',
        //     'name.max'  => 'Name is too long.',
        //     'phone_number.required' => 'Phone number is required.',
        //     'phone_number.min' => 'Phone number is too short.',
        //     'address.required' => 'Address field is required.',
        // ]);
        // dd($request->first_name);
        if ($request->file('user_image')) {
            $file = $request->file('user_image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $image = $timestamp . '-' . str_replace([' ', ':'], '-', $file->getClientOriginalName());
            $file->move(public_path('uploads/admin/'), $image);
            $image_url = url('/uploads/admin/') . '/' . $image;
            $request['image'] = $image_url;
        }
        $admin = Admin::whereId(Auth::guard('admin')->user()->id)->first();
        $admin->fill($request->all());
        $admin->image = $image_url ?? $admin->image;
        $admin->save();
        return redirect('edit_profile');

    }

    public function edit_password(request $request)
    {
        return view('admin.edit-password');
    }

    public function update_password(request $request)
    {
        // $user = $request->user();

        // $validator = \Validator::make($request->all(), [
        //     'current_password' => ['required'],
        //     'password' => ['required', 'string', 'min:8', 'max:50', 'confirmed'],
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['message' => $validator->errors()->all(),'error'=>true], 400);
        // }
        $user = Admin::whereId(Auth::guard('admin')->user()->id)->first();


        if (!(Hash::check($request->current_password, $user->password))) {
            Session::flash('error', 'Your current password does not matches with the password you provided');
            return redirect('edit_password');
        }

        if (strcmp($request->current_password, $request->password) == 0) {
            Session::flash('error', 'New Password cannot be same as your current password. Please choose a different password');
            return redirect('edit_password');


        }


        $user->password = Hash::make($request->password);
        $user->save();


        Session::flash('message', 'Your password has been changed!');
        return redirect('edit_password');
    }

    public function forgotPassword(Request $request)
    {
        $user = Admin::where("email", $request->email)->first();
        if ($user) {
            $user->validate_token = mt_rand(100000, 999999);
            $user->save();

            $data = [
                'token' => $user->validate_token,
            ];

            Mail::send('emails.forgot_password', $data, function ($message) {
                $admin = Admin::first();
                $message->to($admin->email, 'National Shooting Academy')->subject
                ('Forgot Password');
                $message->from('richardsteve979@gmail.com', 'National Shooting Academy');
            });

        }
        // return \response()->json(["user not registered"], 404);
        return redirect('verifyCode/' . $request->email);
    }

    public function password_recovery(Request $request)
    {
        return view('admin.password_recovery');
    }


    public function verifyCode(Request $request, $email)
    {
        return view('admin.verify_code');
    }


    public function updatePassword(Request $request)
    {

        $user = Admin::where([
            ["email", '=', $request->email],
            ["validate_token", '=', $request->token],
        ])->first();

        if ($request->password != $request->password_confirmation) {

            Session::flash('error', 'Passwords do not match');
            return redirect('verifyCode/' . $request->email);
        }

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->validate_token = "";
            $user->save();
        }

        Session::flash('message', 'Passwords is changes successfully plese login');
        return redirect('/');
    }

}
