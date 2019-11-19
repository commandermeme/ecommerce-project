<!--User Pages-->
@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">User Pages</h2>
            <div class="card">
                <div class="card-header border-0">
                    <a href="#" class="btn btn-info text-white">ADD PAGES</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>URL Path</th>
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