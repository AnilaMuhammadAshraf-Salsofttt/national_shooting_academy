<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainer_id',
        'product_id',
        'name',
        'status',
        'description',
        'quiz_title',
        'duration',
        'attempts',
        'passing_criteria',
        'points_per_quesiton',
        'charges',
        'image',
        'created_at',
    ];

    protected $appends = ['current_month', 'current_year'];

    public function getCurrentMonthAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at)->format('m');
    }

    public function getCurrentYearAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at)->format('Y');
    }

    public function features()
    {
        return $this->hasMany(CourseFeature::class);
    }

    public function questions()
    {
        return $this->hasMany(CourseQuizQuestion::class);
    }

    public function syllabus()
    {
        return $this->hasMany(CourseSyllabus::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, "trainer_id");
    }

    public function quiz_attempts()
    {
        return $this->hasMany(CourseQuizAttempt::class, 'course_id', 'id');
    }

    public function syllabi_attempts()
    {
        return $this->hasMany(CourseSyllabiAttempt::class, 'course_id', 'id');
    }

    public function registrations()
    {
        return $this->hasMany(CourseRegistration::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function files()
    {
        return $this->hasMany(CourseFiles::class, 'course_id', 'id');
    }
}
