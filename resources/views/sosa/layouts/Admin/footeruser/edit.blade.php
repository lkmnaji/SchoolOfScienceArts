@extends('sosa.MasterAdmin')
@section('title','Edit Data Footer User')

@section('sosa.layouts.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="edit-footeruser">
        <h2 id="h2-create">Edit Data Footer User</h2>
        <h2 id="h2-create">SCHOOL OF SCIENCE & ARTS</h2>
        <hr>
        <form action="{{ route('footer.update',$footer->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Foto yang akan diganti</label><br>
                <img src="{{Storage::url('public/img/').$footer->img_footer}}" alt="footer_user" width="200px">
            </div>
            <div class="form-group">
                <label for="img_footer">Foto Footer</label><br>
                <input type="file" id="img_footer" name="img_footer" class="form-control" value="{{ $footer->img_footer }}">
                @error('img_footer')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="about_us">About Us</label>
                <input type="text" class="form-control" id="about_us" name="about_us" value="{{ $footer->about_us }}">
                @error('about_us')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $footer->address }}">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="contact_us">Contact Us</label>
                <input type="text" class="form-control" id="contact_us" name="contact_us" value="{{ $footer->contact_us }}">
                @error('contact_us')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN DIISI BENAR ?')">Update</button>
        </form>
        <a href="{{route('footer.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>


@endsection
