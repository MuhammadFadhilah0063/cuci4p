@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    JENIS BIAYA
                    <a href="{{ route('tambah.biaya') }}" class="btn btn-md btn-success float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>JENIS BIAYA</th>
                                <th>BIAYA</th>
                                <th>AKSI</th>
                            </tr>

                            @foreach ($biaya as $b)
                            <tr>
                                <td>{{ $b->id_biaya }}</td>
                                <td>{{ $b->jenis }}</td>
                                <td>{{ $b->biaya }}</td>
                                <td>
                                    <a href="{{ route('edit.biaya', $b->id_biaya) }}" class="btn btn-md btn-primary">Edit</a>
                                    <a href="{{ route('hapus.biaya', $b->id_biaya) }}" class="btn btn-md btn-danger">Hapus</a>
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
