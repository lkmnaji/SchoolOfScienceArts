@extends('sosa.masteruser')
@section('title','SMP Science SOSA')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/pendaftaransiswa.jpg')}}" class="card-img img-pendaftaransiswa" alt="fotosekolah">
    <div class="card-img-overlay">
    <h1 class="card-title text-center title-pendaftaran">Welcome to <br> School Of Science & Arts</h1>
    <hr id="grs-pendaftaran">
    </div>
</div>
<div class="container" id="ctn-smpscience1">
    <h5 id="p-smpscience1">SMP Science Thomas Alva Edison</h5>
    <div class="row" id="row-smpscience1">
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            @foreach ($data as $smpscience)
            <div class="card">
                <img src="{{ Storage::url('public/img/') . $smpscience->img_profilesekolah }}" alt="SMP ART" class="card-img-top" id="img-smpscience">
                <br>
                <div class="card-body">
                    <p id="p-smpscience2">{!! $smpscience->profile_sekolah !!}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>
@endsection