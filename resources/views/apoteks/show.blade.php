@extends('layout.main')
@section('title', 'Detail')

@section('content')
    
    <h3>Detail Supliyer</h3>

<div class="mt-4 container d-flex justify-content-center align-items-center">
    <div class="card w-100">
        <div class="card-header">Detail</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" readonly value="{{$apoteks['nama']}}">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="rujukan" class="form-label">Rujukan</label>
                        <input type="text" class="form-control" readonly value="{{$apoteks['rujukan']}}">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="rumah_sakit" class="form-label">Rumah Sakit</label>
                        <input type="text" class="form-control" readonly value="{{$apoteks['rumah_sakit']}}">
                    </div>
                    
                    <div class="col-lg-6 mb-3">
                        <label for="obat" class="form-label">Obat</label>
                        @foreach ($apoteks['obat'] as $obat)
                        <input type="text" class="form-control" readonly value="{{$obat}}">
                        @endforeach
                    </div>


                    <div class="col-lg-6 mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                        @foreach ($apoteks['harga_satuan'] as $harga_satuan)
                        <input type="text" class="form-control" readonly value="{{$harga_satuan}}">
                        @endforeach
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="total_harag" class="form-label">Total Harga</label>
                        <input type="text" class="form-control" readonly value="{{$apoteks['total_harga']}}">
                    </div>

                    <div class="col-lg-6 mb-3 w-100">
                        <label for="apoteker" class="form-label">Apoteker</label>
                        <input type="text" class="form-control" readonly value="{{$apoteks['apoteker']}}">
                    </div>
                    
                    <div class="mb-3 d-flex">
                        <a href="/apoteks" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection