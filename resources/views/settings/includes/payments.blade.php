@extends('settings.index')

@section('extra-settings')
    <form action="">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="lead">Payments</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="paypal"><strong>Paypal Email</strong></label>
                    <input type="text" class="form-control" id="paypal" placeholder="Paypal Email">
                </div>
                <div class="form-group">
                    <label for="coinbase"><strong>Coinbase API Key</strong></label>
                    <input type="text" class="form-control" placeholder="Coinbase API Key" id="coinbase">
                </div>
            </div>
        </div>
        <input type="submit" value="Save Setting" class="btn btn-primary">
    </form>
@endsection


