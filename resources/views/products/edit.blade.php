@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadein">
            <h2 class="my-4">Update Product</h2>
            {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header border-0">
                        <strong class="text-muted">General Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><strong>Title</strong></label>
                                    <input id="title" name="title" type="text" class="form-control" placeholder="Title" value="{{ $product->title }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for=""><strong>Description</strong></label>
                                    <textarea id="ck-editor" class="form-control" name="description" cols="30" rows="10" placeholder="Description">{{ $product->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="col-sm-12"><strong>Payment Gateways</strong></p>               
                        </div>
                        <div class="row">
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="paypal" disabled>
                                <label class="form-check-label h5" for="paypal"><i class="fa fa-paypal text-info"></i> Paypal</label>
                            </div>
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="bitcoin">
                                <label class="form-check-label h5" for="bitcoin"><i class="fa fa-bitcoin text-warning"></i> Bitcoin</label>
                            </div>
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="ethereum">
                                <label class="form-check-label h5" for="ethereum"><i class="fa fa-compass text-dark"></i> Ethereum</label>
                            </div>
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="litecoin" disabled>
                                <label class="form-check-label h5" for="litecoin"><i class="fa fa-viacoin text-dark"></i> Litecoin</label>
                            </div>
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="stripe">
                                <label class="form-check-label h5" for="stripe"><i class="fa fa-cc-stripe text-info"></i> Stripe</label>
                            </div>
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="bitcoin-cash">
                                <label class="form-check-label h5" for="bitcoin-cash"><i class="fa fa-bitcoin text-success"></i> Bitcoin Cash</label>
                            </div>
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="perfect-money" disabled>
                                <label class="form-check-label h5" for="perfect-money"><i class="fa fa-money text-danger"></i> Perfect Money</label>
                            </div>
                            <div class="form-group form-check col-md-2 ml-3">
                                <input type="checkbox" class="form-check-input" id="skrill" disabled>
                                <label class="form-check-label h5" for="skrill"><i class="fa fa-shekel text-danger"></i> Skrill</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-0">
                        <strong class="text-muted">Customization</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="file-input"><strong>Image</strong> <small class="text-muted"><em>optional</em></small></label>
                                    <div class="col-md-9">
                                        <input id="file-input" type="file" name="prod_image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="note"><strong>Note to Customer</strong> <small class="text-muted"><em>Optional</em></small></label>
                                    <textarea class="form-control" name="notetocustomer" id="note" cols="30" rows="5">{{ $product->notetocustomer }}</textarea>
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