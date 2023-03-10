<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSyllabus extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'video',
        'lecture_number',
        'duration'
    ];
}
