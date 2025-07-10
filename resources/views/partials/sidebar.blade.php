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