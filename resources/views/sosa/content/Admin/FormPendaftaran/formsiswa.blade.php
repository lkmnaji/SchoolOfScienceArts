@extends('sosa.MasterAdmin')
@section('title','Admin | Table Form Siswa')

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
                    <h2 id="h2-create">Tabel Data Form Pendaftaran Siswa</h2>
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
                          <th>Nama Siswa</th>
                          <th>Tingkat Pendidikan</th>
                          <th>Nama Sekolah</th>
                          <th>Tahun Ajaran</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat Siswa</th>
                          <th>Foto Siswa</th>
                          <th>Nomor Telepon Siswa</th>
                          <th>Nomor Telepon Orangtua</th>
                          <th>Sumber Informasi</th>
                        </tr>               
                    </thead>

                    <tbody>
                        @forelse ($data_formsiswa as $dfs)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $dfs->id }}</td>
                                <td>{{ $dfs->nama_calon_siswa }}</td>
                                <td>{{ $dfs->tingkat_pendidikan_id }}</td>
                                <td>{{ $dfs->nama_sekolah_id }}</td>
                                <td>{{ $dfs->tahun_ajaran_id }}</td>
                                <td>{{ $dfs->tanggal_lahir }}</td>
                                <td>{{ $dfs->jenis_kelamin_id }}</td>
                                <td>{{ $dfs->alamat_calon_siswa }}</td>
                                <td><img src="{{Storage::url('public/img/').$dfs->img_siswa}}" alt="foto_siswa" width="200px"></td>
                                <td>{{ $dfs->nomor_telepon }}</td>
                                <td>{{ $dfs->nomor_telepon_orangtua }}</td>
                                <td>{{ $dfs->sumber_informasi_id }}</td>
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