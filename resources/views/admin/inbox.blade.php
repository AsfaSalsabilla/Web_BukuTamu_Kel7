@extends('admin.layout')

@section('title', 'Inbox Admin')

@section('content')
<div class="container my-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: #424A3F;">
            <h6 class="m-0 font-weight-bold" style="color: #DDBEB5;">Kotak Masuk</h6>
        </div>

        <div class="card-body">
            @if($messages->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead style="background-color: #EFE1DC;">
                        <tr>
                            <th>No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $index => $msg)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $msg->first_name }}</td>
                            <td>{{ $msg->last_name }}</td>
                            <td>{{ $msg->email }}</td>
                            <td>{!! nl2br(e($msg->message)) !!}</td>
                            <td>{{ date('d M Y H:i', strtotime($msg->created_at)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="alert alert-warning">Belum ada pesan masuk.</div>
            @endif
        </div>
    </div>
</div>
@endsection
