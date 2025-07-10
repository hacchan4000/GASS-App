<div class="inner-header">
    <div class="weather">
      <div class="judul">
        <h1>HOME</h1>
      </div>
      <div class="cuaca">
        <div class="forecast">
          <ion-icon name="partly-sunny-outline"></ion-icon>
        </div>
        <div class="suhu">
          <h1>23°C</h1>
        </div>
      </div>
      <p>The weather is perfect for a ride</p>
    </div>
  
    <div class="navigation">
      <div class="username">Welcome, {{ Auth::user()->name ?? 'user123456' }}</div>
      <a href="{{ route('profile') }}">
        <div class="profile-pic"></div>
      </a>
    </div>
  </div>
  