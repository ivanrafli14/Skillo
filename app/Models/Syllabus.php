<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    //
    protected $table = 'syllabuses';
    protected $fillable = [
        'course_id',
        'title',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getTotalItemAttribute()
    {
        return $this->lessons()->count();
    }

    public function getTotalDurationAttribute()
    {
        return $this->lessons()->sum('duration');
    }
}
