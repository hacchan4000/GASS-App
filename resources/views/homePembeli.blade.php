@extends('layouts.homedefault')

@section('title', 'Dashboard Pembeli')

@section('content')
  <div class="best-deals">
    <h2>Best Deals</h2>
    
    @for($i = 0; $i < 3; $i++)
    <div class="deals1">
      <div class="deals-kiri">
        <div class="deals-elements">
          <div class="deal-texts">
            <h3>Wayan Rentals</h3>
            <p>Start from</p>
            <div class="price-badge">IDR 750.000</div>
          </div>
          <div class="deal-icons">
            <ion-icon name="chatbubble-outline"></ion-icon>
            <ion-icon name="star-outline"></ion-icon>
          </div>
        </div>
      </div>
      <div class="deals-kanan">
        <div class="container-gambar">
          <img class="gambar-deals" src="{{ asset('gambar/motorbike.png') }}" alt="">
        </div>
      </div>
    </div>
    @endfor
  </div>

  <div class="widgets">
    <div class="left-column">
      <div class="map-container">
        <div id="map" style="height: 300px; border-radius: 15px;"></div>
      </div>
    </div>
  
    <div class="right-column">
      <div class="return-date">
        <div class="calendar">
          <ion-icon name="calendar-clear-outline"></ion-icon>
        </div>
        <div class="tanggal-balik">
          <h3>return before</h3>
          <h1>31/12/2025</h1>
        </div>
      </div>
      <div class="promos">
        <div class="promo1"></div>
        <div class="promo1"></div>
      </div>
    </div>
  </div>

  <div class="store-rec">
    <div class="rec-header">
      <h3>Store Recommendation</h3>
    </div>
    <div class="rec-body"></div>
  </div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Set default map view (contoh: Denpasar, Bali)
        const map = L.map('map').setView([-8.65, 115.2167], 13);

        // Gunakan tile dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Tambahkan pin lokasi rental contoh
        L.marker([-8.65, 115.2167]).addTo(map)
            .bindPopup("<b>Wayan Rentals</b><br>Jl. Sunset Road.")
            .openPopup();
    });
</script>
@endpush

