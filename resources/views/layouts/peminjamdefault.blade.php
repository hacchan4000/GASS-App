<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style/peminjam.css?v=1.2"/>
    <link rel="stylesheet" href="style/sidebar.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    
    <title>@yield('title', 'GASS')</title>
</head>


<body>
 <div class="background">
   <div class="inner-background">
     @include('partials.headerpeminjam') {{-- Header --}}
     <div class="inner-body">
       @yield('content') {{-- Konten halaman --}}
     </div>
   </div>

   @include('partials.sidebarpeminjam') {{-- Sidebar --}}
 </div>

 {{-- Scripts --}}
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 <script src="{{ asset('scripts/sidebar.js') }}"></script>
</body>
</html>
