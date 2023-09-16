<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.pages.homepage');
})->name('homepage');

// Route::get('/admin', function () {
//     return view('adminDashboard');
// });

Route::controller(UserAuthController::class)->group(function(){
    Route::get('/login', 'login')->name('login')->middleware('alreadyLoggedIn');
    Route::get('/login', 'login')->name('login')->middleware('alreadyLoggedIn');
    Route::get('/registration', 'registration')->name('registration')->middleware('alreadyLoggedIn');
    Route::post('/register-user', 'registerUser')->name('register-user');

    Route::post('/login-user', 'loginUser')->name('login-user');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('isLoggedIn');
    Route::get('/profile', 'profile')->name('profile');

    Route::get('/logout', 'logout')->name('logout');

    Route::get('/generate-pdf', 'generatePDF')->name('generate-pdf');

    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/job-detail', 'jobDetail')->name('job-detail');
    Route::get('/job-post', 'jobPost')->name('job-post');
});



Route::controller(AdminAuthController::class)->group(function(){
    // Route::get('/login', 'login')->name('login')->middleware('alreadyLoggedIn');
    // Route::get('/registration', 'registration')->name('registration')->middleware('alreadyLoggedIn');
    // Route::post('/register-user', 'registerUser')->name('register-user');

    // Route::post('/login-user', 'loginUser')->name('login-user');
    Route::get('/admin-dashboard', 'adminDashboard')->name('admin-dashboard');
    Route::get('/users', 'usersTable')->name('users');
    // Route::get('/profile', 'profile')->name('profile');

    // Route::get('/logout', 'logout')->name('logout');

    Route::get('/generate-userpdf', 'generatePDF')->name('generate-userpdf');
});
