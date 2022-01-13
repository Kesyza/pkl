@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Penyewa</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Penyewa</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Penyewa</label>
                        <input type="text" name="nama_lengkap" value="{{$penyewa->nama_lengkap}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{$penyewa->email}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" value="{{$penyewa->password}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" name="jk" value="{{$penyewa->jk}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" name="nomor_hp" value="{{$penyewa->nomor_hp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat_lengkap" value="{{$penyewa->alamat_lengkap}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/penyewa')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
