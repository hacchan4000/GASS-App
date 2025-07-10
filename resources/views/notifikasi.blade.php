
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>notifikasi</title>
 <link rel="stylesheet" href="{{ asset('css/style/notifikasi.css') }}">
</head>
<body>
  <div class="background">
    <div class="notif-box">
      <h1>Notifications</h1>

      <!-- Notifikasi 1 -->
      <table class="notif-table">
        <tr>
          <td class="icon">×</td>
          <td class="content">
            <div class="title">Motorcycle</div>
            <div class="desc">A Motorcycle is now available for rent</div>
          </td>
          <td class="status">
            <div class="badge">Announcement</div>
            <div class="time">
              <div class="date">Jun 10, 2024</div>
              <div class="clock">9:41 AM</div>
            </div>
          </td>
        </tr>
      </table>

      <!-- Notifikasi 2 (sekarang yang dulunya no. 3) -->
<table class="notif-table">
  <tr>
    <td class="icon">×</td>
    <td class="content">
      <div class="title">Motorcycle Not Returned</div>
      <div class="desc">Motorcycle not returned; late fee issued</div>
    </td>
    <td class="status">
      <div class="badge dark">Reminder</div>
      <div class="time">
        <div class="date">Jun 10, 2024</div>
        <div class="clock">9:41 AM</div>
      </div>
    </td>
  </tr>
</table>

<!-- Notifikasi 3 (sekarang yang dulunya no. 2) -->
<table class="notif-table">
  <tr>
    <td class="icon">×</td>
    <td class="content">
      <div class="title">Motorcycle Unavailable</div>
      <div class="desc">The Motorcycle you selected is unavailable</div>
    </td>
    <td class="status">
      <div class="badge red">Warning</div>
      <div class="time">
        <div class="date">Jun 10, 2024</div>
        <div class="clock">9:41 AM</div>
      </div>
    </td>
  </tr>
</table>
      <script>
  // Klik notifikasi untuk detail
  document.querySelectorAll('.notif-table').forEach(function(notif) {
    notif.addEventListener('click', function(e) {
      // Cegah kalau yang diklik adalah tombol ×
      if (e.target.classList.contains('icon')) return;

      alert('Buka detail notifikasi: ' + this.querySelector('.title').textContent);
      // Bisa redirect ke halaman detail juga: 
      // window.location.href = '/notifikasi/detail/1';
    });
  });

  // Klik tombol × untuk menghilangkan notifikasi
  document.querySelectorAll('.notif-table .icon').forEach(function(icon) {
    icon.addEventListener('click', function(e) {
      e.stopPropagation(); // supaya tidak trigger ke event notifikasi
      this.closest('.notif-table').remove();
    });
  });
</script>
<!-- Modal Detail -->
<div id="notif-modal" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <h2 id="modal-title">Judul Notifikasi</h2>
    <p id="modal-desc">Deskripsi lengkap akan muncul di sini.</p>
  </div>
</div>
<script>
  document.querySelectorAll('.notif-table').forEach(function(notif) {
    notif.addEventListener('click', function(e) {
      if (e.target.classList.contains('icon')) return;

      const title = this.querySelector('.title').textContent;

      if (title === 'Motorcycle') {
        window.location.href = '/tokoPage';
      } else {
        // Buka modal
        const modal = document.getElementById('notif-modal');
        const modalTitle = document.getElementById('modal-title');
        const modalDesc = document.getElementById('modal-desc');

        modalTitle.textContent = title;

        if (title === 'Motorcycle Unavailable') {
          modalDesc.textContent = "Unfortunately, the motorcycle you selected is not available at this time. Please try another motorcycle or contact the admin.";
        } else if (title === 'Motorcycle Not Returned') {
          modalDesc.textContent = "The motorcycle has not been returned as scheduled. A late fee has been added.";
        }

        modal.style.display = 'flex';
      }
    });
  });

  document.querySelectorAll('.notif-table .icon').forEach(function(icon) {
    icon.addEventListener('click', function(e) {
      e.stopPropagation();
      this.closest('.notif-table').remove();
    });
  });

  // Tutup modal saat klik tombol ×
  document.querySelector('.close-btn').addEventListener('click', function() {
    document.getElementById('notif-modal').style.display = 'none';
  });

  // Tutup modal saat klik di luar konten
  window.addEventListener('click', function(e) {
    const modal = document.getElementById('notif-modal');
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
</script>

</body>
</html>
