@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Sewa</h1>
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
                <div class="card-header">Data Sewa</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nomor Nota</label>
                        <input type="number" name="nomor_nota" value="{{$sewa->nomor_nota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Penyewa</label>
                        <input type="text" name="" class="form-control" value="{{$sewa->id_penyewa}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Sewa</label>
                        <input type="date" name="tanggal_sewa" value="{{$sewa->tanggal_sewa}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jaminan</label>
                        <input type="text" name="jaminan" value="{{$sewa->jaminan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Status Sewa</label>
                        <input type="text" name="status_sewa" value="{{$sewa->status_sewa}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/sewa')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
