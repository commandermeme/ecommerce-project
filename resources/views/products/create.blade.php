@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadein">
            <a href="/products" class="btn btn-secondary mt-2"><i class="fa fa-arrow-left"></i> Go back</a>
            <h2 class="my-4">New Product</h2>
            {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                @csrf
                <div class="card">
                    <div class="card-header border-0">
                        <strong class="text-muted">General Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><strong>Title</strong></label>
                                    <input id="title" name="title" type="text" class="form-control" placeholder="Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for=""><strong>Description</strong></label>
                                    <textarea id="ck-editor" class="form-control" name="description" cols="30" rows="10" placeholder="Description"></textarea>
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

                {{-- <div class="card">
                    <div class="card-header border-0">
                        <strong class="text-muted">Product Stock</strong>
                    </div>
                    <div class="card-body">
                        <h5>Items</h5>
                        <div class="row">
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
                                        <tr>
                                            <td><input type="text" class="form-control" name="code[]"></td>
                                            <td><button class="btn btn-danger remove_item"><i class="fa fa-close"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

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
                                    <textarea class="form-control" name="notetocustomer" id="note" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-0">
                        <strong class="text-muted">Product Item</strong>
                        {{-- <a class="pull-right btn btn-danger text-light remove_denomination"><i class="fa fa-close"></i></a> --}}
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="form-group">
                            <label for=""><strong>Original Price</strong></label>
                            <div class="input-group">
                                <input name="original_price" type="number" class="form-control" placeholder="Original Price">
                                <div class="input-group-prepend">
                                    <select class="btn btn-primary" name="original_currency" id="">
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
                                {{-- <table class="table table-borderless">
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
                                </table> --}}
                                {{-- <table class="table table-borderless" id="dynamic_field">  
                                    <thead>
                                        <tr>
                                            <th>Serial/Code</th>
                                        </tr>
                                    </thead>
                                    <tr>  
                                        <td><input type="text" name="code[]"  class="form-control name_list" /></td>  
                                        <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>  
                                    </tr>  
                                </table>   --}}

                                <div class="form-group">
                                    <label for="code"><strong>Serial/Code</strong></label>
                                    <textarea class="form-control" name="code" id="code" cols="30" rows="8" placeholder="Utilize the stock separator set below to determine and control stock. By default, a new line will separate the stock."></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="separator"><strong>Separator</strong></label>
                                    <select name="separator" id="separator" class="form-control">
                                        <option value="line">New Line</option>
                                        <option value="comma">Comma</option>
                                    </select>
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
 