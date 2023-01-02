<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\License;
use App\Models\PaymentLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LicenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function user_license()
    {
        $data['license'] = License::with('license', 'questions', 'category')
            ->paginate(6);
        return view('user.license.license', $data);
    }

    public function user_license_detail($id)
    {
        $data['license'] = License::with('license', 'questions', 'category', 'license_attempt')->with(
            'payment', function ($q) {
            $q->where('user_id', Auth::user()->id)
                ->where('payment_type', 'license')
                ->where('status', '1');
        })->whereId($id)->first();

        return view('user.license.license_details', $data);
    }

    public function user_license_logs()
    {
        $data['license_log'] = PaymentLog::where([
            'payment_type' => 'license',
            'user_id' => Auth::user()->id
        ])->with('license')
            ->when(request('to'), function ($q) {

                $from_date = request('from') . '00:00:01';
                $to_date = request('to') . '23:59:59';
                $fm = date('Y-m-d H:i:s', strtotime($from_date));
                $t = date('Y-m-d H:i:s', strtotime($to_date));
                $q->whereBetween('created_at', [$fm, $t]);
            })->paginate(6);


//        $data['license_log'] = License::with('license', 'questions', 'category', 'license_attempt', 'payment')
//            ->when(request('to'), function ($q) {
//
//                $from_date = request('from') . '00:00:01';
//                $to_date = request('to') . '23:59:59';
//                $fm = date('Y-m-d H:i:s', strtotime($from_date));
//                $t = date('Y-m-d H:i:s', strtotime($to_date));
//                $q->whereBetween('created_at', [$fm, $t]);
//            })
//            ->whereHas('payment', function ($q) {
//                $q->whereUserId(auth()->user()->id)
//                    ->wherePaymentType('license');
//            })->paginate(6);

        //dd($data['license_log'][0]->license);
        return view('user.license.license_log', $data);
    }

    public function booked_license_view($id)
    {
        $data['license'] = License::with('license', 'questions', 'category', 'license_attempt')
            ->whereId($id)->first();

        return view('user.license.booked_license', $data);
    }

    public function license_quiz_view($id)
    {
        $data['quiz'] = License::with('questions.answers', 'license', 'license_attempt', 'category')
            ->whereId($id)
            ->first();
        return view('user.license.license_quiz_view', $data);
    }

}
