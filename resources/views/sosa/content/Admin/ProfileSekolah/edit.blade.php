@extends('sosa.MasterAdmin')
@section('title','Edit Data Profile Sekolah')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="edit-profilesekolah">
        <h2 id="h2-create">Edit Data Profile Sekolah</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('profilesekolah.update',$profilesekolah->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Foto Sekolah yang akan diganti</label><br>
                <img src="{{Storage::url('public/img/').$profilesekolah->img_profilesekolah}}" alt="img_profilesekolah" width="200px">
            </div>
            <div class="form-group">
                <label for="img_profilesekolah">Foto Sekolah</label>
                <input type="file" id="img_profilesekolah" name="img_profilesekolah" class="form-control">
                @error('img_profilesekolah')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="profile_sekolah">Deskripsi Profile</label>
                <textarea name="profile_sekolah" id="profile_sekolah" rows="10" cols="80" value={{ $profilesekolah->profile_sekolah}}>
                </textarea>
                @error('profile_sekolah')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN DIISI BENAR ?')">Update</button>
        </form>
        <a href="{{route('profilesekolah.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection

@section('ckeditor')
    <script>
        CKEDITOR.replace( 'profile_sekolah' );
    </script>
@endsection
