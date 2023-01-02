<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'status', 'attempts', 'description', 'fee', 'quiz_title', 'passing_criteria', 'points_per_question', 'duration'];

    public function questions()
    {
        return $this->hasMany(LicenseQuestion::class);
    }

    public function license()
    {
        return $this->hasOne(TrainerLicense::class);
    }

    public function license_attempt()
    {
        return $this->hasMany(LicenseAttempts::class);
    }


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    // public function payment()
    // {
    //     return $this->morphMany(PaymentLog::class, 'paymentable');
    // }

    public function payment()
    {
        return $this->hasOne(PaymentLog::class, 'paymentable_id');
    }

}
