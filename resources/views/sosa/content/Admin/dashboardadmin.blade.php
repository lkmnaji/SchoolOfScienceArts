@extends('sosa.MasterAdmin')
@section('title', 'Admin | Dashboard Admin')

@section('sosa.content.Admin')
    
    <div class="container ctn-admin">
        <div class="card">
            <img src="{{asset('assets/img/dashboard (1).png')}}" alt="selamat_datang1" class="card-img">
            <img src="{{asset('assets/img/dashboard (2).png')}}" alt="selamat_datang2" class="card-img">
            <div class="card-img-overlay">
              <h1 class="nama_admin-dashboard">Nama Admin</h1>
            </div>
          </div>
    </div>

@endsection