<!-- resources/views/storelist.blade.php -->
@extends('layouts.storedefault')

@section('title', 'Store List')

@section('content')
  <h1 class="title">Store List</h1>

  <div class="search-bar">
    <input type="text" placeholder="Search Store By Name or Location..." />
    <select>
      <option selected disabled>Category</option>
      <option>Motorcycle</option>
      <option>Vario</option>
      <option>Nmax</option>
    </select>
    <select>
      <option selected disabled>Location</option>
      <option>Kuta</option>
      <option>Canggu</option>
    </select>
  </div>

  <div class="store-list-container">
    @foreach ($pemilikUsers as $user)
    @include('partials.storecard', [
      'nama' => $user->name ?? 'Nama Toko',
      'alamat' => $user->alamat ?? 'Alamat tidak tersedia',
      'rating' => 4.5, // opsional bisa diganti dari relasi nanti
      'image' => $user->foto_toko ?? 'gambar/rental.png'
    ])
  @endforeach
  </div>
@endsection
