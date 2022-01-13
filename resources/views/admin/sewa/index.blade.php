@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Sewa</h1>
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
                    Data Sewa
                    <a href="{{route('sewa.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Sewa</a>
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
                                <th>Nomor Nota</th>
                                <th>ID Penyewa</th>
                                <th>Tanggal Sewa</th>
                                <th>Jaminan</th>
                                <th>Status Sewa</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($sewa as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nomor_nota}}</td>
                                <td>{{$data->id_penyewa}}</td>
                                <td>{{$data->tanggal_sewa}}</td>
                                <td>{{$data->jaminan}}</td>
                                <td>{{$data->status_sewa}}</td>
                                <td>
                                    <form action="{{route('sewa.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('sewa.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('sewa.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
