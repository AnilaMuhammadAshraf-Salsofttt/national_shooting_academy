<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentLog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'subscription_id', 'amount', 'charge_id', 'status', 'paymentable_type', 'paymentable_id'];

    public function subscribe()
    {
        return $this->belongsTo(Subscription::class, 'subscription_id', 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function paymentable()
    {
        return $this->morphTo('paymentable');
    }

    public function license()
    {
        return $this->hasOne(License::class, 'id', 'paymentable_id');
    }
}
