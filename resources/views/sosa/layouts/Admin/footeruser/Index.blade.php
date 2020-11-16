@extends('sosa.MasterAdmin')
@section('title','Admin | Table Footer User')

{{-- @section('admin','active') --}}

@section('sosa.layouts.Admin')
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>    
    <div class="container mt-3" id="index-footeruser">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2 id="h2-create">Tabel Data Footer User</h2>
                    <h2 id="h2-create">School Of Science & Arts</h2>
                </div>
                <a href="{{route('footer.create')}}"><button class="btn btn-success">Tambah Data</button></a>
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
                          <th>GIF</th>
                          <th>About Us</th>
                          <th>Address</th>
                          <th>Contact US</th>
                          <th>Action</th>
                        </tr>               
                    </thead>

                    <tbody>
                        
                        @forelse ($data_footer as $df)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $df->id }}</td>
                                <td><img src="{{Storage::url('public/img/').$df->img_footer}}" alt="video_footer" type="image/gif" width="200px"></td>
                                <td>{{ $df->about_us }}</td>
                                <td>{{ $df->address }}</td>
                                <td>{{ $df->contact_us }}</td>
                                <td>
                                    <a href="{{route('footer.edit', $df->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('footer.destroy', $df->id)}}" method="post" class="d-inline">
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