@extends('sosa.masteruser')
@section('title','Pendaftaran Pegawai')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/fotosekolah.jpg')}}" class="card-img img-pendaftaranpegawai" alt="fotosekolah">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-pendaftaran">Welcome to <br> School Of Science & Arts</h1>
      <hr id="grs-pendaftaran">
    </div>
</div>
<div class="container" id="index-pendaftaranpegawai">
    @if (session()->has('validasi'))
    <div class="alert alert-success">
        {{ session()->get('validasi') }}
    </div>
    @endif
    @if (Session::has('sukses'))
        <div class="alert alert-success">
            <p>{{ Session::get('sukses') }}</p>
        </div>
    @endif
    <div class="card" id="card-pendaftaranpegawai1">
        <div class="card-body">
            <p id="p-pendaftaranpegawai1">
                Kami adalah unit Keluarga Sekolah SOSA yang didirikan pada tahun 2020 dan terdiri dari 4 sekolah di Jakarta, Indonesia.
                <br><br>
                Kami mencari guru lokal atau asing serta pegawai administrasi yang memenuhi syarat untuk bergabung dengan kami. Ini adalah peluang bagus untuk bergabung dengan lingkungan tim yang ramah, bersemangat, dan dinamis yang dapat 
                mengikuti perubahan dan peningkatan di bidang pendidikan dalam menyiapkan peserta didik untuk mewujudkan Sumber Daya Manusia yang berbudi pekerti luhur, berbudaya, berwawasan lingkungan, unggul dalam prestasi serta kompetitif dalam dunia global.
                <br><br>
                Jika Anda tertarik, silakan kirim aplikasi Anda, CV, dokumen pendukung dan foto terbaru dengan mengklik tombol di bawah ini.
                <br><br>
                Selamat Bergabung Di School Of Science & Arts
            </p><br>
            <p id="p-pendaftaranpegawai2">
                Hormat Kami,
                <br><br>
                <span id="p-pendaftaranpegawai3">School Of Science & Arts</span>
            </p>
        </div>
    </div>
    <div class="row-align-items-center" id="row-pendaftaran1">
        <a href="{{route('form.pendaftaranpegawai')}}" id="btn-pendaftaran"><button class="btn btn-primary btn-lg btn-pendaftaran">DAFTAR &nbsp;<i class='fas fa-chalkboard-teacher'></i></button></a>
    </div>
</div>
@endsection