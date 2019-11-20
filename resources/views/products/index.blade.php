<!--Products-->
@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
                <h2 class="my-4 d-inline-block">Products</h2>
            <div class="card">
                <div class="card-header border-0">
                    <h5 class="text-muted">
                        <a href="{{ url('/products/create') }}" class="btn btn-info text-white">ADD PRODUCTS</a>
                    </h5>
                    {{-- <div class="card-header-actions">
                        <a class="card-header-action" href="#" target="_blank">
                            <a href="{{ url('/products/create') }}" class="btn btn-info text-white">ADD PRODUCTS</a>
                        </a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
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
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->price .' '. $product->currency}}</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="badge badge-success">Serial/Codes</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">{{ $stock->stock }}</td>
                                                <td class="d-none d-sm-table-cell">$0.00</td>
                                                <td>
                                                    <a class="btn btn-success" href="#">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                    <a class="btn btn-info" href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a class="btn btn-danger" href="#">
                                                        <i class="fa fa-trash-o"></i>
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