<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'course_id',
        'completed_at',
        'progress',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
