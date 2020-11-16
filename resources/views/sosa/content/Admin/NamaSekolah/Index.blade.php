@extends('sosa.MasterAdmin')
@section('title','Admin | Table Nama Sekolah')

{{-- @section('admin','active') --}}

@section('sosa.content.Admin')
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>    
    <div class="container mt-3" id="index-sekolah">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2 id="h2-create">Tabel Data Nama Sekolah</h2>
                    <h2 id="h2-create">School Of Science & Arts</h2>
                </div>
                <a href="{{route('namasekolah.create')}}"><button class="btn btn-success">Tambah Data</button></a>
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
                          <th>Nama Sekolah</th>
                          <th>Action</th>
                        </tr>               
                    </thead>

                    <tbody>
                        
                        @forelse ($data_sekolah as $ds)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $ds->id }}</td>
                                <td>{{ $ds->nama_sekolah }}</td>
                                <td>
                                    <a href="{{route('namasekolah.edit', $ds->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('namasekolah.destroy', $ds->id)}}" method="post" class="d-inline">
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