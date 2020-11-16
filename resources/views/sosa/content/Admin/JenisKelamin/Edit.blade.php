@extends('sosa.MasterAdmin')
@section('title', 'Edit Data Jenis Kelamin')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>

    <div class="container mt-3" id="edit-jeniskelamin">
        <h2 id="h2-create">Edit Data Jenis Kelamin</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('jeniskelamin.update',$jeniskelamin->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $jeniskelamin->jenis_kelamin }}">
                @error('jenis_kelamin')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN SUDAH BENAR ?')">Update</button>
        </form>
        <a href="{{route('jeniskelamin.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>

@endsection