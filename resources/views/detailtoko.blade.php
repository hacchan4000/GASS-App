@extends('layouts.defaultdetail')

@section('title', $storeName)

@section('content')
<h1 class="title">Detail Toko: {{ $storeName }}</h1>

<div class="motor-grid">
    @forelse ($motors as $motor)
        <div class="mini-card">
            <img src="{{ asset('gambar_motor/' . $motor->gambar_motor) }}" alt="Foto Motor" />
            <div class="mini-info">
                <h3>{{ $motor->jenis }}</h3>
                <p class="address">No. Polisi: {{ $motor->nomor_polisi }}</p>
                <p class="type">Harga: Rp {{ number_format($motor->harga) }} / {{ $motor->durasi }}</p>
                <hr class="mini-divider" />
                <div class="bottom-line">
                    <span><strong>Status:</strong> {{ $motor->is_available ? 'Tersedia' : 'Tidak tersedia' }}</span>
                </div>
            </div>
        </div>
    @empty
        <p>Toko ini belum memiliki motor yang terdaftar.</p>
    @endforelse
</div>
@endsection
