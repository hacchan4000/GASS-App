@extends('layouts.peminjamdefault')

@section('title', 'Catalog Motor Anda')

@section('content')
<div class="px-6 py-4">
    <h2 class="text-2xl font-bold mb-4">Catalog Motor Anda</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($motors->isEmpty())
        <p class="text-gray-600">Belum ada motor yang Anda tambahkan.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($motors as $motor)
            <div class="border p-4 rounded shadow-sm bg-white">
                <img src="{{ asset('gambar_motor/' . $motor->gambar_motor) }}" alt="Motor" class="w-full h-40 object-cover rounded mb-2">
                <h3 class="font-semibold text-lg">{{ strtoupper($motor->jenis) }}</h3>
                <p class="text-sm text-gray-600 mb-1">Nomor Polisi: {{ $motor->nomor_polisi }}</p>
                <p class="text-sm text-gray-600 mb-1">Harga: Rp{{ number_format($motor->harga, 0, ',', '.') }}/{{ $motor->durasi }}</p>
                <p class="text-sm text-gray-600 mb-2">Status: <span class="{{ $motor->is_available ? 'text-green-600' : 'text-red-600' }}">
                    {{ $motor->is_available ? 'Tersedia' : 'Sedang Dipinjam' }}</span></p>

                <form method="POST" action="{{ route('motor.toggle', $motor->id) }}" class="inline-block">
                    @csrf
                    <button type="submit" class="text-sm px-3 py-1 bg-yellow-400 text-white rounded">Toggle Status</button>
                </form>

                <form method="POST" action="{{ route('motor.destroy', $motor->id) }}" class="inline-block ml-2" onsubmit="return confirm('Yakin ingin menghapus motor ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm px-3 py-1 bg-red-500 text-white rounded">Hapus</button>
                </form>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
