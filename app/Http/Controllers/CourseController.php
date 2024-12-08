<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = Course::all();
        return view('courses', compact('courses'));
    }

    public function show($id){
        $course = Course::find($id);
        return view('course-detail', compact('course'));
    }
}
