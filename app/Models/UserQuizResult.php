<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\User;
class UserQuizResult extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
       public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
