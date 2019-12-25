@extends('layouts.app')

@include('includes.client_navbar')
@section('content')
    <h1>Shopping Cart</h1>
      <div class="row mt-5">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header"><b>Orders</b> </div>
                <div class="card-body">
                  <form class="form-horizontal" action="" method="post">
                    @if (Session::has('cart'))
                        <div class="card-body">
                            <table class="table table-borderless table-responsive-sm">
                                <thead>
                                    <tr>
                                      <th>Product</th>
                                      <th>Quantity</th>
                                      <th>Price</th>
                                      <th></th>
                                      <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stocks as $stock)
                                      <tr>
                                        
                                          <td>{{ $stock['deno_name'] }}</td>
                                          <td>{{ $stock['stock'] }}</td>   
                                          <td>{{ $stock['price'] .' '. $stock['currency'] }}</td>    
                                          <td>{{ $stock['item']['id'] }}</td>               
                                          <td>
                                            <a href="{{ route('cart.reduceByOne', ['id' => $stock['item']['id']]) }}" class="btn btn-outline-danger"><i class="fa fa-minus"></i></a>
                                            <a href="{{ route('cart.remove', ['id' => $stock['item']['id']]) }}" class="btn btn-outline-danger"><i class="fa fa-close"></i></a>
                                          </td> 
                                        
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                    <div class="card-body">
                        <table class="table table-borderless table-responsive-sm">
                            <thead>
                                <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <tr>
                                    
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>                             
                                      <td></td> 
                                    
                                  </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif
                        
                  </form>
                </div>
                <div class="card-footer">
                  <a href="{{ url('/stores') }}" class="btn btn-lg btn-primary" type="submit">Continue Shopping</a>
               
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header"> <b>Payment Form</b><small></small></div>
                <div class="card-body">
                  <form class="form-horizontal" action="" method="post">
                   <h5>Order Summary</h5>

                    {{-- <div class="row">
                        <div class="col-md-8 mt-2">
                            <p class="">Subtotal(2 Items)</p>
                        </div>
                        <div class="col-md-4 mt-2">
                            <p></p>
                        </div>
                    </div> --}}

                    <div class=" row mt-2">
                        <div class="col-md-8 mt-0">
                            <p class="">Total:</p>
                        </div>
                        
                        <div class="col-md-4 mt-0">
                            <p>{{ $totalPrice .' '. $currency}}</p>
                        </div>
                    </div>
                    
                  </form>
                </div>
                <div class="card-footer ">
                  <a href="{{ route('cart.info') }}" class="btn btn-lg btn-primary col-md-12">Place Order</a>
                 
                </div>
              </div>
            </div>
          </div>
          {{-- @if (Session::has('cart'))
              <div class="row">
                <div class="col">
                  <ul class="list-group">
                    @foreach ($stocks as $stock)
                        <li class="list-group-item">
                          <h6>{{ $stock['price'] }}</h6>
                        </li>
                    @endforeach
                  </ul>
                </div>
              </div>
          @endif --}}
@endsection