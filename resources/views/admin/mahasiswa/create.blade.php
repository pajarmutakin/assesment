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
                    Tamabh Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="{{route('mahasiswa.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Pilih Prodi</label>
                            <select name="prodi_id" id="" class="form-control">
                                @foreach($prodi as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="number" name="nim" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" required></textarea>
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