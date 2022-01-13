@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Sewa</h1>
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
                   <form action="{{route('sewa.update',$sewa->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Nomor Nota</label>
                            <input type="number" name="nomor_nota" value="{{$sewa->nomor_nota}}" class="form-control @error('nomor_nota') is-invalid @enderror">
                             @error('nomor_nota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Penyewa</label>
                            <select name="id_penyewa" class="form-control @error('id_penyewa') is-invalid @enderror" >
                                @foreach($penyewa as $data)
                                    <option value="{{$data->id}}" {{$data->id == $sewa->id_penyewa ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('id_penyewa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tanggal Sewa</label>
                            <input type="date" name="tanggal_sewa" value="{{$sewa->tanggal_sewa}}" class="form-control @error('tanggal_sewa') is-invalid @enderror">
                             @error('tanggal_sewa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jaminan</label>
                            <input type="text" name="jaminan" value="{{$sewa->jaminan}}" class="form-control @error('jaminan') is-invalid @enderror">
                             @error('jaminan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Status Sewa</label>
                            <input type="text" name="status_sewa" value="{{$sewa->status_sewa}}" class="form-control @error('status_sewa') is-invalid @enderror">
                             @error('status_sewa')
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
