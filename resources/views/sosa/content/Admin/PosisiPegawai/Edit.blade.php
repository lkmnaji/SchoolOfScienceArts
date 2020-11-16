@extends('sosa.MasterAdmin')
@section('title', 'Edit Data Posisi Lamaran')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>

    <div class="container mt-3" id="edit-posisi">
        <h2 id="h2-create">Edit Data Posisi Lamaran</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('posisi.update',$posisi->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="posisi_lamaran">Posisi Lamaran Pegawai</label>
                <input type="text" class="form-control" id="posisi_lamaran" name="posisi_lamaran" value="{{ $posisi->posisi_lamaran }}">
                @error('posisi_lamaran')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN SUDAH BENAR ?')">Update</button>
        </form>
        <a href="{{route('posisi.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>

@endsection