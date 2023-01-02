<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    use HasFactory;


Protected  $fillable  =['user_id','plan_id','status'];

    public function payments()
    {
        return $this->hasMany(PaymentLog::class, 'subscription_id', 'id');
    }
    public function plan()
    {
        return $this->hasMany(Plan::class, 'id','plan_id');
    }
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
