@extends('layout.main')
@section('title', 'Update Data')


@section('content')

<h3>Update Data</h3>

<div class="mt-4  container d-flex justify-content-center align-items-center">
    <div class="card w-100 ">
        <div class="card-header">Update</div>
        <div class="card-body">
            <form action="{{route('update', $apoteks['id'])}}" method="post">
                @csrf
                @method('PATCH')
            <div class="row">
                <div class="col-lg-4 mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$apoteks['nama']}}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="rujukan" class="form-label">Rujukan</label>
                        <input type="text" name="rujukan" class="form-control" value="{{$apoteks['rujukan']}}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="rumah_sakit" class="form-label">Rumah Sakit</label>
                        <input type="text" name="rumah_sakit" class="form-control" value="{{$apoteks['rumah_sakit']}}">
                    </div>
                    
                    <div class="col-lg-4 mb-3">
                        <label for="obat" class="form-label">Obat</label>
                        @foreach ($apoteks['obat'] as $obat)
                        <input type="text" name="obat" class="form-control"  value="{{$obat}}">
                        @endforeach
                    </div>
    
                    <div class="col-lg-4 mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                        @foreach ($apoteks['harga_satuan'] as $harga_satuan)
                        <input type="text" name="harga_satuan" class="form-control"  value="{{$harga_satuan}}">
                        @endforeach
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="apoteker" class="form-label">Apoteker</label>
                        <input type="text" name="apoteker" class="form-control" value="{{$apoteks['apoteker']}}">
                    </div>
                    
                    <div class="mb-3 d-flex">
                        <button class="btn btn-secondary">update</button>
                        <a href="/apoteks" class="btn btn-light ms-2">Back</a>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>


@endsection