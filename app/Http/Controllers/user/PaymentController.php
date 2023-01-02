<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\License;
use App\Models\PaymentLog;
use App\Notifications\SendEmail;
use App\Notifications\SendNotification;
use App\Traits\StripeCard;
use App\Traits\StripePayment;
use DB;

class PaymentController extends Controller
{
    use StripeCard, StripePayment;


// public function __construct(SendEmail $sendemail,SendNotification $sendnotification)
// {

//     $this->sendemail = $sendemail;
//     $this->sendnotification = $sendnotification;


// }


    public function payment_logs()
    {
        return view('user.payment.pay_logs');
    }

    public function book_course(request $request, SendEmail $sendemail, SendNotification $sendnotification)
    {

        $course = Course::whereId($request->course_id)->first();

        $month_year = explode('/', $request->exp_month_year);
        $month = $month_year[0];
        $year = $month_year[1];

        $stripe_payment = $this->stripe($request->card_number, $month, $year, $request->cvv_code, $course->charges, auth()->user()->email);
        if ($stripe_payment->original['status'] !== 'error') {

            DB::beginTransaction();
              
            $paymentlog = new PaymentLog();
            $paymentlog->user_id = auth()->user()->id;
            $paymentlog->amount = $course->charges;
            $paymentlog->charge_id = $stripe_payment->original['customer'];
            $paymentlog->status = '1';
            $paymentlog->paymentable_id = auth()->user()->id;
            $paymentlog->paymentable_type = "App\Models\Course";
            $paymentlog->payment_type = "courses";
            $paymentlog->save();

            $course_register = new CourseRegistration();
            $course_register->course_id = $request->course_id;
            $course_register->user_id = auth()->user()->id;
            $course_register->status = 'paid';
            $course_register->price_paid = $course->charges;
            $course_register->save();

            DB::commit();
        }

        // notifications add
        $payload = [
            'subject' => 'New Course Booked',
            'name' => auth()->user()->first_name . " " . auth()->user()->last_name,
            'mini_text' => auth()->user()->first_name,
            'type' => "new_course",
            'text' => " New Course Booked",
            'product' => $course->name,
            'subtotal' => $course->charges,
            'action_url' => "#",
            'target_url' => "#",
            'action_text' => "course",
            'transaction_id' => auth()->user()->id
        ];

        $sendnotification->InsertNotificationIn_DB(
            'course_book',
            'App\Models\User',
            auth()->user()->id,
            $payload
        );

        $sendnotification->InsertNotificationIn_DB(
            'course_book',
            'App\Models\Admin',
            '1',
            $payload
        );
        // notifications add


        // send email
        $data = [
            'subject' => 'Thanks for Booking Course',
            'name' => auth()->user()->first_name . " " . auth()->user()->last_name,
            'product' => $course,
            'subtotal' => $course->charges,

        ];

        $sendemail->SendNotificationIn_Email('emails.course_book', auth()->user()->email, $data);
        // send email

    }

    public function license_book(request $request, SendEmail $sendemail, SendNotification $sendnotification)
    {
        $license = License::whereId($request->license_id)->first();

        $month_year = explode('/', $request->exp_month_year);
        $month = $month_year[0];
        $year = $month_year[1];

        $stripe_payment = $this->stripe($request->card_number, $month, $year, $request->cvv_code, $license->fee, auth()->user()->email);
        if ($stripe_payment->original['status'] !== 'error') {

            DB::beginTransaction();

            $paymentlog = new PaymentLog();
            $paymentlog->user_id = auth()->user()->id;
            $paymentlog->amount = $license->fee;
            $paymentlog->charge_id = $stripe_payment->original['customer'];
            $paymentlog->status = '1';
            $paymentlog->paymentable_id = $request->license_id;
            $paymentlog->paymentable_type = "App\Models\License";
            $paymentlog->payment_type = "license";
            $paymentlog->save();

            DB::commit();

            // notifications add
            $payload = [
                'subject' => 'New License Booked',
                'name' => auth()->user()->first_name . " " . auth()->user()->last_name,
                'mini_text' => auth()->user()->first_name,
                'type' => "new_license",
                'text' => " New License Booked",
                'product' => $license,
                'subtotal' => $license->fee,
                'action_url' => "#",
                'target_url' => "#",
                'action_text' => "license",
                'transaction_id' => auth()->user()->id
            ];

            $sendnotification->InsertNotificationIn_DB(
                'license_book',
                'App\Models\User',
                auth()->user()->id,
                $payload
            );

            $sendnotification->InsertNotificationIn_DB(
                'license_book',
                'App\Models\Admin',
                '1',
                $payload
            );
            // notifications add

            // send email
            $data = [
                'subject' => 'Thanks for Booking License',
                'name' => auth()->user()->first_name . " " . auth()->user()->last_name,
                'product' => $license->quiz_title,
                'subtotal' => $license->fee,
            ];

            $sendemail->SendNotificationIn_Email('emails.license_book', auth()->user()->email, $data);
            // send email
        }
    }
}
