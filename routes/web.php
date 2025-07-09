<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware("auth")->group(function(){
    Route::get('/', function () {
        return view('homepembeli');
    })->name('home');
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
