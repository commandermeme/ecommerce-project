@extends('layouts.admin_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4 d-inline-block">Resellers</h2>
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="lead">Users</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Membership Date</th>
                                <th>Payment Method</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->type == 0)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>Paypal, Coinbase</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-danger"><i class="fa fa-close"></i></a>
                                            <a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection