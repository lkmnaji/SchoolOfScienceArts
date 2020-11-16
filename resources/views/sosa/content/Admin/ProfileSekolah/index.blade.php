@extends('sosa.MasterAdmin')
@section('title','Admin | Table Profile Sekolah')

@section('sosa.content.Admin')
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>    
    <div class="container mt-3" id="index-profilesekolah">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2 id="h2-create">Tabel Data Profil Sekolah</h2>
                    <h2 id="h2-create">School Of Science & Arts</h2>
                </div>
                <a href="{{route('profilesekolah.create')}}"><button class="btn btn-success">Tambah Data</button></a>
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
                          <th>Foto Sekolah</th>
                          <th>Deskripsi</th>
                          <th>Action</th>
                        </tr>               
                    </thead>

                    <tbody>
                        
                        @forelse ($data_profile as $dp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $dp->id }}</td>
                                <td><img src="{{Storage::url('public/img/').$dp->img_profilesekolah}}" alt="img_profilesekolah" width="200px"></td>
                                <td>{{ $dp->profile_sekolah }}</td>
                                <td>
                                    <a href="{{route('profilesekolah.edit', $dp->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('profilesekolah.destroy', $dp->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                        </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection