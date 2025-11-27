@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-7 mb-3 mx-auto">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">

                <h4 class="text-center mb-4">Edit Data Pengunjung</h4>

                <form action="{{ route('operator.tamu.update', $tamu->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $tamu->nama }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $tamu->alamat }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" value="{{ $tamu->tujuan }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>No HP</label>
                        <input type="text" name="nope" class="form-control" value="{{ $tamu->nope }}" required>
                    </div>

                    <button class="btn btn-primary w-100">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
