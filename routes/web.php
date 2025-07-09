<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('login');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', function () {
    return view('profilepage'); 
});

Route::get('/editprofile', function () {
    return view('editprofile');
})->name('edit.profile');

Route::get('/changepassword', function () {
    return view('changepassword');
})->name('changepassword');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
