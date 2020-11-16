@extends('sosa.MasterAdmin')
@section('title','Edit Data Nama Sekolah')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="edit-sekolah">
        <h2 id="h2-create">Edit Data Nama Sekolah</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('namasekolah.update',$namasekolah->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{ $namasekolah->nama_sekolah }}">
                @error('nama_sekolah')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN DIISI BENAR ?')">Update</button>
        </form>
        <a href="{{route('namasekolah.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
