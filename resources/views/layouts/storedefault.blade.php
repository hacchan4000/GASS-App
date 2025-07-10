<!-- resources/views/layouts/storedefault.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <title>@yield('title', 'Store List')</title>
 <link rel="stylesheet" href="{{ asset('style/tokopage.css') }}" />
 <link rel="stylesheet" href="{{ asset('style/sidebar.css') }}?v=1.2">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
 <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
</head>
<body>
  <div class="bungkusputih1">
    <div class="container">
      @yield('content')
    </div>
  </div>

  @include('partials.sidebar')

  <script src="{{ asset('scripts/sidebar.js') }}"></script>
</body>
</html>
