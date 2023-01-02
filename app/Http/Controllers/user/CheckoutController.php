<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\StripeCard;
use App\Traits\StripePayment;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\PaymentLog;
use App\Notifications\SendEmail;
use App\Notifications\SendNotification;
use DB;

class CheckoutController extends Controller
{
    use StripeCard, StripePayment;

    // public function __construct()
    // {
    //     $this->middleware('web')->except('logout');
    // }


    public function checkout()
    {
        $data['cartItem'] = \Cart::getContent();
        $data['sub_total'] = \Cart::getSubTotal();
        return view('user.checkout.u-checkout', $data);
    }

    public function checkout_insert(request $request, SendEmail $sendemail, SendNotification $sendnotification)
    {
        $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'phone' => 'required|numeric',
            'address1' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'state' => 'required',
            'country' => 'required|alpha',
            'email' => 'required|email',
        ]);

        $order = new Order();
        $order = $this->setOrder($order);
        $stripe_payment = $this->createPayment($request);

        if ($stripe_payment->original['status'] !== 'error') {

            DB::beginTransaction();

            $order->save();
            $this->saveOrderProducts($order);
            $this->savePaymentLogs($stripe_payment);

            \Cart::clear();

            DB::commit();
            if (Auth::check()) {
                $this->saveNotfications($sendnotification);
                $user = Auth::user();
            } else {
                $user = new \stdClass();
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
            }

            $subTotal = \Cart::getSubTotal();
            $taxAmount = $subTotal * (7 / 100);
            $amount = $subTotal + $taxAmount;
            // send email
            $data = [
                'subject' => 'Thanks for Order',
                'name' => $user->first_name . " " . $user->last_name,
                'phone' => request('phone'),
                'email' => request('email'),
                'address' => request('address1'),
                'product' => \Cart::getContent(),
                'subtotal' => $amount
            ];
            $sendemail->SendNotificationIn_Email('emails.order', $user->email, $data);
            // send email
        } else {
            return redirect()->back()->with(['message' => $stripe_payment->original['error']]);
        }
        return redirect(url('thanks'));
    }

    private function savePaymentLogs($stripe_payment)
    {
        $paymentlog = new PaymentLog();
        if (!Auth::user()) {
            $paymentlog->user_id = '';
        } else {
            $paymentlog->user_id = Auth::user()->id;
        }

        $subTotal = \Cart::getSubTotal();
        $taxAmount = $subTotal * (7 / 100);
        $amount = $subTotal + $taxAmount;

        $paymentlog->amount = $amount;
        $paymentlog->charge_id = $stripe_payment->original['customer'];
        $paymentlog->status = '1';

        if (!Auth::user()) {
            $paymentlog->paymentable_id = '';
        } else {
            $paymentlog->paymentable_id = Auth::user()->id;
        }

        $paymentlog->paymentable_type = "App\Models\Order";
        $paymentlog->payment_type = "orders";
        return $paymentlog->save();
    }

    private function createPayment($request)
    {
        $subTotal = \Cart::getSubTotal();
        $taxAmount = $subTotal * (7 / 100);
        $amount = $subTotal + $taxAmount;
        $month_year = explode('/', $request->expiry);
        $month = $month_year[0];
        $year = $month_year[1];
        return $this->stripe($request->card_number, $month, $year, $request->cvv_code, $amount, $request->email);
    }

    private function saveOrderProducts($order)
    {
        foreach (\Cart::getContent() as $products) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $products->id,
                'unit_price' => $products->price,
                'quantity' => $products->quantity,
                'line_total' => $products->quantity * $products->price,
            ]);
        }
    }

    private function saveNotfications($sendnotification)
    {
        $subTotal = \Cart::getSubTotal();
        $taxAmount = $subTotal * (7 / 100);
        $amount = $subTotal + $taxAmount;
        // notifications add
        $payload = [
            'subject' => 'New Order Book',
            'name' => auth()->user()->first_name . " " . auth()->user()->last_name,
            'mini_text' => auth()->user()->first_name,
            'type' => "new_order",
            'text' => " New Order Book",
            'product' => \Cart::getContent(),
            'subtotal' => $amount,
            'action_url' => "#",
            'target_url' => "#",
            'action_text' => "order",
            'transaction_id' => auth()->user()->id
        ];

        $sendnotification->InsertNotificationIn_DB(
            'order_book',
            'App\Models\User',
            auth()->user()->id,
            $payload
        );

        $sendnotification->InsertNotificationIn_DB(
            'order_book',
            'App\Models\Admin',
            '1',
            $payload
        );
        // notifications add
    }

    private function setOrder($order)
    {
        if (!Auth::user()) {
            $order->user_id = '';
        } else {
            $order->user_id = Auth::user()->id;
        }

        $subTotal = \Cart::getSubTotal();
        $taxAmount = $subTotal * (7 / 100);
        $amount = $subTotal + $taxAmount;

        $order->customer_email = request('email');
        $order->customer_phone = request('phone');
        $order->customer_first_name = request('first_name');
        $order->customer_last_name = request('last_name');

        $order->billing_first_name = request('first_name');
        $order->billing_last_name = request('last_name');
        $order->billing_address1 = request('address1');
        $order->billing_address2 = request('address2');
        $order->billing_city = request('city');
        $order->billing_state = request('state');
        $order->billing_zip = request('zip');
        $order->billing_country = request('country');

        $order->shipping_first_name = request('shipping_first_name') ? request('shipping_first_name') : null;
        $order->shipping_last_name = request('shipping_last_name') ? request('shipping_last_name') : null;
        $order->shipping_address1 = request('shipping_address1') ? request('shipping_address1') : null;
        $order->shipping_address2 = request('shipping_address2') ? request('shipping_address2') : null;
        $order->shipping_city = request('shipping_city') ? request('shipping_city') : null;
        $order->shipping_state = request('shipping_state') ? request('shipping_state') : null;
        $order->shipping_zip = request('shipping_zip') ? request('shipping_zip') : null;
        $order->shipping_country = request('shipping_country') ? request('shipping_country') : null;
        $order->sub_total = $amount;
        $order->status = 'paid';

        if (!Auth::user()) {
            $order->guest_checkout = 'yes';
        } else {
            $order->guest_checkout = 'no';
        }
        return $order;
    }

    public function thanks()
    {
        return view('user.checkout.thanks');
    }
}
