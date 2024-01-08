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
                    Tambah Data Prodi
                </div>
                <div class="card-body">
                    <form action="{{route('prodi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" id="" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection