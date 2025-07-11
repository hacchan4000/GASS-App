<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(){
        return view("auth.loginbaru");
    }
    function loginPost(Request $request){
        $request->validate([   
            "email" => "required|email",
            "password" => "required",
            "tipe" => "required|in:0,1",
        ]);
        $credential = $request->only("email", "password");
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            
            if ($user->tipe == "1") {
                return redirect()->route("homepeminjam");
            } else {
                return redirect()->route("homepembeli");
            }
        }

        return redirect(route("loginbaru"))->with("error", "Login gagal");
    }

    function register(){
        return view("auth.registerbaru");
    }

    function registerPost(Request $request){
        $request->validate([
            "nama" => "required|unique:users,name",
            "email" => "required|email",
            "phone" => "required",
            "password" => "required",
            "tipe" => "required|in:0,1",
        ]);

        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->tipe = $request->tipe;

        if ($user->save()) {
            return redirect(route("loginbaru"))->with("success", "berhasil nambah user");
        }

        return redirect(route("registerbaru"))->with("error", "gagal nambah user");
    }
}
