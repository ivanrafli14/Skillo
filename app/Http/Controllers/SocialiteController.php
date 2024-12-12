<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('email', $user->email)->first();

            if($finduser){
                if (!$finduser->hasVerifiedEmail()) {
                    $finduser->markEmailAsVerified();  // Menandai email sebagai terverifikasi
                }
                Auth::login($finduser);

                return redirect('/dashboard');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt(Str::random(24)),
                    'email_verified_at' => now(),
                    'photo_url' => $user->avatar
                ]);

                Auth::login($newUser);

                return redirect('/dashboard');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
    //
}
