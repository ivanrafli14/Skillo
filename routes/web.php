<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pricing', function () {
    return view('pricing');
  });

Route::get('/courses',[CourseController::class, 'index'])->name('courses');
Route::get('/courses/{id}',[CourseController::class, 'show'])->name('courses.show');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logoutSubmit'])->name('logout.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
->middleware(['auth', 'throttle:6,1'])
->name('verification.send');

Route::get('/google/redirect', [SocialiteController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');
