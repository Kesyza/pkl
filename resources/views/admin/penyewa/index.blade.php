@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Penyewa</h1>
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
                    Data Penyewa
                    <a href="{{route('penyewa.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Penyewa</a>
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
                                <th>Nama Penyewa</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($penyewa as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_lengkap}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->password}}</td>
                                <td>{{$data->jk}}</td>
                                <td>{{$data->nomor_hp}}</td>
                                <td>{{$data->alamat_lengkap}}</td>
                                <td>
                                    <form action="{{route('penyewa.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('penyewa.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('penyewa.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
