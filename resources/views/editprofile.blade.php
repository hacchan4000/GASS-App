<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/editprofile.css') }}">
    <title>Edit Profile</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="gambar/profile_picture.jpg" alt="Profile Picture" class="profile">
            <p class="change">Change Photo</p>
            <p class="delete">Delete Photo</p>
            <div class="medsos">
                <div class="item"><ion-icon name="logo-instagram" class="insta"></ion-icon><span>Add Instagram</span></div>
                <div class="item"><ion-icon name="logo-facebook" class="facebook"></ion-icon><span>Add Facebook</span></div>
                <div class="item"><ion-icon name="logo-twitter" class="twitter"></ion-icon><span>Add Twitter</span></div>
            </div>
            <button class="back" onclick="window.location.href='{{ route('profile') }}'">Back</button>

        </div>
        <div class="formdata">
            <form class="form-container" method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')
                <label for="name">Username:</label><br>
                <input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}"><br>
                <label for="fullname">Fullname:</label><br>
                <input type="text" id="fullname" name="fullname" value="{{ old('fullname', Auth::user()->fullname) }}"><br>
                <label for="phone">Phone Number:</label><br>
                <input type="tel" name="phone" value="{{ old('phone', Auth::user()->phone) }}" pattern="[0-9]{10,15}" required /><br>
                <label for="email">Email Address:</label><br>
                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" required /><br>
                <label for="alamat">Alamat:</label><br>
                <input type="text" name="alamat" value="{{ old('alamat', Auth::user()->alamat) }}" required /><br>
                <button class="save" type="submit">Save Change</button>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>