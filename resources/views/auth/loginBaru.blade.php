<!-- disini kita extend file default.blade.php di folder layouts jadi semua konten di page default bakal nampak disini juga gt -->
@extends("layouts.default")
@section("title", "login")
@section("content")
<!-- di dalem sini bsa isi konten dalam login -->

<header>
    <img class="logo-unud" src="gambar/background/newUnud.jpg" alt="">
    <nav class="navigasi">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        
       
    </nav>
    
    <button onclick="window.location='{{ route('registerbaru') }}'" class="popUp-reg">Sign up</button>

    
</header>

<main class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if (session()->has("success"))
                    <div class="alert alert-success">
                        {{session()->get("success")}}
                    </div>
                @endif

                @if (session()->has("error"))
                    <div class="alert alert-error">
                        {{session()->get("error")}}
                    </div>
                @endif
                <div class="form-box login">
                    <h1 class="card-header text-center">SIGN-IN</h1>
                    <div class="card-body">
                        <!-- form login -->
                        <form method="POST" action="{{ route("login.post")}}">
                            @csrf
                            <!-- input email user -->
                            <div class="input-box">
                                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                                <input type="text" id="email" name="email" class="form-control" required autofocus>
                                <label>Email</label>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email')}}</span>
                                @endif
                            </div>

                             <!-- input password user -->
                            <div class="input-box">
                                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" id="password" name="password" class="form-control" required >
                                <label>password</label>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password')}}</span>
                                @endif
                            </div>

                             <!-- input tipe user  0 itu pembeli 1 itu penjual-->
                            <div class="input-tipe">
                                <select name="tipe" id="tipe" class="form-control">
                                    <option value="0">Pembeli Motor</option>
                                    <option value="1">Pemilik Motor</option>
                                </select>
                                @if ($errors->has('tipe'))
                                    <span class="text-danger">{{ $errors->first('tipe')}}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="tombol-submit">Login</button>
                            </div>

                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection