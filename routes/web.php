<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware("auth")->group(function(){
    Route::get('/', function () {
        return view('homepembeli');
    })->name('home');
});


Route::get('/login', [AuthController::class, "login"])->name("login");
Route::post('/login', [AuthController::class, "loginPost"])->name("login.post");

Route::get('/register', [AuthController::class, "register"])->name("register");
Route::post('/register', [AuthController::class, "registerPost"])->name("register.post");

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
