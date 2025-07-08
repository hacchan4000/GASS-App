<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notifikasi</title>
  <link rel="stylesheet" href="css/style/notif.css">
</head>
<body>

  <div class="container">
    <h2>Notifications</h2>

    <div class="notification-box" id="notif1">
      <div class="close-button" onclick="dismiss('notif1')">×</div>
      <div class="notification-content">
        <div class="notification-title">Motorcycle</div>
        <div class="notification-message">A Motorcycle is now available for rent</div>
        <div class="badge pemberitahuan">Pembeitahuan</div>
        <span class="timestamp">Jun 10, 2024</span>
        <span class="timestamp">9:41 AM</span>
      </div>
    </div>

    <div class="notification-box" id="notif2">
      <div class="close-button" onclick="dismiss('notif2')">×</div>
      <div class="notification-content">
        <div class="notification-title">Motorcycle Unavailable</div>
        <div class="notification-message">The Motorcycle you selected is unavailable</div>
        <div class="badge peringatan">Peringatan</div>
        <span class="timestamp">Jun 10, 2024</span>
        <span class="timestamp">9:41 AM</span>
      </div>
    </div>

    <div class="notification-box" id="notif3">
      <div class="close-button" onclick="dismiss('notif3')">×</div>
      <div class="notification-content">
        <div class="notification-title">Motorcycle Not Returned</div>
        <div class="notification-message">Motorcycle not returned; late fee issued</div>
        <div class="badge pengingat">Pengingat</div>
        <span class="timestamp">Jun 10, 2024</span>
        <span class="timestamp">9:41 AM</span>
      </div>
    </div>

  </div>

  <script>
    function dismiss(id) {
      document.getElementById(id).style.display = "none";
    }
  </script>

</body>
</html>