<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Halaman Login | Acorn</title>

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

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            <!-- Left Side -->
                            <div class="col-lg-6 bg-dark-green text-center p-5 shadow-lg d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/logo.png') }}" width="200" alt="Logo Acorn" />
                                <h3 class="text-white">
                                    Sistem Informasi Buku Tamu <br>
                                    ACORN <br>
                                    <small>Karawang, Jawa Barat</small>
                                </h3>
                            </div>

                            <!-- Login Form -->
                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Welcome Back!</h1>
                                    </div>

                                    <!-- PESAN ERROR -->
                                    @if(session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <!-- Laravel Login Form -->
                                    <form method="POST" action="{{ route('login.process') }}">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <input type="text" name="username"
                                                class="form-control form-control-user"
                                                placeholder="Enter Username..." required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="password" name="password"
                                                class="form-control form-control-user"
                                                placeholder="Password" required>
                                        </div>

                                        <br>

                                        <button type="submit" class="btn btn-primary btn-user btn-block mb-2">
                                            Login
                                        </button>

                                        <a href="{{ route('register') }}" class="btn btn-secondary btn-user btn-block">
                                            Register Account
                                        </a>
                                    </form>

                                    <hr>

                                    <div class="text-center small">
                                        By. kelompok 7 | 2025 - {{ date('Y') }}
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
