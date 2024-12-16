<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Lesson;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //
    public function index(Request $request){
        $category_id = $request->query('category_id');
        $sort = $request->query('sort');

        $categories  = Category::all();

        $query = Course::query();

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        if ($sort == 'popular') {
            $query->leftJoin('course_users', 'courses.id', '=', 'course_users.course_id')
            ->select('courses.*')
            ->selectRaw('COUNT(course_users.user_id) as total_users')
            ->groupBy('courses.id')
            ->orderByDesc('total_users'); // Order by the number of users (popularity)

      // Execute the query to retrieve courses
    }
    $courses = $query->get();
        return view('courses', compact('courses', 'categories'));
    }



    public function classroom($id, $lesson_slug){
    $courseUser = CourseUser::where('user_id', Auth::user()->id)->where('course_id', $id)->get();
    if($courseUser->isEmpty()){
        return redirect()->route('dashboard')->with('error', 'You are not enrolled in this course');
    }
      $video = Lesson::where('slug', $lesson_slug)->value('video_url');
      if(!$video){
        return redirect()->route('dashboard')->with('error', 'Lesson not found');
      }
        $course = $courseUser->first()->course;

      return view('classroom', compact('course', 'video'));
    }

    public function show($slug){
        $course = Course::where('slug', $slug)->first();
        return view('course-detail', compact('course'));
    }
}
