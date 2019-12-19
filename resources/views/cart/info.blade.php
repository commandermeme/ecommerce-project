@extends('layouts.app')

@include('includes.client_navbar')

@section('content')
    <div class="pt-5 mt-5">
        <div class="col-sm-6 offset-sm-3">
            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Email Address</h4>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Email Address" name="email">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Send">
            </form>
        </div>
    </div>
@endsection