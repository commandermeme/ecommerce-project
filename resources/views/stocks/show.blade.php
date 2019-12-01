@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <a href="/products/{{ $stock->prod_id }}" class="btn btn-secondary mt-2"><i class="fa fa-arrow-left"></i> Go back</a>
            <h1 class="my-4">{{ $stock->deno_name }}</h1>

            <a class="btn btn-primary mb-1" href="/items/createItem/{{ $stock->id }}"><i class="fa fa-plus"></i> Add Item</a>
            <a class="btn btn-primary mb-1" href="/stocks/{{ $stock->id }}/edit"><i class="fa fa-edit"></i> Edit Price</a>

            <div class="card mt-3">
                <div class="card-header border-0">
                    <h4>Item</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                @if ($item->deno_name == $stock->deno_name)
                                    
                                    <tr>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                
                                                <a href="/items/{{ $item->id }}/edit" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                {!! Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'class' => 'd-inline', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-close"></i></button>
                                                {!! Form::close() !!}
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection