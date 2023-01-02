<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenseQuestion extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(LicenseQuestionAnswer::class, "license_questions_id");
    }
}
