<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('style/changepassword.css') }}">
  <title>Change Password</title>
</head>
<body>
  <div class="change-password-box">
    <h2>Change Password</h2>
    <form>
      <div class="form-group">
        <label for="current">Current Password</label>
        <input type="password" id="current" placeholder="Enter current password" />
      </div>
      <div class="form-group">
        <label for="new">New Password</label>
        <input type="password" id="new" placeholder="Enter new password" />
      </div>
      <div class="form-group">
        <label for="confirm">Confirm New Password</label>
        <input type="password" id="confirm" placeholder="Confirm new password" />
      </div>
      <button type="submit" class="btn-save">Save Change</button>
    </form>
  </div>

</body>
</html>
