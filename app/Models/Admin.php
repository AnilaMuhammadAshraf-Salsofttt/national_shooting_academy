<?php

namespace App\Models;

use App\Models\Card;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Stripe\StripeClient;


class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

protected $table = 'admins';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'phone', 'email', 'password', 'image','validate_token'
    ];
    protected $hidden = [
        'password',
    ];
  

}
