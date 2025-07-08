<div align="center">

## GASS: Go And Start the Street

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![WTFPL License][license-shield]][license-url]

<!-- SHIELDS -->
[contributors-shield]: https://img.shields.io/github/contributors/jovianka/pancaran?style=flat-square&color=%23ADD8E6
[contributors-url]: https://github.com/jovianka/pancaran/graphs/contributors

[forks-shield]: https://img.shields.io/github/forks/jovianka/pancaran?style=flat-square&color=%23ADD8E6
[forks-url]: https://github.com/jovianka/pancaran/fork

[license-shield]: https://img.shields.io/github/license/jovianka/pancaran?style=flat-square&color=%23ADD8E6
[license-url]: https://github.com/jovianak/pancaran/blob/main/LICENSE

</div>

<!-- PROJECT LOGO -->
</br>
<div align="center">
  <a href="https://www.unud.ac.id/">
    <img src="https://github.com/dash4k/tugas-akhir-alpro-1/assets/133938416/ff71757a-1b51-44b7-b14e-b53b061d9815" alt="Logo" width="230" height="259">
  </a>

  <h3 align="center">Project Pemrogaman Berbasis Web</h3>

  <p align="center">
    Go And Start the Street adalah sebuah aplikasi berbasis web yang menjadi wadah untuk memfasilitasi proses penyewaan motor di Pulau Bali secara online, mulai dari pencarian motor, pemesanan, hingga pembayaran. Website ini memungkinkan pengguna untuk melihat daftar motor yang tersedia lengkap dengan informasi spesifikasi, harga sewa, lokasi pengambilan, serta ulasan dari pelanggan sebelumnya.
  </p>
</div>
</br>

## Requirement
1. PostgreSQL
2. Make sure the PostgreSQL server is turned on
3. PHP version > 8.2
4. Node with NPM installed

## Development
1. Clone this repo

   ```bash
   git clone https://github.com/jovianka/pancaran.git

2. Install dependency

   ```bash
   composer install
   npm install

3. Copy .env.example file to .env
4. Change the `DB_CONNECTION` value in .env to pgsql
5. Uncomment `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` and change the values to your own database configuration in .env.
6. Generate application key

    ```bash
   php artisan key:generate
   
7. Run the migration

    ```bash
   php artisan migrate

8. Seed the database.

    ```bash
    php artisan db:seed
    ```

9. Run the project
    
    ```bash
    composer run dev
    ```
    or
    ```bash
    npm run dev
    php artisan serve
   
10. Open the project at `http:127.0.0.1:8000`
