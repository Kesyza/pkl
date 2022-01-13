@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Transaksi</h1>
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
                   <form action="{{route('transaksi.update',$transaksi->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">ID Sewa</label>
                            <select name="id_sewa" class="form-control @error('id_sewa') is-invalid @enderror" >
                                @foreach($sewa as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->id_sewa ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('id_sewa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Mobil</label>
                            <select name="id_mobil" class="form-control @error('id_mobil') is-invalid @enderror" >
                                @foreach($mobil as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->id_mobil ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('id_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Sopir</label>
                            <select name="id_sopir" class="form-control @error('id_sopir') is-invalid @enderror" >
                                @foreach($sopir as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->id_sopir ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('id_sopir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tangggal Kembali</label>
                            <input type="date" name="tanggal_kembali" value="{{$transaksi->tanggal_kembali}}" class="form-control @error('tanggal_kembali') is-invalid @enderror">
                             @error('tanggal_kembali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jumlah Bayar</label>
                            <input type="text" name="jumlah_bayar" value="{{$transaksi->jumlah_bayar}}" class="form-control @error('jumlah_bayar') is-invalid @enderror">
                             @error('jumlah_bayar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Denda</label>
                            <input type="text" name="denda" value="{{$transaksi->denda}}" class="form-control @error('denda') is-invalid @enderror">
                             @error('denda')
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
