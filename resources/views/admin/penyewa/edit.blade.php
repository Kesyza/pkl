@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Penyewa</h1>
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
                   <form action="{{route('penyewa.update',$penyewa->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Nama Penyewa</label>
                            <input type="text" name="nama_lengkap" value="{{$penyewa->nama_lengkap}}" class="form-control @error('nama_lengkap') is-invalid @enderror">
                             @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Email</label>
                            <input type="email" name="email" value="{{$penyewa->email}}" class="form-control @error('email') is-invalid @enderror">
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Password</label>
                            <input type="password" name="password" value="{{$penyewa->password}}" class="form-control @error('password') is-invalid @enderror">
                             @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jenis Kelamin</label>
                            <input type="text" name="jk" value="{{$penyewa->jk}}" class="form-control @error('jk') is-invalid @enderror">
                             @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nomor Telepon</label>
                            <input type="text" name="nomor_hp" value="{{$penyewa->nomor_hp}}" class="form-control @error('nomor_hp') is-invalid @enderror">
                             @error('nomor_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Alamat</label>
                            <input type="text" name="alamat_lengkap" value="{{$penyewa->alamat_lengkap}}" class="form-control @error('alamat_lengkap') is-invalid @enderror">
                             @error('alamat_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
