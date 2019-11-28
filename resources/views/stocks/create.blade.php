@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Add Denomination</h2>
            {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                @csrf

                <input type="hidden" name="prod_id" value="{{ $product->id }}">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="d-inline">{{ $product->title }}</h4>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="form-group">
                            <label for=""><strong>Price</strong></label>
                            <div class="input-group">
                                <input name="price" type="number" class="form-control" placeholder="Price">
                                <div class="input-group-prepend">
                                    <select class="btn btn-primary" name="currency" id="">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 mt-2">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Serial/Code</th>
                                            <th>
                                                <a class="btn btn-primary text-light add_item"><i class="fa fa-plus"></i></a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="item_body">
                                        <tr>
                                            <td><input type="text" class="form-control" name="code[]"></td>
                                            <td><a class="btn btn-danger remove_item text-light"><i class="fa fa-close"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mb-4" type="submit" value="Save">
            {!! Form::close() !!}
        </div>
    </div>
@endsection