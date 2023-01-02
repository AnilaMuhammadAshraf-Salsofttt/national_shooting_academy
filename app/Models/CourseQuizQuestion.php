<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseQuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'question',
        'form',
    ];

    public function answers()
    {
        return $this->hasMany(CourseQuizQuestionAnswer::class, "course_question_id");
    }
    
}
