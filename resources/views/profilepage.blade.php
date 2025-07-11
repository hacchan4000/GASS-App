<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/profile.css') }}">
    <title>Profile Page</title>
</head>
<body>
    <div class="board">
        <div class="username">
            <img src="gambar/profile_picture.jpg" alt="Profile Picture" class="profile">
            <p>{{ $user->name }}</p>
        
            <div class="option">
                <button onclick="window.location.href='{{ route('edit.profile') }}'" class="edit-button">
                    <ion-icon name="create-outline" class="edit"></ion-icon>
                    <span>Edit Profile</span>
                </button>
                <button onclick="window.location.href='{{ route('changepassword') }}'" class="edit-button">
                    <ion-icon name="key-outline" class="password"></ion-icon>
                    <span>Change Password</span>
                </button>
                <button class="edit-button">
                    <ion-icon name="log-out-outline" class="logout"></ion-icon>
                    <span>Log Out</span>
                </button>
            </div>
            <div class="data">
                <div class="content">
                <div class="section">
                    <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Full Name</div>
                        <div class="info-value">{{ $user->fullname ?? '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Email Address</div>
                        <div class="info-value">{{ $user->email ?? '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Phone Number</div>
                        <div class="info-value">{{ $user->phone ?? '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Adress</div>
                        <div class="info-value">{{ $user->alamat ?? '-' }}</div>
                    </div>
                    </div>
                </div>
                    </div>
            <div class="medsos">
                <div class="top_medsos">
                    <h1>Social Media</h1>
                </div>
                <div class="sosmed">
                    <div class="apps"><ion-icon name="logo-instagram" class="logo"></ion-icon><span class="media">{{ $user->instagram ?? '-' }}</span></div>
                    <div class="apps"><ion-icon name="logo-facebook" class="logo"></ion-icon><span class="media">{{ $user->facebook ?? '-' }}</span></div>
                    <div class="apps"><ion-icon name="logo-twitter" class="logo"></ion-icon><span class="media">{{ $user->twitter ?? '-' }}</span></div>
                </div>
            </div>
            <div class="status">
                <div class="top_status">
                    <h1>Rent Status</h1>
                </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>