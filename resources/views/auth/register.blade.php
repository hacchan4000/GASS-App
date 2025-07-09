<!-- disini kita extend file default.blade.php di folder layouts jadi semua konten di page default bakal nampak disini juga gt -->
@extends("layouts.default");
@section("title", "register")
@section("content")
<!-- di dalem sini bsa isi konten dalam login -->

<main class="mt-5">
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
                <div class="card">
                    <h1 class="card-header text-center">SIGN-UP</h1>
                    <div class="card-body">
                        <!-- form login -->
                        <form method="POST" action="{{ route("register.post")}}">
                            @csrf
                            <!-- input nama user -->
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="nama" name="nama" class="form-control" required autofocus>
                                @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama')}}</span>
                                @endif
                            </div>

                            <!-- input email user -->
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" name="email" class="form-control" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email')}}</span>
                                @endif
                            </div>

                            <!-- input nomer user -->
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email')}}</span>
                                @endif
                            </div>

                             <!-- input password user -->
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" name="password" class="form-control" required >
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password')}}</span>
                                @endif
                            </div>

                             <!-- input tipe user  0 itu pembeli 1 itu penjual-->
                            <div class="form-group mb-3">
                                <select name="tipe" id="tipe" class="form-control">
                                    <option value="0">Pembeli Motor</option>
                                    <option value="1">Pemilik Motor</option>
                                </select>
                                @if ($errors->has('tipe'))
                                    <span class="text-danger">{{ $errors->first('tipe')}}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Register</button>
                            </div>

                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection