<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    function loginPost(Request $request){
        $request->validate([   
            "email" => "required|email|unique:users",
            "password" => "required",
            "tipe" => "required|in:0,1",
        ]);
        $credential = $request->only("email", "password");
        if (Auth::attempt($credential)) {
            return redirect()->intended(route("home"));
        }

        return redirect(route("login"))->with("error", "Login gagal");
    }

    function register(){
        return view("auth.register");
    }

    function registerPost(Request $request){
        $request->validate([
            "nama" => "required|unique:users",
            "email" => "required|email|unique:users",
            "phone" => "required",
            "password" => "required",
            "tipe" => "required|in:0,1",
        ]);

        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tipe = $request->tipe;

        if ($user->save()) {
            return redirect(route("login"))->with("success", "berhasil nambah user");
        }

        return redirect(route("register"))->with("error", "gagal nambah user");
    }
}
