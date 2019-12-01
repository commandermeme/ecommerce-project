@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <a href="/showStocks/{{ $stock[0]->id }}" class="btn btn-secondary mt-2"><i class="fa fa-arrow-left"></i> Go back</a>
            <h1 class="my-4">{{ $item->deno_name }}</h1>

            {!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST', 'class' => 'd-inline', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                @csrf
                @method('PUT')
               
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="code">Serial/Code</label>
                            <input type="text" class="form-control" id="code" name="code" value="{{ $item->code }}">
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mb-4" type="submit" value="Save">
            {!! Form::close() !!}
        </div>
    </div>
@endsection