@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Transaksi</h1>
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
                <div class="card-header">Data Transaksi</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">ID Sewa</label>
                        <input type="text" name="" class="form-control" value="{{$transaksi->id_sewa}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Mobil</label>
                        <input type="text" name="" class="form-control" value="{{$transaksi->id_mobil}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Sopir</label>
                        <input type="text" name="" class="form-control" value="{{$transaksi->id_sopir}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" value="{{$transaksi->tanggal_kembali}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar</label>
                        <input type="text" name="jumlah_bayar" value="{{$transaksi->jumlah_bayar}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Denda</label>
                        <input type="text" name="denda" value="{{$transaksi->denda}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/transaksi')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
