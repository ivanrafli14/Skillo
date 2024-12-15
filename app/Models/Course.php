<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'video_url',
        'user_id',
        'thumbnail_url',
        'category_id',
        'author',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_users');
    }

    public function syllabusses()
    {
        return $this->hasMany(Syllabus::class);
    }

    public function getTotalVideoAttribute()
    {
        return $this->syllabusses()
        ->with('lessons') // Eager load lessons
        ->get()
        ->flatMap(function ($syllabus) {
            return $syllabus->lessons; // Flatten lessons from all syllabuses
        })
        ->count(); // Sum the 'duration' field from lessons
    }

    public function getTotalDurationAttribute()
    {
        return $this->syllabusses()
        ->with('lessons') // Eager load lessons
        ->get()
        ->flatMap(function ($syllabus) {
            return $syllabus->lessons; // Flatten lessons from all syllabuses
        })
        ->sum('duration'); // Sum the 'duration' field from lessons
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
