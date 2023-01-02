<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenseQuestionAnswer extends Model
{
    use HasFactory;


    protected $hidden = [
        "correct"
    ];

    
}
