<!--Orders-->
@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Coupons</h2>
            <div class="card">
                <div class="card-header border-0">
                    <a href="{{ url('/coupons/create') }}" class="btn btn-info text-white">ADD COUPONS</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Discount</th>
                                <th>Product Count</th>
                                <th>Uses</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection