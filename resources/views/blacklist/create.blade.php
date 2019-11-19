@extends('layouts.user_app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">New Blacklist</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="products"><strong>Type</strong></label>
                                <select name="" id="products" class="form-control">
                                    <option value="">Email</option>
                                    <option value="">IP Address</option>
                                    <option value="">Country Code</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="max"><strong>Blocked Data</strong></label>
                                <input class="form-control" type="text" id="max" placeholder="Blocked Data">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="max"><strong>Note</strong></label>
                                <input class="form-control" type="text" id="max" placeholder="Note">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input class="btn btn-primary mb-4" type="submit" value="Save Blacklist">
        </div>
    </div>
@endsection