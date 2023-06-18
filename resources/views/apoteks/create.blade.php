@extends('layout.main')
@section('title', 'Create Data')

@section('content')

<h3>Create Data</h3>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="mt-4 container d-flex justify-content-center align-items-center">
    <div class="card w-100">
        <div class="card-header">
            Create
        </div>
        <div class="card-body">
            <form action="/apoteks/store" method="post">
                @csrf

                <div class="mb-3">
                    <Label for="nama" class="form-label">Nama</Label>
                    <input type="text" name="nama" class="form-control">
                </div>


                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="rujukan" id="flexRadioDefault1" value="1" >
                                <label class="form-check-label" for="flexRadioDefault1">Ya</label>
                            </div>
                        </div>

                        <div class="col-lg-2" >
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rujukan" id="flexRadioDefault1" value="0" >
                                <label class="form-check-label"  for="flexRadioDefault1">No</label>
                                
                            </div>
                        </div>
                    </div>

                <div class="mb-3">
                    <Label for="rumah_sakit" class="form-label">Rumah Sakit</Label>
                    <input type="text" name="rumah_sakit" class="form-control">
                </div>

                <div class="mb-3">
                    <Label for="obat" class="form-label">Obat</Label>
                    <input type="text" name="obat" class="form-control">
                </div>

                <div class="mb-3">
                    <Label for="harga_satuan" class="form-label">Harga Satuan</Label>
                    <input type="text" name="harga_satuan" class="form-control">
                </div>

                <div class="mb-3">
                    <Label for="apoteker" class="form-label">Apoteker</Label>
                    <input type="text" name="apoteker" class="form-control">
                </div>

                <div class="mb-3 d-flex">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                    <a href="/apoteks" class="btn btn-light ms-2">Back</a>
                    </div>
            </form>
        </div>
    </div>
</div>
    
@endsection