<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Terima Kasih | Acorn</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

    <!-- Fonts & Icons -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('custom-style.css') }}" rel="stylesheet">

</head>
<body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar shadow-sm">
        <div class="container">
            <img src="{{ asset('assets/img/logo.png') }}" width="30" alt="Logo">
            <a class="navbar-brand" href="{{ url('/') }}">Acorn</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu" aria-controls="navbarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

            </div>
        </div>
    </nav>


<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-7">
        <div class="card shadow success-card text-center">

            <!-- ICON SUKSES -->
            <i class="success-icon fas fa-check-circle mb-3"></i>

            <!-- JUDUL -->
            <h2 class="mt-2" style="font-weight:700;">Terima Kasih!</h2>

            <!-- PESAN UTAMA -->
            <p class="mt-2" style="font-size:17px;">
                Data Reservasi Anda telah <strong>berhasil ditambahkan</strong>.
            </p>

            @if(session('kode_unik'))
            <div class="mt-4">
                <p><strong>Kode Reservasi Anda:</strong></p>
                <div style="
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 6px;
        background: #f1f3f4;
        padding: 12px;
        border-radius: 12px;
        display: inline-block;
        width: 100%;
    ">
        {{ session('kode_unik') }}
    </div>

    <p class="text-danger mt-3" style="font-weight: 600;">
        Screenshot atau catat kode ini untuk ditunjukkan kepada operator.
    </p>
</div>
@endif


            <!-- PESAN TAMBAHAN -->
            <p class="text-muted mb-4">
                Kami telah menerima reservasi Anda. Jika ingin mengisi form baru atau kembali ke halaman utama, silakan pilih tombol di bawah.
            </p>

            <!-- TOMBOL -->
            <a href="{{ route('tamu.create') }}" class="btn btn-acorn text-white w-100 py-2 mb-2" style="background:#3c4043;">
                Isi Form Lagi
            </a>

            <a href="/" class="btn btn-secondary w-100 py-2">
                Kembali ke Beranda
            </a>

            <!-- FOOTER -->
            <p class="text-muted mt-4">Acorn © 2025</p>

        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center p-3 footer" style="background-color: var(--dark-green); color:white;">
    © <?= date('Y') ?> Acorn. Kelompok 7.
</footer>

<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
