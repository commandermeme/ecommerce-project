@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">{{ $products->title }}</h2>
            
            {!! Form::open(['action' => ['ProductsController@destroy', $products->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-primary">
            {!! Form::close() !!}
        </div>
    </div>
@endsection