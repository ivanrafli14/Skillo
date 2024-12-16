<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'payment'], function(){
    Route::get('/', [PaymentController::class, 'payment'])->name('payment')->middleware(['auth', 'verified']);
    Route::get('/pricing', [PaymentController::class, 'pricing'])->name('payment.pricing');
    Route::post('/{id}', [PaymentController::class, 'store'])->name('payment.store');
    Route::post('/course/{id}', [PaymentController::class, 'enroll'])->name('payment.enroll');
    Route::post('/midtrans/snap-token', [PaymentController::class, 'createSnapToken']);
    Route::get('/midtrans/success', [PaymentController::class, 'successHandler'])->name('payment.success');
});

Route::group(['prefix'=> 'courses'], function(){
    Route::get('/',[CourseController::class, 'index'])->name('courses.index');
    Route::get('/{id}/classroom/{lesson_slug}',[CourseController::class, 'classroom'])->name('courses.classroom')->middleware(['auth', 'verified']);
    Route::get('/{slug}',[CourseController::class, 'show'])->name('courses.show');
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logoutSubmit'])->name('logout.submit');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::group(['prefix' => 'email'], function (){
    Route::get('/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

});

Route::group(['prefix' => 'google'], function () {
    Route::get('/redirect', [SocialiteController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');
});


Route::fallback(function () {
    return response()->view('not-found', [], 404);
});
