<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Toko Rent Kuta</title>
  <link rel="stylesheet" href="{{ asset('style/tokopage.css') }}">
  <link rel="stylesheet" href="{{ asset('style/detailtoko.css') }}">
</head>
<body>
  <div class="bungkusputih1">
    <div class="container">
      <h1 class="title">Toko Rent Kuta</h1>
      <div id="motor-container" class="motor-list"></div>
      <!-- Modal Checkout -->
<div id="checkout-modal" class="modal hidden">
  <div class="modal-content">
    <span class="close-button">&times;</span>
    <h2>Checkout Motor</h2>
    <p><strong>Motor:</strong> <span id="modal-motor-name"></span></p>
    <p><strong>Toko:</strong> <span id="modal-store-name"></span></p>
    <button class="checkout-button">Checkout Sekarang</button>
  </div>
</div>
      <a href="/storelist" class="detail-button small" style="margin-left: 30px;">← Kembali ke Daftar Toko</a>
    </div>
  </div>

 <script>
  const allMotors = [
    {
      name: "Vario 125",
      store: "Toko Rent Kuta",
      image: "https://tse4.mm.bing.net/th/id/OIP.hn_ycLr5xDeLzKClmlL0LwAAAA?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
      description: "Motor irit cocok untuk jalan-jalan di Kuta."
    },
    {
      name: "Genio 110",
      store: "Toko Rent Kuta",
      image: "https://www.bing.com/th/id/OIP.QPRwEl1gpxMNq-iPidHXDwHaFi?w=234&h=211&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2",
      description: "Cocok untuk pelajar dan wisatawan muda."
    },
    {
      name: "Scoopy Hitam",
      store: "Toko Rent Kuta",
      image: "https://www.bing.com/th/id/OIP.adial3mPC6MaRxpUqjo7eAHaHa?w=195&h=211&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2",
      description: "Stylish dan ringan untuk wisatawan."
    },
    {
      name: "Beat Pop",
      store: "Toko Rent Kuta",
      image: "https://1.bp.blogspot.com/-wHorhAXJl18/Vgs78ZsYwiI/AAAAAAAAArs/Tm3qou89eWc/s1600/honda-beat-pop-esp-hitam-1024x1024.jpg",
      description: "Motor simpel dan hemat bahan bakar."
    },
    {
      name: "Nmax Merah",
      store: "Dewa Motor",
      image: "https://imgcdn.oto.com/large/gallery/color/84/1904/yamaha-nmax-155-color-546576.jpg",
      description: "Motor premium untuk kenyamanan ekstra."
    },
    {
      name: "PCX 160",
      store: "Dewa Motor",
      image: "https://th.bing.com/th/id/OIP.r1xf6P0smvTmNuqhYyQMXgAAAA?w=175&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3",
      description: "Motor elegan dan powerful."
    },
    {
      name: "Xmax 250",
      store: "Dewa Motor",
      image: "https://th.bing.com/th/id/OIP.UjQY9qNpJ-dyLAzaf-HrQwHaGh?w=173&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3",
      description: "Cocok untuk perjalanan jauh dan nyaman."
    },
    {
      name: "Forza 250",
      store: "Dewa Motor",
      image: "https://th.bing.com/th/id/OIP.m9FbQA5-zSy02a6ZKx77KAHaEK?w=326&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7",
      description: "Skuter besar dengan fitur canggih."
    },
    {
      name: "Beat Street",
      store: "Matic Rental",
      image: "https://indomoto.com/wp-content/uploads/2019/01/honda-beat-street-2019.jpg",
      description: "Pilihan pas untuk anak muda!"
    },
    {
      name: "Aerox 155",
      store: "Matic Rental",
      image: "https://tse4.mm.bing.net/th/id/OIP.vU39dcCs1RcIHYp3aMzV3gHaE8?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
      description: "Tampil sporty dan bertenaga."
    },
    {
      name: "Fazzio Hybrid",
      store: "Matic Rental",
      image: "https://lh6.googleusercontent.com/vxRHJq8IHsb4KXS47YQBrAL23doOd7OwPwEqM7b0dQIEf0lVPSNsDtrNzsmxX2es9dO7Xal7oMC_-AIWw6AfBmhZdNiSy0tl-si7K9gEjgGJSGAHlUVcKqpzlfpe7DghoVxLw_2dLP3NylK1v-5wyro",
      description: "Motor matic stylish dan ramah lingkungan."
    },
    {
      name: "Lexi 125",
      store: "Matic Rental",
      image: "https://images.tokopedia.net/img/cache/700/OJWluG/2022/4/12/adf99534-ab9b-4d4c-99ff-6413b7f7c159.jpg",
      description: "Kombinasi kenyamanan dan kepraktisan."
    }
  ];

 const container = document.getElementById("motor-container");

allMotors
  .filter(motor => motor.store === "Toko Rent Kuta")
  .forEach(motor => {
    const card = document.createElement("div");
    card.className = "motor-card";
    card.innerHTML = `
      <img src="${motor.image}" alt="${motor.name}">
      <h3>${motor.name}</h3>
      <p><strong>Toko:</strong> ${motor.store}</p>
      <p>${motor.description}</p>
    `;
    card.addEventListener("click", () => {
      document.getElementById("modal-motor-name").innerText = motor.name;
      document.getElementById("modal-store-name").innerText = motor.store;
      document.getElementById("checkout-modal").classList.remove("hidden");
    });
    container.appendChild(card);
  });

document.querySelector(".close-button").addEventListener("click", () => {
  document.getElementById("checkout-modal").classList.add("hidden");
});


