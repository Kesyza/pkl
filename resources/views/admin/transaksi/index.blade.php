@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Transaksi</h1>
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
                <div class="card-header">
                    Data Transaksi
                    <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Transaksi</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>ID Sewa</th>
                                <th>ID Mobil</th>
                                <th>ID Sopir</th>
                                <th>Tanggal Kembali</th>
                                <th>Jumlah Bayar</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($transaksi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_sewa}}</td>
                                <td>{{$data->id_mobil}}</td>
                                <td>{{$data->id_sopir}}</td>
                                <td>{{$data->tanggal_kembali}}</td>
                                <td>{{$data->jumlah_bayar}}</td>
                                <td>{{$data->denda}}</td>
                                <td>
                                    <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
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
