<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    //
    protected $fillable = [
        'user_id',
        'course_id',
        'completed_at',
        'progress',
    ];
}
