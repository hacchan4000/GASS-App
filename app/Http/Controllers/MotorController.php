<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MotorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'jenis_motor' => 'required|string',
            'nomor_polisi' => 'required|string',
            'harga' => 'required|numeric',
            'durasi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('gambar_motor'), $imageName);

        Motor::create([
            'id_motor' => Str::uuid(),
            'nomor_polisi' => $request->nomor_polisi,
            'jenis' => $request->jenis_motor,
            'harga' => $request->harga,
            'durasi' => $request->durasi,
            'is_available' => true,
            'pemilik_motor' => Auth::user()->email,
            'gambar_motor' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Motor berhasil ditambahkan!');
    }
}
