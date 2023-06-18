@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<h3>List Supplier</h3>

<div class="tambah-data mt-3 d-flex justify-content-end">
    <a href="/apoteks/create" class="btn btn-success"><i class="bi bi-plus-circle"> Tambah data</i></a>
</div>

     @if(session('success'))
        <div class="alert alert-success mt-3">
            <i class="bi bi-check-circle-fill"></i>
            {{session('success')}}
        </div>
    @endif

<div class="card mt-5">
    <div class="card-header">List Supplier</div>
    <div class="card-body">
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
                @foreach ($apoteks as $item)
                 <tr >
                    <td class="text-center" >{{$loop->iteration}}</td>
                    <td class="text-center">{{$item['nama']}}</td>
                    <td class="text-center">
                        @if ($item['rujukan'] == true)
                        {{$item['rujukan']}}
                   @else
                         <i class="bi bi-x-circle-fill" style="font-size: 30px"></i>                  
                    @endif
                    </td>
                    <td class="text-center">
                        @if ($item['rumah_sakit'] == true)
                        {{$item['rumah_sakit']}}
                   @else
                        <i class="bi bi-x-circle-fill" style="font-size: 30px"></i>
                   @endif
                    </td>
                    <td class="text-center">{{$item['obat']}}</td>
                    <td class="text-center">{{$item['harga_satuan']}}</td>
                    <td class="text-center">@jumlah($item['total_harga']) </td>
                    <td class="text-center">{{$item['apoteker']}}</td>
                    <td>
                        <a href="/apoteks/{{$item['id']}}" class="btn btn-outline-primary fw-bold rounded-pill"><i class="bi bi-eye-fill"></i></a>
                        <a href="/apoteks/edit/{{$item['id']}}" class="btn btn-outline-warning fw-bold rounded-pill"><i class="bi bi-pencil-square"></i></a>
                        <form action="/apoteks/delete/{{$item['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger fw-bold rounded-pill mt-2"><i class="bi bi-x-circle-fill"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>


    
@endsection