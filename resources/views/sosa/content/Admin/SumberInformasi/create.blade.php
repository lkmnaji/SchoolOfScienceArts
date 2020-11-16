@extends('sosa.MasterAdmin')
@section('title','Upload Data Sumber Informasi')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="create-informasi">
        <h2 id="h2-create">Input Data Sumber Informasi</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('sumberinformasi.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="sumber_informasi">Sumber Informasi</label>
                <input type="text" class="form-control" id="sumber_informasi" name="sumber_informasi">
                @error('sumber_informasi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA YANG DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('sumberinformasi.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
