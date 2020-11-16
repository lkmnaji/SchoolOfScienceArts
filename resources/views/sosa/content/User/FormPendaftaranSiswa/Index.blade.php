@extends('sosa.masteruser')
@section('title','Pendaftaran Siswa')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/pendaftaransiswa.jpg')}}" class="card-img img-pendaftaransiswa" alt="fotosekolah">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-pendaftaran">Welcome to <br> School Of Science & Arts</h1>
      <hr id="grs-pendaftaran">
    </div>
</div>
<div class="container" id="index-pendaftaransiswa">
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
    <div class="card" id="card-pendaftaransiswa1">
        <div class="card-body">
            <p id="p-pendaftaransiswa1">
                Perkembangan dan perubahan dunia pendidikan di Indonesia tidak terlepas dari pengaruh perubahan global, perkembangan ilmu pengetahuan dan teknologi, serta seni dan budaya. 
                <br><br>
                Perkembangan dan perubahan tersebut menuntut perubahan dan peningkatan di bidang pendidikan dalam menyiapkan peserta didik untuk mewujudkan Sumber Daya Manusia yang berbudi pekerti luhur, berbudaya, berwawasan lingkungan, unggul dalam prestasi serta kompetitif dalam dunia global.
                <br><br>
                Selamat Bergabung Di Sekolah yang dapat membuat anda meraih impian dibidang science & teknologi serta dibidang seni 
            </p><br>
            <p id="p-pendaftaransiswa2">
                Kepala Sekolah,
                <br><br>
                <span id="p-pendaftaransiswa3">Dian Sastro</span>
            </p>
        </div>
    </div>
    <div class="row-align-items-center" id="row-pendaftaran1">
        <a href="{{route('form.pendaftaransiswa')}}" id="btn-pendaftaran"><button class="btn btn-primary btn-pendaftaran">DAFTAR &nbsp;<i class='fas fa-user-graduate'></i></button></a>
    </div>
</div>
@endsection