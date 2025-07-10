<div class="inner-header">

    <div class="stat-toko">
        <div class="elemen">
            <div class="judul">
                <h1>HOME</h1>
            </div>
            <div class="location">
                <ion-icon name="location-outline"></ion-icon>
                <p>Jl Bukit Lestari B 11</p>
            </div>
            <div class="viewer">
                <h4>Your Store Viewership</h4>
                <ion-icon name="eye-outline"></ion-icon>
                32
            </div>
        </div>
    </div>
    <div class="user-info">
        <div class="navigation">
            <div class="username">Welcome, {{ Auth::user()->name ?? 'user123456' }}</div>
            <a href="profilepage.html">
                <div class="profile-pic"></div>
            </a>
        </div>
        <div class="icons">
            
        </div>
    </div>
    
</div>