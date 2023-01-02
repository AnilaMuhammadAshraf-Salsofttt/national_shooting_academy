<?php

namespace App\Http\Controllers\TrainerFront;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PaymentLog;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use App\Notifications\SendEmail;
use App\Notifications\SendNotification;
use App\Traits\StripeCard;
use App\Traits\StripePayment;

use DB;

class SubscriptionController extends Controller
{

    use StripeCard, StripePayment;


    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }
    
    public function trainer_subscription_logs()
    {
        $data['subscription_log'] =  UserPlan::with('payments','plan')
        ->whereHas('payments',function($q){

        $q->whereUserId(auth()->user()->id)
        ->wherePaymentType('subscription');
          })

        ->when(request('to'),function($q){

            $from_date = request('from'). '00:00:01';
            $to_date = request('to'). '23:59:59';
            $fm = date('Y-m-d H:i:s', strtotime($from_date));
            $t = date('Y-m-d H:i:s', strtotime($to_date));
            $q->whereBetween('created_at', [$fm, $t]);
         })
          ->paginate(6);
        //   dd($data);
        return view('trainer.subscription.subscription_log',$data);
    }

  

    public function subscription_recurring()
    {
        $user = User::whereId(auth()->user()->id)->first();
        $user->is_recurring = request('is_recurring');
        $user->save();
    }

    public function get_package()
    {
      return view('trainer.subscription.card_details');
    }

        public function pay_for_package(request $request,SendEmail $sendemail,SendNotification $sendnotification)
        {

            $plan = Plan::whereId($request->plan_id)->first();
            
            $month_year = explode('/',$request->exp_month_year);
            $month = $month_year[0];
            $year = $month_year[1];

            $stripe_payment = $this->stripe($request->card_number, $month,$year, $request->cvv_code, $plan->amount ,auth()->user()->email);  
            if($stripe_payment->original['status'] !== 'error')
            {

            DB::beginTransaction();
            

            $userplan = new UserPlan();
            $userplan->user_id = auth()->user()->id;
            $userplan->plan_id = $request->plan_id;
            $userplan->status = '1';
            $userplan->save();


            $paymentlog = new PaymentLog();
            $paymentlog->subscription_id = $userplan->id;
            $paymentlog->user_id = auth()->user()->id;
            $paymentlog->amount = $plan->amount;
            $paymentlog->charge_id = $stripe_payment->original['customer'];
            $paymentlog->paymentable_type = 'App\Models\Subscription';
            $paymentlog->paymentable_id = $request->plan_id;
            $paymentlog->payment_type = 'subscription';
            $paymentlog->status = '1';
            $paymentlog->save();



          $plan =  Plan::whereId($request->plan_id)->first();

          // notifications add
              $payload = [
              'subject' => 'New Package Purchased',
              'name' => auth()->user()->first_name." ".auth()->user()->last_name,
              'mini_text'=> auth()->user()->first_name,
              'type' =>"new_package",
              'text' => " New Package Purchased",
              'product' => $plan->name,
              'subtotal' => $plan->amount,
              'action_url' => "#",
              'target_url' => "#",
              'action_text' => "package",
              'transaction_id' => auth()->user()->id 
              ];

              $sendnotification->InsertNotificationIn_DB(
              'package_purchase', 
              'App\Models\User',
              auth()->user()->id,
              $payload
              );

              $sendnotification->InsertNotificationIn_DB(
              'package_purchase', 
              'App\Models\Admin',
              '1',
              $payload
              );
          // notifications add



          // send email
              $data = [
              'subject' => 'Thanks for Purchasing Package',
              'name' => auth()->user()->first_name." ".auth()->user()->last_name,
              'product' => $plan->name,
              'subtotal' => $plan->amount,

              ];

              $sendemail->SendNotificationIn_Email('emails.course_book', auth()->user()->email, $data);
          // send email

        
            DB::commit();
        }
        


        }



}
