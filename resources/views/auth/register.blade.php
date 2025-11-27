<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Halaman Registrasi | Acorn</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />

    <!-- Font & Icon -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet" />

    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet" />

    <!-- Custom Style -->
    <link href="{{ asset('custom-style.css') }}" rel="stylesheet" />
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

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            <!-- Left -->
                            <div class="col-lg-6 bg-light text-center p-5 shadow-lg d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/logo.png') }}" width="200" alt="Logo Acorn" />
                                <h3 class="text-dark-green mt-3">
                                    Sistem Informasi Buku Tamu<br>ACORN<br>
                                    <small>Karawang, Jawa Barat</small>
                                </h3>
                            </div>

                            <!-- Right (Form) -->
                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Register Form</h1>
                                    </div>

                                    <!-- ERROR -->
                                    @if(session('danger'))
                                        <div class="alert alert-danger">{{ session('danger') }}</div>
                                    @endif

                                    <!-- SUCCESS -->
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <!-- Laravel Register Form -->
                                    <form action="{{ route('register.process') }}" method="POST">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control form-control-user" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control form-control-user" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" minlength="6" required>
                                            <small class="text-muted">Minimal 6 karakter</small>
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Sudah punya akun? Login</a>
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
</body>
</html>
