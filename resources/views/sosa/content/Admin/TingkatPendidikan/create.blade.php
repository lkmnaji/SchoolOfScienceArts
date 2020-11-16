@extends('sosa.MasterAdmin')
@section('title', 'Upload Data Tingkat Pendidikan')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>

    <div class="container mt-3" id="create-tingkat">
        <h2 id="h2-create">Isi Data Tingkat Pendidikan</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('tingkatpendidikan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tingkat_pendidikan">Tingkat Pendidkan</label>
                <input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" >
                @error('tingkat_pendidikan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA SUDAH DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('tingkatpendidikan.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>

@endsection