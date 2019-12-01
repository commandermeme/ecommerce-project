@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <a href="/showStocks/{{ $stock->id }}" class="btn btn-secondary mt-2"><i class="fa fa-arrow-left"></i> Go back</a>
            <h1 class="my-4">{{ $stock->deno_name }}</h1>

            {!! Form::open(['action' => ['StocksController@update', $stock->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><strong>Price</strong></label>
                            <div class="input-group">
                                <input name="price" type="number" class="form-control" placeholder="Price" value="{{ $stock->price }}">
                                <div class="input-group-prepend">
                                    <select class="btn btn-primary" name="currency" id="">
                                        <option value="{{ $stock->currency }}">{{ $stock->currency }}</option>
                                        <option value="USD">USD</option>
                                        <option value="PHP">PHP</option>
                                        <option value="CAD">CAD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="JPY">JPY</option>
                                        <option value="GBP">GBP</option>
                                        <option value="ZAR">ZAR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mb-4" type="submit" value="Save">
            {!! Form::close() !!}
        </div>
    </div>
@endsection