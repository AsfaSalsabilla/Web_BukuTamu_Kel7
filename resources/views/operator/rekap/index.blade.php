@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pengunjung</h6>
            </div>

            <div class="card-body">

                <!-- FORM RANGE TANGGAL -->
                <form method="POST" action="{{ route('operator.rekap.filter') }}" class="text-center">
                    @csrf

                    <div class="row">
                        <div class="col-md-3"></div>


                        <div class="col-md-3">
                            <label>Dari Tanggal</label>
                            <input type="date" class="form-control" name="tanggal1"
                                   value="{{ $tgl1 ?? date('Y-m-d') }}" required>
                        </div>

                        <div class="col-md-3">
                            <label>Sampai Tanggal</label>
                            <input type="date" class="form-control" name="tanggal2"
                                   value="{{ $tgl2 ?? date('Y-m-d') }}" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4"></div>

                        <div class="col-md-2">
                            <button class="btn btn-primary form-control" name="btampilkan">
                                <i class="fa fa-search"></i> Tampilkan
                            </button>
                        </div>

                        <div class="col-md-2">
                            <a href="{{ route('operator.tamu.index') }}" class="btn btn-danger form-control">
                                <i class="fa fa-backward"></i> Kembali
                            </a>
                        </div>
                    </div>

                </form>

                <!-- TABEL DATA REKAP -->
                @isset($data)

                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Nama Pengunjung</th>
                                <th>Alamat</th>
                                <th>Tujuan</th>
                                <th>No. HP</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $no = 1; @endphp
                            @forelse($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->tujuan }}</td>
                                <td>{{ $item->nope }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">
                                    Tidak ada data pada rentang tanggal tersebut
                                </td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>

                </div>

                @endisset
                <div class="text-center my-3">
                    <a href="{{ route('operator.rekap.export', ['tanggal1' => $tgl1, 'tanggal2' => $tgl2]) }}" class="btn btn-success">
                        <i class="fa fa-download"></i> Export ke Excel
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
