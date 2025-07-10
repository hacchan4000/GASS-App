@extends('layouts.peminjamdefault')

@section('title', 'Dashboard Peminjam')

@section('content')
<div class="best-deals">
  <h2>Your Catalog</h2>
 
  <div class="deals1">
      <div class="deals-kiri">
        <div class="deals-elements">

          <div class="deal-texts">
            <h3>Motor 1</h3>
            <p>Start from</p>
            <div class="price-badge">IDR 750.000</div>
          </div>
          
          <div class="deal-icons">
            
          </div>
        </div>
        
      </div>
      <div class="deals-kanan">
          <div class="container-gambar">
            <img class="gambar-deals" src="gambar/motorbike.png" alt="">
          </div>
      </div>
  </div>
  <div class="deals1">
      <div class="deals-kiri">
        <div class="deals-elements">
          
          <div class="deal-texts">
            <h3>Motor 2</h3>
            <p>Start from</p>
            <div class="price-badge">IDR 750.000</div>
          </div>
          
          <div class="deal-icons">
            
          </div>
        </div>
        
      </div>
      <div class="deals-kanan">
          <div class="container-gambar">
            <img class="gambar-deals" src="gambar/motorbike.png" alt="">
          </div>
      </div>
  </div>
  <div class="deals1">
      <div class="deals-kiri">
        <div class="deals-elements">
          
          <div class="deal-texts">
            <h3>Motor 3</h3>
            <p>Start from</p>
            <div class="price-badge">IDR 750.000</div>
          </div>
          
          <div class="deal-icons">
            
          </div>
        </div>
        
      </div>
      <div class="deals-kanan">
          <div class="container-gambar">
            <img class="gambar-deals" src="gambar/motorbike.png" alt="">
          </div>
      </div>
  </div>



</div>

<div class="add-catalog">
  <div class="add-catalog-header">
      <div class="img-container">
          <img class="add-pic" src="gambar/addBike.png" alt="">
      </div>
  </div>
  <div class="add-catalog-body">
      <div class="add-button">
          <button>⊕</button>
      </div>
  </div>
</div>

<div class="store-rec">
  <div class="rec-header">
    <h3>Reviews</h3>
  </div>
  <div class="rec-body">
      <div class="review1">
          <h2>User123</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Quod dignissimos nobis totam natus iure sapiente vitae est officiis 
             asperiores ab? Fuga, officia quis sed iusto incidunt reiciendis facere? 
             Error, quas!
          </p>
      </div> 
      <div class="review1">
          <h2>User123</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Quod dignissimos nobis totam natus iure sapiente vitae est officiis 
             asperiores ab? Fuga, officia quis sed iusto incidunt reiciendis facere? 
             Error, quas!
          </p>
      </div>  
      <div class="review1">
          <h2>User123</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Quod dignissimos nobis totam natus iure sapiente vitae est officiis 
             asperiores ab? Fuga, officia quis sed iusto incidunt reiciendis facere? 
             Error, quas!
          </p>
      </div>            
  </div>
</div>

<!-- Modal Background -->
<div id="addModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden items-center justify-center">
  <!-- Modal Content -->
  <div class="bg-white rounded-lg p-6 w-full max-w-lg shadow-lg relative">
    <h2 class="text-xl font-bold mb-4">Tambah Motor Baru</h2>
    
    <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
  
      <!-- Gambar -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Foto Motor</label>
        <input type="file" name="gambar" required
          class="w-full border rounded px-3 py-2 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
      </div>
  
      <!-- Jenis Motor -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Motor</label>
        <select name="jenis_motor" class="w-full border rounded px-3 py-2 bg-white text-gray-800" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="nmax">NMAX</option>
            <option value="pcx">PCX</option>
            <option value="vespa">Vespa</option>
            <option value="scoopy">Scoopy</option>
        </select>
      </div>
  
      <!-- Nomor Polisi -->
      <div class="mb-4">
        <label class="block text-sm font-medium">Nomor Polisi</label>
        <input type="text" name="nomor_polisi" class="w-full border rounded px-3 py-2" required>
      </div>
  
      <!-- Harga + Durasi -->
      <div class="mb-4">
        <label class="block text-sm font-medium">Harga Sewa</label>
        <div class="flex gap-2">
          <input type="number" name="harga" class="w-2/3 border rounded px-3 py-2" required>
          <select name="durasi" class="w-1/3 border rounded px-3 py-2 bg-white text-gray-800">
            <option value="hari">/hari</option>
            <option value="minggu">/minggu</option>
            <option value="bulan">/bulan</option>
          </select>
        </div>
      </div>
  
      <div class="flex justify-end gap-2 mt-6">
        <button type="button" id="closeModalBtn"
          class="bg-gray-300 text-black px-4 py-2 rounded">Batal</button>
        <button type="submit"
          class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
      </div>
  </form>
  
    

    <!-- Close Icon (optional) -->
    <button id="closeModalX" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-xl">&times;</button>
  </div>
</div>

@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('addModal');
    const openBtn = document.querySelector('.add-button');
    const closeBtn = document.getElementById('closeModalBtn');
    const closeX = document.getElementById('closeModalX');

    openBtn.addEventListener('click', () => {
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    });

    closeBtn.addEventListener('click', () => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    });

    closeX.addEventListener('click', () => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    });
  });
</script>
@endpush
