@extends('sosa.masteruser')
@section('title','Form Pendaftaran Siswa')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/pendaftaranpegawai.png')}}" class="card-img img-pendaftaranpegawai" alt="fotosekolah">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-pendaftaran">Come Join Us</h1>
      <hr id="grs-pendaftaran">
    </div>
</div>
<form action="{{route('formpegawai.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container" id="ctn-formpegawai">
        <div class="card" id="card-formpegawai2">
            <div class="card-header ch-2" style="background-color: #002244">
                Form Pendaftaran Pegawai
            </div>
            <div class="card-body">
                <p id="p-formpegawai1">Biodata Calon Pegawai</p>
                <hr>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group row" id="form-biodatapegawai1">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="posisi_lamaran_id">Posisi Lamaran</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <select name="posisi_lamaran_id" id="posisi_lamaran_id" class="custom-select">
                                    <option value="">
                                        Pilih Posisi Lamaran
                                    </option>
                                    @foreach ($data_posisi as $dp)
                                        <option value="{{$dp->id}}">
                                            {{$dp->posisi_lamaran}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('posisi_lamaran_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai2">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="nama_calon_pegawai">Nama Pegawai</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="text" name="nama_calon_pegawai" id="nama_calon_pegawai" class="form-control" placeholder="Nama Anda">
                                @error('nama_calon_pegawai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai3">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                                @error('tanggal_lahir')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai4">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="jenis_kelamin_id">Jenis Kelamin</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <select name="jenis_kelamin_id" id="jenis_kelamin_id" class="custom-select">
                                    <option value="">
                                        Pilih Jenis Kelamin
                                    </option>
                                    @foreach ($data_kelamin as $dk)
                                        <option value="{{$dk->id}}">
                                            {{$dk->jenis_kelamin}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jenis_kelamin_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai5">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="img_pegawai">Foto Pegawai</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="file" name="img_pegawai" id="img_pegawai" class="form-control">
                                @error('img_pegawai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai6">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="cv_pegawai">Curriculum Vitae Pegawai</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="file" name="cv_pegawai" id="cv_pegawai" class="form-control">
                                @error('cv_pegawai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai7">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="nomor_telepon_pegawai">Nomor Telepon</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="text" name="nomor_telepon_pegawai" id="nomor_telepon_pegawai" class="form-control" placeholder="No.Telepon Anda">
                                @error('nomor_telepon_pegawai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai8">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="email_calon_pegawai">Email</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="text" name="email_calon_pegawai" id="email_calon_pegawai" class="form-control" placeholder="Masukkan Alamat Email Anda">
                                @error('email_calon_pegawai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('ANDA YAKIN UNTUK DATA SUDAH DIISI BENAR ?')">Upload</button>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
