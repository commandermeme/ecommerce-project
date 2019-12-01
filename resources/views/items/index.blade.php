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
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($items as $item)
                                @foreach ($products as $product)
                                    @if ($item->prod_id  == $product->id)
                                        <tr>
                                            <td>{{ $item->deno_name }}</td>
                                            <td>{{ $item->code }}</td>
                                            <td>{{ $item->status }}</td>
                                        </tr>  
                                    @endif
                                    
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection