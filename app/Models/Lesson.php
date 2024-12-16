<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'syllabus_id',
        'title',
        'duration',
        'slug',
        'video_url',
    ];

    public function syllabus()
    {
        return $this->belongsTo(Syllabus::class);
    }
}
