<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
    <link rel="stylesheet" href="style/tokopage.css">
    <link rel="stylesheet" href="{{ asset('style/sidebar.css') }}?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

</head>
<body>
    <div class="bungkusputih1">

        <div class="container">
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

<div class="store-highlight">
  <div class="store-info">
    <img src="https://storage.googleapis.com/a1aa/image/1ad253b5-1226-44a9-efc7-a1487faab48c.jpg" alt="Toko Rent Kuta" />
    
    <div class="store-text">
      <h2>Toko Rent Kuta</h2>
      <p class="type">Motorcycle</p>
      <p class="address">Jalan Kuta Art Market</p>
    </div>

    <a href="#" class="detail-button small">Lihat Detail</a>
  </div>

  <hr class="divider" />

  <div class="store-rating">
    <span class="rating-text">Rating: <strong>4.5</strong></span>
    <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
    </div>
  </div>
</div>

<div class="store-row">
  <div class="mini-card">
    <img src="https://storage.googleapis.com/a1aa/image/bcee3284-fab2-4ae4-9f5e-883cc2c5608c.jpg" alt="Dewa Motor" />
    <div class="mini-info">
      <h3>Dewa Motor</h3>
      <p class="type">Motorcycle</p>
      <p class="address">Jalan Monkey Forest</p>
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
      </div>
      <hr class="mini-divider" />
      <div class="bottom-line">
        <span><strong>Rating :</strong> 5</span>
        <a href="#" class="detail-button small">Lihat Detail</a>
      </div>
    </div>
  </div>

  <div class="mini-card">
    <img src="https://storage.googleapis.com/a1aa/image/95929cd8-86e9-4797-24fa-13855f07a886.jpg" alt="Matic Rental" />
    <div class="mini-info">
      <h3>Matic Rental</h3>
      <p class="type">Motorcycle</p>
      <p class="address">Jalan Nelayan Canggu</p>
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
      </div>
      <hr class="mini-divider" />
      <div class="bottom-line">
        <span><strong>Rating :</strong> 5</span>
        <a href="#" class="detail-button small">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>
<nav class="sidebar">
  <header>
    <div class="image-text">
      <span class="image">
        <img src="gambar/logo.png" alt="logo"><!-- masukin logo apk kita tar-->
      </span>

      <div class="text header-text">
        <span class="name">GASS</span>
        <span class="profession">Go And Start the Street</span>
      </div>
    </div>

    <i class='bx bx-chevron-right toggle'></i>
  </header>
  
  <div class="menu-bar">
    <div class="menu">

      <li class="search-box">
          
        <i class='bx bx-search-alt-2 icon' ></i>
        <input type="search" placeholder="Search...">
          
      </li>
      <ul class="menu-links">
        <li class="nav-link">
          <a href="{{ route('homepembeli') }}">
            <i class='bx bx-home-alt icon' ></i>
            <span class="text nav-text">Home</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="{{ route('profile') }}">
            <i class='bx bx-user icon' ></i>
            <span class="text nav-text">Profile</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="{{ route('notif') }}">
            <i class='bx bx-bell icon' ></i>
            <span class="text nav-text">Notif</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="{{ route('roomchat') }}">
            <i class='bx bx-conversation icon' ></i>
            <span class="text nav-text">Chat</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="{{ route('toko') }}">
            <i class='bx bx-store-alt icon' ></i>
            <span class="text nav-text">Stores</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="tokopage.html">
            <i class='bx bx-history icon' ></i>
            <span class="text nav-text">History</span>
          </a>
        </li>

      </ul>
    </div>

    <div class="bottom-konten">
      <li class="nav-link">
          <a href="#">
            <i class='bx bx-cog icon' ></i>
            <span class="text nav-text">Settings</span>
          </a>
      </li>
      <li class="nav-link">
          <a href="{{ route('loginbaru') }}">
            <i class='bx bx-log-out icon' ></i>
            <span class="text nav-text">Log out</span>
          </a>
      </li>
    </div>

  </div>
</nav>

<script src="{{ asset('scripts/sidebar.js') }}"></script>
</body>
</html>