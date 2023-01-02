<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseQuizQuestionAnswer extends Model
{
    protected $fillable = [
        'course_question_id',
        'answer',
        'correct',
    ];
    use HasFactory;
}
