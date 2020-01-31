@extends('layouts.admin_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Settings</h2>
            <div class="row">
                <div class="col-md-3">
                    @include('admin_settings.includes.sidebar')
                </div>
                <div class="col-md-9">
                    @yield('extra-settings')
                </div>
            </div>
        </div>
    </div>
@endsection