@extends('sosa.MasterAdmin')
@section('title','Admin | Table Form Pegawai')

@section('sosa.content.Admin')
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>    
    <div class="container mt-3" id="index-formsiswa">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2 id="h2-create">Tabel Data Form Pendaftaran Pegawai</h2>
                    <h2 id="h2-create">School Of Science & Arts</h2>
                </div>
                @if (session()->has('validasi'))
                        <div class="alert alert-success">
                            {{ session()->get('validasi') }}
                        </div>
                @endif
                @if (Session::has('sukses'))
                        <div class="alert alert-success">
                            <p>{{ Session::get('sukses') }}</p>
                        </div>
                @endif
                <table class="table table-striped" id="table_id">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                          <th>ID</th>
                          <th>Nama Pegawai</th>
                          <th>Posisi Lamaran</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Foto Pegawai</th>
                          <th>CV Pegawai</th>
                          <th>Nomor Telepon Pegawai</th>
                          <th>Email Calon Pegawai</th>
                        </tr>               
                    </thead>

                    <tbody>
                        @forelse ($data_formpegawai as $dfp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $dfp->id }}</td>
                                <td>{{ $dfp->nama_calon_pegawai }}</td>
                                <td>{{ $dfp->posisi_lamaran_id }}</td>
                                <td>{{ $dfp->tanggal_lahir }}</td>
                                <td>{{ $dfp->jenis_kelamin_id }}</td>
                                <td><img src="{{Storage::url('public/img/').$dfp->img_pegawai}}" alt="foto_siswa" width="200px"></td>
                                <td>{{ $dfp->cv_pegawai }}</td>
                                <td>{{ $dfp->nomor_telepon_pegawai }}</td>
                                <td>{{ $dfp->email_calon_pegawai }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="13" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection