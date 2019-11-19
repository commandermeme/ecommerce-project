<!--Blacklist-->
@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Blacklist</h2>
            <div class="card">
                <div class="card-header border-0">
                    <a href="{{ url('/blacklist/create') }}" class="btn btn-info text-white">ADD BLACKLIST</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Black Data</th>
                                <th>Note</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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