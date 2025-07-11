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
    @if(session('success'))
      <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
      <ul style="color: red;">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <form action="{{ route('password.update') }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="current">Current Password</label>
        <input type="password" id="current_password" name="current_password" placeholder="Enter current password" />
      </div>
      <div class="form-group">
        <label for="new">New Password</label>
        <input type="password" id="password" name="password" placeholder="Enter new password" />
      </div>
      <div class="form-group">
        <label for="confirm">Confirm New Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password" />
      </div>
      <button type="submit" class="btn-save">Save Change</button>
    </form>
    <button class="btn-back" onclick="window.location.href='{{ route('profile') }}'">Back</button>
  </div>

</body>
</html>
