@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
        <h2 class="my-4 d-inline-block">Product Items</h2>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                @foreach ($stocks as $stock)
                                    @foreach ($items as $item)
                                        @if ($item->prod_id == $product->id)
                                            @if ($stock->prod_id == $product->id)
                                                <tr>
                                                    <td>{{ $product->title }}</td>
                                                    <td>{{ $item->code }}</td>
                                                    <td>{{ $stock->price }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td></td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection