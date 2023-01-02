<?php

namespace App\Http\Controllers\Trainer;



use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use \Stripe\Stripe;

class SubscriptionController extends Controller
{
    public function retrievePlans()
    {
        return Plan::all();
        // $key = \config('services.stripe.secret');
        /*$stripe = new \Stripe\StripeClient($key);
        $plansraw = $stripe->plans->all();
        $plans = $plansraw->data;

        foreach ($plans as $plan) {
            $prod = $stripe->products->retrieve(
                $plan->product,
                []
            );
            $plan->product = $prod;
        }
        return $plans;*/
    }


    public function showSubscription()
    {
        $plans = $this->retrievePlans();
        $user = Auth::user();

        return response()->json([
            //'user' => $user,
            // 'intent' => $user->createSetupIntent(),
            'plans' => $plans
        ]);
    }


    public function processSubscription(Request $request)
    {
        $request->validate([
            'plan' => 'nullable|exists:plans,id',
        ]);
        $card = $request->user()->cards()->where('is_default',1)->first();
        if(!$card){
            $request->validate([
                'card_details' => 'array',
                'card_details.number' => 'required',
                'card_details.cvc' => 'required',
                'card_details.expiry' => 'required',
            ]);
        }
        $user = Auth::user();
        if($user->is_recurring){
            $plan = $user->subscriptions()->latest()->first();
        }else{
            $request->validate([
                'plan' => 'required',
            ]);
            $plan = Plan::find($request->plan);
        }
        try {
            $user->subscribe($plan);
        } catch (Exception $e) {
            // return response()->json(['status' => false,'message' => $e->getMessage()]);
        }

        return response()->json(["message" => "Successfully subscribed package!"]);
    }


    public function allSubscriptions(Request $request)
    {
        // $current_plan = auth()->user()->subscriptions()->where('user_plans.status',1)->first();
        // $plans = Plan::when(request()->filled('id'),function($q){
        //     $q->where('id',request('id'));
        // })
        // ->when(request()->filled('from') && request()->filled('to'),function($q){
        //     $q->whereDate('created_at','>=',request('from'))
        //     ->whereDate('created_at','<=',request('to'));
        // })
        // ->whereRaw('id IN (SELECT plan_id FROM user_plans WHERE user_id = ?)',[auth()->id()])
        // ->paginate();
        // return response()->json([
        //     "selectedPackage"=> $current_plan->type,
        //     "nextrenewPackage"=> $current_plan->type,
        //     "plans" => $plans,
        //     'current_plan' => $current_plan,
        // ]);


        $current_plan = [];

    $current_plan = auth()->user()->subscriptions()->where('user_plans.status',1);
    $data2 = auth()->user()->subscriptions()->where('user_plans.status',1)->get();
    // $current_plan->where('id','1');

    $data = $current_plan->get();


if(request()->filled('name') || request()->filled('from') && request()->filled('to')){

        $data = Plan::when(request()->filled('name'),function($q){
            $q->where('name','LIKE','%'.request('name').'%');
        })
        ->when(request()->filled('from') && request()->filled('to'),function($q){
            $q->whereDate('created_at','>=',request('from'))
            ->whereDate('created_at','<=',request('to'));
        })->get();
    }

        return response()->json([
            "selectedPackage"=> $data2[0]->type,
            "nextrenewPackage"=> $data2[1]->type,
            "subscription_log" => $data,
            // 'current_plan' => $plans,
        ]);




    }

    public function toggle_recurring(Request $request){
        $user = $request->user();
        $is_recurring = $request->user()->is_recurring == 1
        ?0
        :1;
        $user->is_recurring = $is_recurring;
        $user->save();
        return response()->json(['status' => true,'message'=> 'recurring status updated successfully']);
    }
}
