<!--Orders-->
@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Orders</h2>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Subtotal Price</th>
                                <th>Payment Method</th>
                                <th>Date Purchase</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ number_format($order->total_price, 2) .' '. $order->currency }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection