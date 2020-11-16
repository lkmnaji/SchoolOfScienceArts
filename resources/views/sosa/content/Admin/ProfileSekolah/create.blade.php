@extends('sosa.MasterAdmin')
@section('title','Upload Data Profile Sekolah')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="create-profilesekolah">
        <h2 id="h2-create">Input Data Profile Sekolah</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('profilesekolah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img_profilesekolah">Foto Sekolah</label><br>
                <input type="file" id="img_profilesekolah" name="img_profilesekolah" class="form-control">
                @error('img_profilesekolah')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="profile_sekolah">Deskripsi Profile</label>
                <textarea name="profile_sekolah" id="profile_sekolah" rows="10" cols="80">
                </textarea>
                @error('profile_sekolah')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA YANG DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('profilesekolah.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection

@section('ckeditor')
    <script>
        CKEDITOR.replace( 'profile_sekolah' );
    </script>
@endsection
