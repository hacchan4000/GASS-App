<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>@yield('title', 'Detail')</title>
  <link rel="stylesheet" href="{{ asset('style/tokopage.css') }}">
  <link rel="stylesheet" href="{{ asset('style/detailtoko.css') }}">
</head>
<body>
  <div class="bungkusputih1">
    <div class="container">
      @yield('content')
      <a href="/stores" class="detail-button small" style="margin-left: 30px;">← Kembali ke Daftar Toko</a>
    </div>
  </div>


