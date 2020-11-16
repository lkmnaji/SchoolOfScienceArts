@extends('sosa.MasterAdmin')
@section('title','Edit Data Carousel User')

@section('sosa.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="edit-carouseluser">
        <h2 id="h2-create">Edit Data Carousel User</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('carousel.update',$carousel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Foto yang akan diganti</label><br>
                <img src="{{Storage::url('public/img/').$carousel->img_carousel}}" alt="carousel_user" width="200px">
            </div>
            <div class="form-group">
                <label for="img_carousel">Foto Sekolah</label><br>
                <input type="file" id="img_carousel" name="img_carousel" class="form-control">
                @error('img_carousel')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN DIISI BENAR ?')">Update</button>
        </form>
        <a href="{{route('carousel.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
