@extends('sosa.MasterAdmin')
@section('title', 'Edit Data Tahun Ajaran')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>

    <div class="container mt-3" id="edit-tahunajaran">
        <h2 id="h2-create">Edit Data Tahun Ajaran</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('tahunajaran.update',$tahunajaran->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tahun_ajaran">Tahun Ajaran</label>
                <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" value="{{ $tahunajaran->tahun_ajaran }}">
                @error('tahun_ajaran')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN SUDAH BENAR ?')">Update</button>
        </form>
        <a href="{{route('tahunajaran.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>

@endsection