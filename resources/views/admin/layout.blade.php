<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard Admin')</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --dark-green: #424A3F;
            --sage-green: #9AA497;
            --light-grey: #D6DEDA;
            --blush-pink: #EFE1DC;
            --soft-pink: #DDBEB5;
            --dusty-rose: #A58276;
        }
        body {
            min-height: 100vh;
            display: flex;
            background-color: var(--light-grey);
        }
        .sidebar {
            width: 250px;
            background-color: var(--dark-green);
            color: white;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
        }
        .sidebar img {
            max-width: 100px;
            margin-bottom: 1rem;
        }
        .sidebar h4 {
            color: var(--dusty-rose);
            margin-bottom: 1.5rem;
        }
        .sidebar .nav-link {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            width: 100%;
            text-align: center;
            margin-bottom: 0.5rem;
            transition: background-color 0.3s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #A58276;
            color: white;
        }
        .content {
            flex-grow: 1;
            background-color: var(--blush-pink);
            display: flex;
            flex-direction: column;
        }
        .topbar {
            background-color: var(--soft-pink);
            padding: 1rem;
            border-bottom: 1px solid var(--dusty-rose);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .dashboard-card {
            border-radius: 1rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
        }
        .btn-hapus {
            background-color: var(--dusty-rose);
            color: white;
            border: none;
        }
        .btn-hapus:hover {
            background-color: #8a6a5b;
            color: white;
        }
        .logo-circle {
            width: 50px;       /* ukuran lebar */
            height: 50px;      /* ukuran tinggi */
            object-fit: cover;  /* supaya proporsional dan tidak terdistorsi */
            border-radius: 50%; /* bikin bulat */
            border: 2px solid #fff; /* opsional, border putih */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="{{ asset('assets/img/logomin.png') }}" alt="Logomin" class="logo-circle">
        <h4>Admin Panel</h4>
        <a href="{{ route('admin.index') }}" class="nav-link @if(request()->routeIs('admin.index')) active @endif">Dashboard</a>
        <a href="{{ route('admin.inbox') }}" class="nav-link @if(request()->routeIs('admin.inbox')) active @endif">Pesan</a>
        <a href="{{ route('logout') }}" class="nav-link text-danger mt-4">Keluar</a>
    </div>

    <div class="content">
        <div class="topbar">
            <h5 class="mb-0">@yield('header', 'Selamat Datang, Admin')</h5>
            <span class="text-muted">Tanggal: {{ date('d M Y') }}</span>
        </div>
        <div class="p-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
