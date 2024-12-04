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
        'thumbnail_url',
        'category',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_users');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getTotalVideoAttribute()
    {
        return $this->lessons()->count();
    }


    public function getTotalDurationAttribute()
    {
        return $this->lessons()->sum('duration');
    }

    public function getTotalUserAttribute()
    {
        return $this->users()->count();
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
