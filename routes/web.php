<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware("auth")->group(function(){
    Route::get('/', function () {
        return view('homepembeli');
    })->name('home');

    Route::get('/profile', function () {
        return view('profilepage'); 
    })->name('profile');
    Route::get('/editprofile', function () {
        return view('editprofile');
    })->name('edit.profile');

    Route::get('/notif', function () {
        return view('notif'); 
    })->name('notif');

    Route::get('/roomchat', function () {
        return view('roomchat'); 
    })->name('roomchat');

    Route::get('/toko', function () {
        return view('toko'); 
    })->name('toko');

});


Route::get('/loginbaru', [AuthController::class, "login"])->name("loginbaru");
Route::post('/loginbaru', [AuthController::class, "loginPost"])->name("login.post");

Route::get('/registerbaru', [AuthController::class, "register"])->name("registerbaru");
Route::post('/registerbaru', [AuthController::class, "registerPost"])->name("register.post");










Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
