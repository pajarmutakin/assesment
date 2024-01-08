@extends('layouts.app')
@section('content')
<style>
    body{
        background-image: url('/gambar/bg3.png');
        background-size: cover;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Prodi
                    <a href="{{route('prodi.create')}}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Prodi</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($prodi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama}}</td>
                                <td>
                                    <form action="{{route('prodi.destroy',$data->id)}}" method="POST">
                                        @csrf @method('delete')
                                        <a href="{{route('prodi.edit',$data->id)}}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('prodi.show',$data->id)}}"
                                            class="btn btn-warning btn-sm">Show</a>
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection