<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function user_order_logs()
    {
        $data['order_log'] =  Order::with('payment','order_payment')  ->whereUserId(auth()->user()->id)->when(request('to'),function($q){

            $from_date = request('from'). '00:00:01';
            $to_date = request('to'). '23:59:59';
            $fm = date('Y-m-d H:i:s', strtotime($from_date));
            $t = date('Y-m-d H:i:s', strtotime($to_date));
            $q->whereBetween('created_at', [$fm, $t]);
         })
          ->paginate(6);
        return view('user.order.order_log',$data);
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
}
