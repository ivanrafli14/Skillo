<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'sylabus',
        'video_url',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user');
        
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
