<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


<!-- Responsiveness -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Sistem Informasi Buku Tamu</title>

<!-- Favicon -->
<link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

<!-- Fonts & Icons -->
<link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">

<!-- SB Admin 2 -->
<link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

<!-- Datatables -->
<link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<!-- Custom Style -->
<link href="{{ asset('custom-style.css') }}" rel="stylesheet">

<!-- HEADER -->
    <header class="text-center mt-4 mb-3">
        <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="Logo">
        <h2 class="text-dark-green fw-bold mt-2">
            Sistem Informasi Buku Tamu <br> Acorn
        </h2>
    </header>

</head>

<body class="custom-bg">

<!-- ================= MAIN CONTENT ================= -->
<div class="container py-4">
    @yield('content')
</div>

<!-- ================= FOOTER ================= -->
<footer class="footer text-center py-3 mt-4">
    <small>By Kelompok 7 | 2025 - {{ date('Y') }}</small>
</footer>

<!-- JS Scripts -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Script tambahan -->
@stack('scripts')
```

</body>

</html>
