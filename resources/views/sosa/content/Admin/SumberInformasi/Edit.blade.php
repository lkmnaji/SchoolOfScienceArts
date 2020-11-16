@extends('sosa.MasterAdmin')
@section('title','Edit Data Sumber Informasi')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="edit-informasi">
        <h2 id="h2-create">Edit Data Sumber Informasi</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('sumberinformasi.update',$sumberinformasi->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="sumber_informasi">Nama Sekolah</label>
                <input type="text" class="form-control" id="sumber_informasi" name="sumber_informasi" value="{{ $sumberinformasi->sumber_informasi }}">
                @error('sumber_informasi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN DIISI BENAR ?')">Update</button>
        </form>
        <a href="{{route('sumberinformasi.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
