@extends('sosa.MasterAdmin')
@section('title','Upload Data Footer User')

@section('sosa.layouts.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="create-footeruser">
        <h2 id="h2-create">Input Data Footer User</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('footer.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img_footer">Pilihan Video</label><br>
                <input type="file" id="img_footer" name="img_footer">
                @error('img_footer')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="about_us">About Us</label>
                <input type="text" class="form-control" id="about_us" name="about_us">
                @error('about_us')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="contact_us">Contact Us</label>
                <input type="text" class="form-control" id="contact_us" name="contact_us">
                @error('contact_us')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA YANG DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('footer.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
