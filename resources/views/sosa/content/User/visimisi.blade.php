@extends('sosa.masteruser')
@section('title','Visi Misi Sekolah')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/fotosekolah.jpg')}}" class="card-img img-tentangsekolah" alt="fotosekolah">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-visi">Visi & Misi Sekolah</h1>
      <hr id="grs-visi1">
    </div>
</div>
<div class="container" id="ctn-visimisi1">
    <h1 id="p-home1">SCHOOL OF SCIENCE & ARTS</h1>
    <div class="row" id="row-visi1">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h1 id="p-visi1">VISI</h1>
            <hr id="garis-home1">
            <p id="p-visi2">TERWUJUDNYA PESERTA DIDIK YANG BERIMAN, CERDAS, TERAMPIL, MANDIRI DAN BERWAWASAN GLOBAL</p>
            <br>
            <h1 id="p-visi3">MISI</h1>
            <hr id="garis-home1">
            <p id="p-visi4">
                Kami bertujuan untuk memberikan pendidikan holistik dalam lingkungan yang berupaya untuk mengeluarkan potensi setiap siswa secara maksimal; 
                berkembang di setiap karakter moral yang kuat, dijiwai dengan nilai-nilai & prinsip-prinsip Ilahi dan untuk membimbing dan mempersiapkan 
                siswa untuk menjadi pemimpin untuk kebaikan yang lebih besar dan pelayanan kepada orang lain.
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <img src="{{asset('assets/img/kepalasekolah.jpg')}}" alt="" id="img-home2">
        </div>
    </div>
</div>
@endsection