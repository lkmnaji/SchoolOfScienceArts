@extends('layouts.app')
@section('title', 'School Of Science & Arts')

@section('content')
<div class="container-fluid" id="ctn-formlogin" >
    <div class="row" id="row-login">
        <div class="col-lg-6 col-md-6 col-sm-6" id="col-login1">
            <img src="{{asset('assets/img/logofooter.gif')}}" alt="" class="img-login1">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" id="col-login2">
            <img src="{{asset('assets/img/logologinadmin.png')}}" class="img-login2" alt="">
            <h2 id="p-login1">Welcome</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row" id="row-login1">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" id="row-login2">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0" id="row-login3">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="form-group row" id="row-login4">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        @if (Route::has('register'))
                        <p id="p-login2">Belum Terdaftar ? &nbsp;<span>
                        <a class="regis" href="{{ route('register') }}">Register</a>
                        </span>
                        </p>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
