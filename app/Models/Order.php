<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id','customer_email','customer_phone','customer_first_name','customer_last_name',
    'billing_email','billing_phone','billing_first_name','billing_last_name','billing_address1','billing_address2',
    'billing_city','billing_state','billing_zip','billing_country','shipping_email','shipping_phone','shipping_phone',
    'shipping_first_name','shipping_last_name',
    'shipping_address1','shipping_address2','shipping_city','shipping_state','shipping_zip','shipping_country',
    'sub_total','status','guest_checkout'];

    public function payment()
    {
        return $this->morphMany(PaymentLog::class, 'paymentable');
    }

    public function user()
{
    return $this->hasOne(User::class,'id','user_id');
}

    public function order_payment()
    {
        return $this->hasMany(OrderProduct::class,'order_id','id');
    }
}
