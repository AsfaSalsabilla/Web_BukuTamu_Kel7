@extends('layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">

    <!-- Form Input Tamu -->
    <div class="col-lg-7 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">

                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Identitas Pengunjung</h1>
                </div>

                <form method="POST" action="{{ route('operator.tamu.store') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Pengunjung" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Pengunjung" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Pengunjung" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nope" placeholder="No.hp Pengunjung" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
                </form>

                <hr>

                <div class="text-center">
                    <a class="small">By. kel7 | 2025 - {{ date('Y') }}</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Statistik Pengunjung -->
    <div class="col-lg-5 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">

                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
                </div>

                <table class="table table-bordered">
                    <tr>
                        <td>Hari ini</td>
                        <td>: {{ $stat['hari_ini'] }}</td>
                    </tr>
                    <tr>
                        <td>Kemarin</td>
                        <td>: {{ $stat['kemarin'] }}</td>
                    </tr>
                    <tr>
                        <td>Minggu ini</td>
                        <td>: {{ $stat['minggu_ini'] }}</td>
                    </tr>
                    <tr>
                        <td>Bulan ini</td>
                        <td>: {{ $stat['bulan_ini'] }}</td>
                    </tr>
                    <tr>
                        <td>Keseluruhan</td>
                        <td>: {{ $stat['keseluruhan'] }}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

</div>

<!-- Tabel Data Pengunjung Hari Ini -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center" style="gap: 10px;">
        <h6 class="m-0 font-weight-bold text-primary">
            Data Pengunjung Hari Ini [{{ date('d-m-Y') }}]
        </h6>
    </div>

    <div class="card-body">
        <a href="{{ route('operator.rekap.index') }}" class="btn btn mb-3"><i class="fa fa-table"></i>
            Rekap</a>

        <a href="{{ route('logout') }}" class="btn btn mb-3">
            <i class="fa fa-sign-out-alt"></i> Logout</a>

        <!-- Form Pencarian -->
         <form method="GET" action="{{ route('operator.tamu.index') }}" class="mb-3 d-flex" style="gap:10px;">
            <input type="text" name="keyword" class="form-control" placeholder="Cari nama / No HP / kode unik" value="{{ request('keyword') }}">
            <button type="submit" class="btn btn-primary">Cari</button>
            @if(request('keyword'))
            <a href="{{ route('operator.tamu.index') }}" class="btn btn-secondary">Reset</a>
            @endif
        </form>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tujuan</th>
                        <th>No HP</th>
                        <th>Code</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no = ($data->currentPage()-1)*5 + 1; @endphp
                    @foreach($data as $t)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $t->tanggal }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->alamat }}</td>
                        <td>{{ $t->tujuan }}</td>
                        <td>{{ $t->nope }}</td>
                        <td>{{ $t->kode_unik }}</td>
                        <td>
                            <a href="{{ route('operator.tamu.edit', $t->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('operator.tamu.delete', $t->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-end">
                {{ $data->links('pagination::bootstrap-5') }}
            </div>

        </div>

    </div>
</div>

@endsection
