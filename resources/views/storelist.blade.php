<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Store List</title>
  <link rel="stylesheet" href="style/tokopage.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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

      <!-- ✅ Semua toko, termasuk Toko Rent Kuta, dalam format yang sama -->
      <div class="store-list-container">
        <div class="store-list-container">

  <!-- Toko Rent Kuta -->
<a href="/detail?store=kuta" class="mini-card">
  <img src="https://storage.googleapis.com/a1aa/image/1ad253b5-1226-44a9-efc7-a1487faab48c.jpg" alt="Toko Rent Kuta" />
  <div class="mini-info">
    <h3>Toko Rent Kuta</h3>
    <p class="type">Motorcycle</p>
    <p class="address">Jalan Kuta Art Market</p>
    <div class="stars">
      <i class="fas fa-star"></i><i class="fas fa-star"></i>
      <i class="fas fa-star"></i><i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
    </div>
    <hr class="mini-divider" />
    <div class="bottom-line">
      <span><strong>Rating :</strong> 4.5</span>
      <span class="detail-button small">Lihat Detail</span>
    </div>
  </div>
</a>

<!-- Dewa Motor -->
<<a href="/detail?store=kuta" class="mini-card">
  <img src="https://storage.googleapis.com/a1aa/image/bcee3284-fab2-4ae4-9f5e-883cc2c5608c.jpg" alt="Dewa Motor" />
  <div class="mini-info">
    <h3>Dewa Motor</h3>
    <p class="type">Motorcycle</p>
    <p class="address">Jalan Monkey Forest</p>
    <div class="stars">
      <i class="fas fa-star"></i><i class="fas fa-star"></i>
      <i class="fas fa-star"></i><i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <hr class="mini-divider" />
    <div class="bottom-line">
      <span><strong>Rating :</strong> 5</span>
      <span class="detail-button small">Lihat Detail</span>
    </div>
  </div>
</a>

<!-- Matic Rental -->
<a href="/detail?store=kuta" class="mini-card">
  <img src="https://storage.googleapis.com/a1aa/image/95929cd8-86e9-4797-24fa-13855f07a886.jpg" alt="Matic Rental" />
  <div class="mini-info">
    <h3>Matic Rental</h3>
    <p class="type">Motorcycle</p>
    <p class="address">Jalan Nelayan Canggu</p>
    <div class="stars">
      <i class="fas fa-star"></i><i class="fas fa-star"></i>
      <i class="fas fa-star"></i><i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <hr class="mini-divider" />
    <div class="bottom-line">
      <span><strong>Rating :</strong> 5</span>
      <span class="detail-button small">Lihat Detail</span>
    </div>
  </div>
</a>

<div id="motor-container" class="motor-grid"></div>

    </div>
  </div>

</body>
</html>