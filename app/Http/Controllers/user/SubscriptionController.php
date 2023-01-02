<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaymentLog;
use App\Models\Subscription;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    public function user_subscription_logs()
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
        return view('user.subscription.subscription_log',$data);
    }

    public function user_order_detail($id)
    {
        $data['order_log'] =  Order::with('payment','order_payment','order_payment.products','user','order_payment.products')
        ->whereUserId(auth()->user()->id)->whereHas('order_payment',function($q) use($id){
            $q->whereOrderId($id);
        })
          ->first();
        return view('user.order.order_detail',$data);
    }

    public function subscription_recurring()
    {
        $user = User::whereId(auth()->user()->id)->first();
        $user->is_recurring = request('is_recurring');
        $user->save();
    }

}
