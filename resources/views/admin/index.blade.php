@extends('admin.layout')

@section('title', 'Dashboard Admin')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="p-4 text-white" style="background-color: #424A3F; border-radius: 12px;">
                <h5>Total Pengguna</h5>
                <h3>{{ $totalUsers }}</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 text-dark" style="background-color: white; border-radius: 12px;">
                <h5>Inbox Masuk</h5>
                <h3>{{ $totalInbox }}</h3>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data User Terdaftar</h6>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                <form action="{{ route('admin.user.destroy', $user->id_user) }}" method="POST" onsubmit="return confirm('Hapus user ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
