@extends('sosa.masteruser')
@section('title','SMA Science SOSA')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/pendaftaransiswa.jpg')}}" class="card-img img-pendaftaransiswa" alt="fotosekolah">
    <div class="card-img-overlay">
    <h1 class="card-title text-center title-pendaftaran">Welcome to <br> School Of Science & Arts</h1>
    <hr id="grs-pendaftaran">
    </div>
</div>
<div class="container" id="ctn-smascience1">
    <h5 id="p-smascience1">SMA Science Albert Einstein</h5>
    <div class="row" id="row-smascience1">
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            @foreach ($data as $smascience)
            <div class="card">
                <img src="{{ Storage::url('public/img/') . $smascience->img_profilesekolah }}" alt="SMA Science" class="card-img-top" id="img-smascience">
                <br>
                <div class="card-body">
                    <p id="p-smascience2">{!! $smascience->profile_sekolah !!}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>
@endsection