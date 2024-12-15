<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        $courseUsers = CourseUser::where('user_id', Auth::user()->id)->get();
        return view('dashboard', compact('courseUsers'));
    }
}
