@extends('sosa.MasterAdmin')
@section('title','Edit Data Tingkat Pendidikan')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="edit-tingkat">
        <h2 id="h2-create">Edit Data Tingkat Pendidikan</h2>
        <h2 id="h2-create">school of science $ arts</h2>
        <hr>
        <form action="{{ route('tingkatpendidikan.update',$tingkatpendidikan->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
                <input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" value="{{ $tingkatpendidikan->tingkat_pendidikan }}">
                @error('tingkat_pendidikan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN DIISI BENAR ?')">Update</button>
        </form>
        <a href="{{route('tingkatpendidikan.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
