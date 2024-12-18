<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function showRegisterForm(){
        return view('auth.register');
    }


    public function registerSubmit(Request $request){
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = new User();
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->photo_url = 'https://cdn-icons-png.flaticon.com/512/4645/4645949.png';
        $user->password = bcrypt($request->password);

        $user->save();
        $user->sendEmailVerificationNotification();
        Auth::login($user);

        return redirect()->route('verification.notice')->with('message', 'Registration successful. Please verify your email.');
    }

    public function loginSubmit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password)){
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'Logged in successfully.');
        }

        return back()->with('error', 'Invalid email or password');

    }

    public function logoutSubmit(){
        Auth::logout();
        return redirect('/');
    }
}
