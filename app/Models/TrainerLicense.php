<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerLicense extends Model
{
    use HasFactory;


    protected $fillable = [
        'license_id',
        'user_id',
        'token',
        'certificate'
    ];
}
