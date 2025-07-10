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
    @include('partials.storecard', ['nama' => 'Toko Rent Kuta', 'alamat' => 'Jalan Kuta Art Market', 'rating' => 4.5, 'image' => 'https://storage.googleapis.com/a1aa/image/1ad253b5-1226-44a9-efc7-a1487faab48c.jpg'])

    @include('partials.storecard', ['nama' => 'Dewa Motor', 'alamat' => 'Jalan Monkey Forest', 'rating' => 5, 'image' => 'https://storage.googleapis.com/a1aa/image/bcee3284-fab2-4ae4-9f5e-883cc2c5608c.jpg'])

    @include('partials.storecard', ['nama' => 'Matic Rental', 'alamat' => 'Jalan Nelayan Canggu', 'rating' => 5, 'image' => 'https://storage.googleapis.com/a1aa/image/95929cd8-86e9-4797-24fa-13855f07a886.jpg'])
  </div>
@endsection
