@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Mobil</h1>
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
                <div class="card-header">Data Mobil</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Mobil</label>
                        <input type="text" name="nama_mobil" value="{{$mobil->nama_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Merek Mobil</label>
                        <input type="text" name="merek_mobil" value="{{$mobil->merek_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Polisi</label>
                        <input type="text" name="nomor_polisi" value="{{$mobil->nomor_polisi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Pembuatan Mobil</label>
                        <input type="number" name="tahun_pembuatan" value="{{$mobil->tahun_pembuatan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Mobil</label>
                        <input type="text" name="harga_mobil" value="{{$mobil->harga_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kapasitas Penumpang</label>
                        <input type="text" name="kapasitas_penumpang" value="{{$mobil->kapasitas_penumpang}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Fasilitas Mobil</label>
                        <input type="text" name="fasilitas_mobil" value="{{$mobil->fasilitas_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Status Mobil</label>
                        <input type="text" name="status_mobil" value="{{$mobil->status_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Mobil</label>
                        <br>
                        <img src="{{ $mobil->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/mobil')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
