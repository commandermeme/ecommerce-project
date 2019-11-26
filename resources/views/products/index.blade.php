<!--Products-->
@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4 d-inline-block">Products</h2>
            <div class="card">
                <div class="card-header border-0">
                    <a href="{{ url('/products/create') }}" class="btn btn-primary text-light">ADD PRODUCTS</a>
                    <a href="{{ url('/items') }}" class="btn btn-primary text-light">View Items</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Denomination</th>
                                <th class="d-none d-sm-table-cell">Type</th>
                                <th class="d-none d-sm-table-cell">Stock</th>
                                <th class="d-none d-sm-table-cell">Revenue</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($products) > 0)
                                @foreach ($stocks as $stock)
                                    @foreach ($products as $product)
                                        @if ($product->id == $stock->prod_id)
                                            <tr>
                                                <td><a class="" href="/stores" target="_blank" rel="noopener noreferrer">{{ $product->title }}</a></td>
                                                <td>1</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="badge badge-success">Serial/Codes</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">{{ $stock->stock }}</td>
                                                <td class="d-none d-sm-table-cell">$0.00</td>
                                                <td>
                                                    <a class="btn btn-warning" href="#">
                                                        <i class="icon-graph"></i>
                                                    </a>
                                                    <a class="btn btn-info" href="/products/{{ $product->id }}/edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a class="btn btn-secondary" href="/products/{{ $product->id }}">
                                                        <i class="fa fa-eye"></i> Show
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif    
                                    @endforeach
                                @endforeach   
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection