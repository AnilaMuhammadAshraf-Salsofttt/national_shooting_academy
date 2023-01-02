<?php

namespace App\Models;

use App\Models\Card;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Stripe\StripeClient;


class User extends Authenticatable
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'userimage',
        'address',
        'city',
        'state',
        'country',
        'zipcode',
        'phone',
        'api_token',
        'device_id',
        'status',
        'type',
        'trial_ends_at',
        'stripe_id',
        'card_brand',
        'card_last_four',
        'validate_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:Y-m-d',

    ];


    public function license()
    {
        return $this->hasOne(TrainerLicense::class);
    }
    public function cards()
    {
        return $this->hasMany(Card::class, 'user_id', 'id');
    }
    public function subscriptions()
    {
        return $this->belongsToMany(Plan::class, 'user_plans', 'user_id', 'plan_id')->withTimestamps();
    }

    public function payments()
    {
        return $this->hasMany(PaymentLog::class, 'user_id', 'id');
    }


    public function notification()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }

    public function subscribe($plan) {
        $amount = $plan->amount;
        try {

            $stripe = new StripeClient(env('STRIPE_SECRET'));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
        $card = $this->cards()->where('is_default',1)->first();
        if(!$card){

            $card_details = request('card_details');

            list($month,$year) = explode('/',request('card_details.expiry'));
            try {
                $token = $stripe->tokens->create([
                    'card' => [
                        'number' => $card_details['number'],
                        'cvc' => $card_details['cvc'],
                        'exp_month' => $month,
                        'exp_year' => $year,
                    ],
                ]);
            } catch (Exception $e) {
                throw new \Exception($e->getMessage(), 1);
            }
            $card_id = $token->id;

        }else{
            $card_id = $card->card_id;
        }

        $source = $stripe->customers->createSource(
          $this->customer_id,
          ['source' => $card_id]
        );

        list($month,$year) = explode('/',request('card_details.expiry'));

        $this->cards()->create([
            'card_id' => $source->id,
            'last_4' => $source->last4,
            'exp_month' => $month,
            'exp_year' => $year,
            'is_default' => 1,
        ]);
        try {
            $charge = $stripe->charges->create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'customer' => $this->customer_id,
                'source' => $source->id,
            ]);
        } catch (\Exception $e) {

            throw new \Exception($e->getMessage(), 1);
        }
        // dd($this->subscriptions());
        $this->subscriptions()->attach($plan->id);
        $newPlan = UserPlan::where('plan_id', $plan->id)
            ->where('user_id', $this->id)->latest('id')->first();
        $payment = $newPlan->payments()->save(new paymentLog([
            'user_id' => $this->id,
            'charge_id' => $charge->id,
            'amount' => $amount,
            'status' => 1,
            // 'payload' => $charge,
        ]));
        return ['id' => $payment->id, 'payload' => $charge];
    }
}
