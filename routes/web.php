<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/homePeminjam', function () {
    return view('homepeminjam');
})->name('home peminjam');

Route::get('/homePembeli', function () {
    return view('homepembeli');
})->name('home pembeli');

Route::get('/profile', function () {
    return view('profil');
})->name('profil');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/roomChat', function () {
    return view('roomchat');
})->name('chat room');

Route::get('/tokoPage', function () {
    return view('tokopage');
})->name('toko');

Route::get('/notifikasi', function () {
    return view('notifikasi');
})->name('notifikasi');



Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
