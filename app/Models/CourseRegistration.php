<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;


protected $fillable = ['course_id','user_id','status','price_paid'];

    public function user()
    {
        return $this->belongsTo(User::class)->select(array('id', 'first_name', 'last_name'));
    }


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
