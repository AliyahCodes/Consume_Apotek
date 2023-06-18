@extends('layout.main')

@section('title', 'deleted data')

@section('content')

<h3>Data Terhapus</h3>

@if (session('success'))
<div class="alert alert-success">
    <i class="bi bi-check-circle-fill"></i>
{{ session('success') }}
</div>
@endif

<div class="card mt-4">
    <div class="card-header">Deleted data</div>
    <div class="card-body">
        <div class="mt-4">
            <table class="table table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Rujukan</th>
                        <th>Rumah Sakit</th>
                        <th>Obat</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                        <th>Apoteker</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apoteks as $data)
                    <tr class="text-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data['nama']}}</td>
                        <td >
                            @if ($data['rujukan'] == true)
                            {{$data['rujukan']}}
                       @else
                             <i class="bi bi-x-circle-fill" style="font-size: 30px"></i>                  
                        @endif
                        </td>
                        <td>
                            @if ($data['rumah_sakit'] == true)
                            {{$data['rumah_sakit']}}
                       @else
                            <i class="bi bi-x-circle-fill" style="font-size: 30px"></></i>
                       @endif
                        </td>
                        <td>{{$data['obat']}}</td>
                        <td>{{$data['harga_satuan']}}</td>
                        <td>@jumlah($data['total_harga']) </td>
                        <td>{{$data['apoteker']}}</td>
                        <td>
                            <a href="/apoteks-restore/{{$data['id']}}" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></a>
                            <a href="/apoteks-permanent/delete/{{$data['id']}}" class="btn btn-danger"><i class="bi bi-trash2-fill"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection