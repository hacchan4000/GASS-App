<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\MotorController;
use App\Models\Motor;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;




Route::middleware("auth")->group(function(){
   Route::get('/', function () {
       return view('homepembeli');
   })->name('homepembeli');
   Route::get('/homepeminjam', function () {
       return view('homepeminjam');
   })->name('homepeminjam');


   Route::get('/profile', function () {
       return view('profilepage');
   })->name('profile');


   Route::get('/editprofile', function () {
       return view('editprofile');
   })->name('edit.profile');
   Route::get('/changepassword', function () {
       return view('changepassword');
   })->name('changepassword');


   Route::get('/notif', function () {
       return view('notif');
   })->name('notif');


   Route::get('/roomchat', function () {
       return view('roomchat');
   })->name('roomchat');


   Route::get('/toko', function () {
       return view('toko');
   })->name('toko');
  
   Route::get('/stores', function () {
       // Ambil daftar email pemilik motor yang unik (distinct)
       $pemilikEmails = Motor::distinct()->pluck('pemilik_motor');
       // Ambil data user yang email-nya cocok dengan pemilik_motor
       $pemilikUsers = User::whereIn('email', $pemilikEmails)->get();
      
       return view('storelist', ['pemilikUsers' => $pemilikUsers]);
   })->name('storelist');


   Route::get('/detail/{store}', function ($store) {
       // Decode slug store ke nama asli toko
       $decodedStore = Str::of($store)->replace('-', ' ')->title();
  
       // Cari user berdasarkan nama
       $user = User::whereRaw('LOWER(name) = ?', [strtolower($decodedStore)])->first();
  
       if (!$user) {
           abort(404, 'Toko tidak ditemukan.');
       }
  
       // Cari motor berdasarkan email user tersebut
       $motors = Motor::where('pemilik_motor', $user->email)->get();
  
       return view('detailtoko', [
           'storeName' => $user->name,
           'nomor'=> $user->phone,
           'motors' => $motors,
       ]);
   })->name('detailtoko');


   Route::post('/motor/store', [MotorController::class, 'store'])->name('motor.store');
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


