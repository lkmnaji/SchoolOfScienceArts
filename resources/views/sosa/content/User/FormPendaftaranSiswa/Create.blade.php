@extends('sosa.masteruser')
@section('title','Form Pendaftaran Siswa')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/formpendaftaran.jpg')}}" class="card-img img-pendaftaransiswa" alt="fotosekolah">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-pendaftaran">Come Join Us</h1>
      <hr id="grs-pendaftaran">
    </div>
</div>
<form action="{{route('formsiswa.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container" id="ctn-formsiswa">
        <div class="card" id="card-formsiswa1">
            <div class="card-header ch-1" style="background-color: #002244">
                Pilihan Sekolah yang ada di School Of Science & Arts
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="tingkat_pendidikan_id" class="col-lg-2 col-md-2 col-sm-2 col-form-label">Tingkat Pendidikan</label>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <select name="tingkat_pendidikan_id" id="tingkat_pendidikan_id" class="custom-select">
                            <option value="">
                                Pilih Tingkat Pendidikan
                            </option>
                            @foreach ($data_tingkat as $dt)
                                <option value="{{$dt->id}}">
                                    {{$dt->tingkat_pendidikan}}
                                </option>
                            @endforeach
                        </select>
                        @error('tingkat_pendidikan_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <select name="nama_sekolah_id" id="nama_sekolah_id" class="custom-select">
                            <option value="">
                                Pilih Sekolah
                            </option>
                            @foreach ($data_sekolah as $ds)
                                <option value="{{$ds->id}}">
                                    {{$ds->nama_sekolah}}
                                </option>
                            @endforeach
                        </select>
                        @error('nama_sekolah_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card" id="card-formsiswa2">
            <div class="card-header ch-2" style="background-color: #002244">
                Biodata Dan Informasi Sekolah
            </div>
            <div class="card-body">
                <p id="p-formsiswa1">Biodata Calon Siswa</p>
                <hr>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group row" id="form-biodatasiswa1">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="tahun_ajaran_id">Tahun Ajaran</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <select name="tahun_ajaran_id" id="tahun_ajaran_id" class="custom-select">
                                    <option value="">
                                        Pilih Tahun Ajaran
                                    </option>
                                    @foreach ($data_tahun as $dt1)
                                        <option value="{{$dt1->id}}">
                                            {{$dt1->tahun_ajaran}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tahun_ajaran_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatasiswa2">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="nama_calon_siswa">Nama Siswa</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="text" name="nama_calon_siswa" id="nama_calon_siswa" class="form-control" placeholder="Nama Anda">
                                @error('nama_calon_siswa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatasiswa3">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                                @error('tanggal_lahir')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatasiswa4">
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
                        <div class="form-group row" id="form-biodatasiswa5">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="alamat_calon_siswa">Alamat Siswa</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="text" name="alamat_calon_siswa" id="alamat_calon_siswa" class="form-control" placeholder="Alamat">
                                @error('alamat_calon_siswa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatasiswa6">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="img_siswa">Foto Siswa</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="file" name="img_siswa" id="img_siswa" class="form-control">
                                @error('img_siswa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatasiswa7">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="nomor_telepon">Nomor Telepon Siswa</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" placeholder="No.Telepon Siswa">
                                @error('nomor_telepon')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatasiswa8">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="nomor_telepon_orangtua">Nomor Telepon Orangtua</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <input type="text" name="nomor_telepon_orangtua" id="nomor_telepon_orangtua" class="form-control" placeholder="No.Telepon Orangtua">
                                @error('nomor_telepon_orangtua')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatasiswa9">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="sumber_informasi_id">Dapat Informasi dari ?</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <select name="sumber_informasi_id" id="sumber_informasi_id" class="custom-select">
                                    <option value="">
                                        Pilih Sumber Informasi
                                    </option>
                                    @foreach ($data_informasi as $di)
                                        <option value="{{$di->id}}">
                                            {{$di->sumber_informasi}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jenis_kelamin_id')
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
