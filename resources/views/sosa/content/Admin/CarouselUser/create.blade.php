@extends('sosa.MasterAdmin')
@section('title','Upload Data Carousel User')

@section('sosa.layouts.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="create-carouseluser">
        <h2 id="h2-create">Input Data Carousel User</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('carousel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img_carousel">Pilihan Foto</label><br>
                <input type="file" id="img_carousel" name="img_carousel">
                @error('img_carousel')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="caption_satu">Caption Satu</label>
                <input type="text" class="form-control" id="caption_satu" name="caption_satu">
                @error('caption_satu')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="caption_dua">Caption Dua</label>
                <input type="text" class="form-control" id="caption_dua" name="caption_dua">
                @error('caption_dua')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> --}}
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA YANG DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('carousel.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
