<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        'slug',
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

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function getTotalVideoAttribute()
    {
        return $this->syllabusses()
        ->with('lessons')
        ->get()
        ->flatMap(function ($syllabus) {
            return $syllabus->lessons;
        })
        ->count();
    }

    public function getTotalDurationAttribute()
    {
        return $this->syllabusses()
        ->with('lessons')
        ->get()
        ->flatMap(function ($syllabus) {
            return $syllabus->lessons;
        })
        ->sum('duration');
    }


    public function getTotalUserAttribute()
    {
        return $this->users()->count();
    }

    public function getRatingAttribute()
    {
        return round($this->testimonials()->avg('rating'), 2);
    }

    public function getTotalTestimonialAttribute()
    {
        return $this->testimonials()->count();
    }

    public function getIsEnrolledAttribute()
    {
        return $this->users()->where('user_id', Auth::user()->id)->exists();
    }

}
