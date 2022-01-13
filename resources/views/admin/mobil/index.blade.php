@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Mobil</h1>
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
                    Data Mobil
                    <a href="{{route('mobil.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Mobil</a>
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
                                <th>Nama Mobil</th>
                                <th>Merek Mobil</th>
                                <th>Nomor Polisi</th>
                                <th>Tahun Pembuatan</th>
                                <th>Harga Mobil</th>
                                <th>Kapasitas Penumpang</th>
                                <th>Fasilitas Mobil</th>
                                <th>Status Mobil</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($mobil as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_mobil}}</td>
                                <td>{{$data->merek_mobil}}</td>
                                <td>{{$data->nomor_polisi}}</td>
                                <td>{{$data->tahun_pembuatan}}</td>
                                <td>{{$data->harga_mobil}}</td>
                                <td>{{$data->kapasitas_penumpang}}</td>
                                <td>{{$data->fasilitas_mobil}}</td>
                                <td>{{$data->status_mobil}}</td>
                                <td><img src="{{$data->image()}}" alt="" style="width:160px; height:100px;" alt="Gambar"></td>
                                <td>
                                    <form action="{{route('mobil.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('mobil.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('mobil.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
