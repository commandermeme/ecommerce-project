@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadein">
            <h2 class="my-4">Update Product</h2>
            {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST', 'id' => 'signupForm']) !!}
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-header border-0">
                        {{-- <h5 class="text-muted">General Information</h5> --}}
                        <strong class="text-muted">General Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for=""><strong>Title</strong></label>
                                    <input id="title" name="title" type="text" class="form-control" placeholder="Title" value="{{ $product->title }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""><strong>Price</strong></label>
                                    <div class="input-group">
                                        <input name="price" type="number" class="form-control" placeholder="Price" value="{{ $product->price }}">
                                        <div class="input-group-prepend">
                                            {{-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">USD<span class="caret"></span></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">PHP</a>
                                                <a href="#" class="dropdown-item">BAR</a>
                                            </div> --}}
                                            <select class="btn btn-primary" name="currency" id="" value="{{ $product->currency }}">
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
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for=""><strong>Description</strong></label>
                                    <textarea id="ck-editor" class="form-control" name="description" cols="30" rows="10">{{ $product->description }}</textarea>
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
                        <strong class="text-muted">Product Stock</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="type"><strong>Type</strong></label>
                                    <select class="form-control" name="" id="type">
                                        <option value="">Serial/Code</option>
                                        <option value="">File</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Items</th>
                                            <th>
                                                <button id="add_item" type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="item_body">
                                        
                                        @foreach ($items as $item)
                                            @if ($item->status == 1)
                                                <tr>
                                                    <td><input type="text" class="form-control" name="code[]" value="{{ $item->code }}"></td>
                                                    <td><button type="button" class="btn btn-danger remove_item"><i class="fa fa-close"></i></button></td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
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
                            <div class=" col-md-8">
                                <div class="form-group">
                                    <label for="layout"><strong>Layout</strong></label>
                                    <select name="" id="layout" class="form-control">
                                        <option value="">Regular</option>
                                        <option value="">Custom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="file-input"><strong>Image</strong> <small class="text-muted"><em>optional</em></small></label>
                                    <div class="col-md-9">
                                        <input id="file-input" type="file" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="note"><strong>Note to Customer</strong> <small class="text-muted"><em>Optional</em></small></label>
                                    <textarea class="form-control" name="notetocustomer" id="note" cols="30" rows="5">{{ $product->notetocustomer }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="d-block" for="custom"><strong>Custom Fields</strong> <small class="text-muted"><em>Optional</em></small></label>
                                    <input id="custom" class="btn btn-secondary" type="button" value="Add Custom Field">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-0">
                        <strong class="text-muted">Miscellaneous</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="webhook"><strong>Webhook URL</strong> <small class="text-muted"><em>Optional</em></small></label>
                                    <input type="text" id="webhook" class="form-control" placeholder="Webhool URL">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="crypto"><strong>Crypto Currency Confirmations</strong></label>
                                    <input id="range_08" type="text" name="crypto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="risk"><strong>Max Risk Level</strong></label>
                                    <input id="range_03" type="text" name="risk">
                                </div>
                            </div>
                            <div class="form-group form-check col ml-3">
                                <input type="checkbox" class="form-check-input" id="paypal">
                                <label class="form-check-label" for="paypal">Paypal <a href="#"><i class="fa fa-question-circle text-info"></i></a></label>
                            </div>
                            <div class="form-group form-check col ml-3">
                                <input type="checkbox" class="form-check-input" id="paypal">
                                <label class="form-check-label" for="paypal">Private <a href="#"><i class="fa fa-question-circle text-info"></i></a></label>
                            </div>
                            <div class="form-group form-check col ml-3">
                                <input type="checkbox" class="form-check-input" id="paypal">
                                <label class="form-check-label" for="paypal">Block VPNs/Proxies <a href="#"><i class="fa fa-question-circle text-info"></i></a></label>
                            </div>
                            <div class="form-group form-check col ml-3">
                                <input type="checkbox" class="form-check-input" id="paypal">
                                <label class="form-check-label" for="paypal">Paypal Email Delivery <a href="#"><i class="fa fa-question-circle text-info"></i></a></label>
                            </div>
                        </div>
                    </div>
                </div>

                <input class="btn btn-primary mb-4" type="submit" value="Save Product">
            {!! Form::close() !!}   
        </div>
    </div>
@endsection