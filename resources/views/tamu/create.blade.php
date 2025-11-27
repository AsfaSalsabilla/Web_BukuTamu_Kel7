<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Halaman Pengguna | Acorn</title>

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

<body class="custom-bg">

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

<!-- Main Container -->
    <div class="container">
        <div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">

        <div class="card border-0 shadow-lg my-5"
             style="border-radius: 12px; padding: 20px;">
            <div class="card-body">
                <img src="{{ asset('assets/img/logo.png') }}" width="200" alt="Logo Acorn" class="d-block mx-auto mb-3"/>
                <h3 class="text-center mb-4"
                    style="font-weight: 600; color:#3c4043;">
                    Form Buku Tamu <br> Acorn
                </h3>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('tamu.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" style="font-weight:600;">Nama Tamu</label>
                        <input type="text" name="nama" class="form-control"
                               style="border-radius:8px; height:46px;" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-weight:600;">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="2"
                                  style="border-radius:8px;" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-weight:600;">Tujuan</label>
                        <input type="text" name="tujuan" class="form-control"
                               style="border-radius:8px; height:46px;" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-weight:600;">No HP</label>
                        <input type="text" name="nope" class="form-control"
                               style="border-radius:8px; height:46px;" required>
                    </div>

                    <button class="btn btn-primary w-100"
                            style="border-radius:8px; height:48px; font-weight:600;">
                        Kirim
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer class="text-center p-3 footer" style="background-color: var(--dark-green); color:white;">
    © <?= date('Y') ?> Acorn. Kelompok 7.
</footer>

 <!-- JS -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
