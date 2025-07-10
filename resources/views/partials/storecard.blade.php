<!-- resources/views/partials/storecard.blade.php -->
<a href="{{ route('detailtoko', ['store' => Str::slug($nama)]) }}" class="mini-card">
    <img src="{{ $image }}" alt="{{ $nama }}" />
    <div class="mini-info">
      <h3>{{ $nama }}</h3>
      <p class="type">Motorcycle</p>
      <p class="address">{{ $alamat }}</p>
      <div class="stars">
        @for ($i = 1; $i <= floor($rating); $i++)
          <i class="fas fa-star"></i>
        @endfor
        @if ($rating - floor($rating) >= 0.5)
          <i class="fas fa-star-half-alt"></i>
        @endif
      </div>
      <hr class="mini-divider" />
      <div class="bottom-line">
        <span><strong>Rating :</strong> {{ $rating }}</span>
        <span class="detail-button small">Lihat Detail</span>
      </div>
    </div>
  </a>
  