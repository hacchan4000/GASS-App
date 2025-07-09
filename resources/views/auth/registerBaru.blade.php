<!-- disini kita extend file default.blade.php di folder layouts jadi semua konten di page default bakal nampak disini juga gt -->
@extends("layouts.default");
@section("title", "register")
@section("content")
<!-- di dalem sini bsa isi konten dalam login -->
<header>
    
    
    <button onclick="window.location='{{ route('loginbaru') }}'" class="popUp-reg2">Sign In</button>

    
</header>


<main class="main2">
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
                    <h1 class="card-header text-center">SIGN-UP</h1>
                    <div class="card-body">
                        <!-- form login -->
                        <form method="POST" action="{{ route("login.post")}}">
                            @csrf
                            <!-- input nama user -->
                            <div class="input-box">
                                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                                <input type="text" id="nama" name="nama" class="form-control" required autofocus>
                                <label>Nama</label>
                                @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama')}}</span>
                                @endif
                            </div>

                            <div class="input-box">
                                <span class="icon"><ion-icon name="call"></ion-icon></span>
                                <input type="text" placeholder="" required name="Phone">
                                <label>Phone number</label>
                            </div>

                            <!-- input email user -->
                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
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
                                <button type="submit" class="tombol-submit">Register</button>
                            </div>

                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection