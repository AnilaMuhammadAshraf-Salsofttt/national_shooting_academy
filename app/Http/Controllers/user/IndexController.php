<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use App\Traits\StripeCard;
use App\Traits\StripePayment;

use App\Models\PaymentLog;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use App\Models\Product;
use App\Models\Course;

use DB;
use Session;
use Carbon\Carbon;

class IndexController extends Controller
{
    use StripeCard, StripePayment;

    public function index()
    {
        $data['course'] = Course::with('features', 'questions', 'syllabus', 'user', 'quiz_attempts', 'registrations')->whereStatus('active')->get();
        $data['product'] = Product::with('multi_images', 'wishlist')->whereStatus('active')->get();
        return view('user.index', $data);
    }

    public function login()
    {
        return view('user.auth.login');
    }

    public function register_1()
    {
        return view('user.auth.register-1');
    }

    public function register_1_insert(Request $request)
    {
        $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|numeric',
        ]);

        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'trial_ends_at' => date('Y-m-d'),
        ]);

        $user->save();

        return redirect(url('register_2/' . $user->id));
    }

    public function register_2_insert(request $request)
    {
        $request->validate([
            'register_id' => 'required',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'country' => 'required|max:255',
            'zipcode' => 'required|max:255',
        ]);

        $user = User::whereId($request->register_id)->first();
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zipcode = $request->zipcode;
        $user->save();

        return redirect(url('register_3/' . $user->id));
    }


    public function register_2($id)
    {
        $data['register_id'] = $id;
        return view('user.auth.register-2', $data);
    }

    public function register_3($id)
    {

        $data['register_id'] = $id;
        $data['plan'] = Plan::all();

        return view('user.auth.register-3', $data);
    }

    public function register_4(request $request)
    {
        $request->validate([
            'register_id' => 'required',
            'radio' => 'required',
        ],
            [
                'radio.required' => 'A Package is required',
            ]);

        $data['package_id'] = $request->radio;
        $data['register_id'] = $request->register_id;
        return view('user.auth.register-4', $data);
    }

    public function register_4_insert(request $request)
    {
        $request->validate([
            'register_id' => 'required',
            'package_id' => 'required',
            'exp_month_year' => ['min:5|max:5', 'required', function ($attribute, $value, $fail) {
                if (!strstr($value, '/')) {
                    $fail('Expiry date format Invalid, Format for expiry is: mm/yy');
                }
            },],
            'card_number' => 'required',
            'cvv_code' => 'required',
        ],
            [
                'package_id.required' => 'A Package is required',
                'exp_month_year.min' => 'Expiry date format Invalid, Format for expiry is: mm/yy',
                'exp_month_year.max' => 'Expiry date format Invalid, Format for expiry is: mm/yy',
            ]);

        $user = User::whereId($request->register_id)->first();
        $plan = Plan::whereId($request->package_id)->first();

        $month_year = explode('/', $request->exp_month_year);
        $month = $month_year[0];
        $year = $month_year[1];

        $stripe_payment = $this->stripe($request->card_number, $month, $year, $request->cvv_code, $plan->amount, $user->email);
        if ($stripe_payment->original['status'] !== 'error') {

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
        } else {
            return redirect()->back()->with(['message' => $stripe_payment->original['error']]);
        }
        $user->save();

        return redirect(url('user_login'));
    }

    public function user_auth(request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ],
            [
                'email.exists' => 'Email does not exist in our database',
            ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->type == 'trainer') {
                return redirect(url('trainer/trainer_front_profile'));
            } else {
                return redirect(url('user_front_profile'));

            }
        } else {
            Session::flash('error', 'Credentials are     incorrect');
            return redirect(url('user_login'));
        }
    }

    public function user_front_logout()
    {
        Auth::logout();
        return redirect(url('user_login'));
    }

    public function user_front_profile()
    {

        return view('user.profile.profile');
    }

    public function user_front_edit_profile()
    {

        return view('user.profile.edit-profile');
    }

    public function user_front_update(request $request)
    {

        if ($request->file('user_image')) {
            $file = $request->file('user_image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $image = $timestamp . '-' . str_replace([' ', ':'], '-', $file->getClientOriginalName());
            $file->move(public_path('storage/images/'), $image);
            $image_url = url('/storage/images/') . '/' . $image;
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

        Session::flash('message', "Profile has been Updated Successfully");
        return redirect(url('user_front_profile'));
    }

    public function user_front_change_password()
    {
        return view('user.profile.change-password');
    }

    public function user_front_update_password(request $request)
    {

        $user = User::whereId(auth()->user()->id)->first();


        if (!(Hash::check($request->current_password, $user->password))) {
            Session::flash('error', 'Your current password does not matches with the password you provided');
            return redirect('user_front_change_password');
        }

        if (strcmp($request->current_password, $request->password) == 0) {
            Session::flash('error', 'New Password cannot be same as your current password. Please choose a different password');
            return redirect('user_front_change_password');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('message', 'Your password has been changed!');
        return redirect('user_front_change_password');
    }

    public function user_contact()
    {
        return view('user.contact.contact');
    }

    public function user_about()
    {
        return view('user.about.about-us');
    }

    public function user_contact_insert(Request $request)
    {
        $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
        ]);
        return redirect()->back()->with('message', 'Contact request has been sent to admin');
    }

    public function license()
    {
        return view('user.license');
    }

    public function password_recovery(Request $request)
    {
        return view('user.auth.password_recovery');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ],
            [
                'email.exists' => 'Email does not exist in our database! Contact Administrator.',
            ]);

        $user = User::where("email", $request->email)->first();

        if ($user) {
            $user->validate_token = mt_rand(100000, 999999);
            $user->save();
            $data = [
                'token' => $user->validate_token,
                'email' => $user->email
            ];

            Mail::send('emails.forgot_password', $data, function ($message) use ($user) {
                $message->to($user->email, 'National Shooting Academy')->subject
                ('Forgot Password');
                $message->from('richardsteve979@gmail.com', 'National Shooting Academy');
            });
        }
        return redirect('verifyCode/' . $request->email);
    }

    public function verifyCode(Request $request, $email)
    {
        return view('user.auth.verify_code');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'token' => 'required|exists:users,validate_token',
            'password' => 'required'
        ],
            [
                'email.exists' => 'Email does not exist in our database! Contact Administrator.',
                'token.exists' => 'Token not found or invalid.'
            ]);

        $user = User::where([
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

        Session::flash('message', 'Password successfully changed, please login.');
        return redirect('/');
    }

    public function blog()
    {
        return view('blog');
    }
}
