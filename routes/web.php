<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\Settings\PasswordController;


Route::middleware("auth")->group(function(){
    Route::get('/', function () {
        return view('homepembeli');
    })->name('homepembeli');
    Route::get('/homepeminjam', function () {
        return view('homepeminjam'); 
    })->name('homepeminjam');

    Route::get('/profile', function () {
        $user = auth()->user();
        return view('profilepage', ['user' => $user]);
        
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

    Route::post('/motor/store', [MotorController::class, 'store'])->name('motor.store');

});


Route::get('/loginbaru', [AuthController::class, "login"])->name("loginbaru");
Route::post('/loginbaru', [AuthController::class, "loginPost"])->name("login.post");

Route::get('/registerbaru', [AuthController::class, "register"])->name("registerbaru");
Route::post('/registerbaru', [AuthController::class, "registerPost"])->name("register.post");

Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::put('/changepassword', [PasswordController::class, 'update'])->name('password.update');


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/changepassword', function () {
    return view('changepassword');
})->name('changepassword');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
