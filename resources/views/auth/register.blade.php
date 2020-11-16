@extends('layouts.app')
@section('title', 'School Of Science & Arts')

@section('content')
<div class="container-fluid" id="ctn-formlogin" >
    <div class="row" id="row-login">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" id="col-login1">
            <img src="{{asset('assets/img/logofooter.gif')}}" alt="" class="img-login1">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" id="col-login2">
            <img src="{{asset('assets/img/logologinadmin.png')}}" class="img-login2" alt="">
            <h2 id="p-login1">Isi Data dengan Benar</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row" id="row-regis1">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <input id="name" type="text" placeholder="masukkan nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" id="row-regis2">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" id="row-regis3">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" id="row-regis4">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <input id="password-confirm" placeholder="password confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0" id="row-regis5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <br>
            </form>
                <div class="form-group row" id="row-regis6">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <a href="{{route('login')}}">
                            <button class="btn btn-primary">
                            Kembali Ke Halaman Login
                            </button>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
