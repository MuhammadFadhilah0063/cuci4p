@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA
                    <a href="http://localhost/cuci4p/public/biaya" class="btn btn-md btn-success float-right">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="jenis_biaya" class="form-label">Jenis Biaya</label>
                            <input type="text" class="form-control" id="jenis_biaya" name="jenis_biaya" placeholder="Motor">

                            <label for="biaya" class="form-label mt-1">Biaya</label>
                            <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Rp. 15000">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
