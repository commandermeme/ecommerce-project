@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">New Coupon</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label" for="code"><strong>Code</strong></label>
                                <div class="controls">
                                    <div class="input-group">
                                        <input class="form-control" id="code" size="16" type="text" placeholder="Coupon Code">
                                        <span class="input-group-append">
                                            <button class="btn btn-primary" type="button">Generate</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="discount"><strong>Discount</strong></label>
                                <input id="range_03" type="text" name="discount">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="products"><strong>Products</strong></label>
                                <select name="" id="products" class="form-control">
                                    <option value="">Select products</option>
                                    <option value="">Ambot</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="max"><strong>Max Number of Users</strong></label>
                                <input class="form-control" type="text" id="max" placeholder="Leave blank for unlimited">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input class="btn btn-primary mb-4" type="submit" value="Save Coupon">
        </div>
    </div>
@endsection