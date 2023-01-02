<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'path'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'course_files';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
