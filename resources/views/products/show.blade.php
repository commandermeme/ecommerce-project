@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <a href="{{ url('/products') }}" class="btn btn-secondary mt-2"><i class="fa fa-arrow-left"></i> Go back</a>
            <h1 class="my-4">{{ $product->title }}</h1>

            {!! Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => 'd-inline', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary mb-1"><i class="fa fa-close"></i> Delete Product</button>
            {!! Form::close() !!}

            <a class="btn btn-primary mb-1" href="/stocks/{{ $product->id }}"><i class="fa fa-plus"></i> Add denomination</a>

            <div class="card mt-3">
                <div class="card-header border-0">
                    <h4 class="d-inline">Description</h4>
                    <a class="btn btn-primary pull-right" href="/products/{{ $product->id }}/edit"><i class="fa fa-edit"></i></a>
                </div>
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img class="img-fluid" src="/storage/prod_images/{{ $product->prod_image }}" alt="No image found!">
                        </div>
                        <div class="col-md-6">
                            <p class="">
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="mb-4">Denominations</h3>

            
            
            @foreach ($stocks as $stock)
                @if ($stock->prod_id == $product->id)
                
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="d-inline">{{ $product->title .' worth '. $stock->price .' '. $stock->currency}}</h4>
                            <p class="pull-right">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-close"></i></a>
                            </p>
                            <h5 class="">Stock : {{ $stock->stock }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($items as $item)
                                        @if ($item->deno_name == $stock->deno_name)
                                            <tr>
                                                <td>{{ $item->code }}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-primary" href="#"><i class="fa fa-close"></i></a>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>    
               
            @endif
            
            @endforeach
        </div>
    </div>
@endsection