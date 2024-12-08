<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function courses()
    {
        return $this->BelongsToMany(Course::class, 'course_category');
    }
}
