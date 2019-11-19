@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Queries</h2>
            <div class="card">
                <div class="card-header border-0">
                            <select class="card-header-action btn btn-lg btn-primary text-white" name="" id="">
                                <option value="">All</option>
                                <option value="">Open</option>
                                <option value="">User Reply</option>
                                <option value="">Replied</option>
                                <option value="">Closed</option>
                                <option value="">Solved</option>
                            </select>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection