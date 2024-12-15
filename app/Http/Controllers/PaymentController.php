<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function pricing(){
        return view('pricing');
    }

    public function payment(){
        if (Auth::check() && Auth::user()->subscription == 'premium') {
            return redirect('dashboard')->with('success', 'Success Enrolled Course');
        }
        return view('payment');
    }

    public function store($id){
        $user = User::find($id);
        $user->update([
            'subscription' => 'premium',
        ]);
        return redirect('/dashboard')->with('success', 'Payment successful.');
    }

    public function enroll($id){
        CourseUser::create([
            'user_id' => Auth::user()->id,
            'course_id' => $id,
            'progress' => 0,
        ]);

        return redirect()->route('dashboard')->with('success', 'Success Enrolled Course');
    }
}
