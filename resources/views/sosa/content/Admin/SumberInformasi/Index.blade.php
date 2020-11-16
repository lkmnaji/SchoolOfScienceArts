@extends('sosa.MasterAdmin')
@section('title','Admin | Table Sumber Informasi')

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
    <div class="container mt-3" id="index-informasi">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2 id="h2-create">Tabel Data Sumber Informasi</h2>
                    <h2 id="h2-create">School Of Science & Arts</h2>
                </div>
                <a href="{{route('sumberinformasi.create')}}"><button class="btn btn-success">Tambah Data</button></a>
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
                          <th>Sumber Informasi</th>
                          <th>Action</th>
                        </tr>               
                    </thead>

                    <tbody>
                        
                        @forelse ($data_informasi as $di)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $di->id }}</td>
                                <td>{{ $di->sumber_informasi }}</td>
                                <td>
                                    <a href="{{route('sumberinformasi.edit', $di->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('sumberinformasi.destroy', $di->id)}}" method="post" class="d-inline">
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