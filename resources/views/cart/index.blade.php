@extends('layouts.app')

@include('includes.client_navbar')
@section('content')
    <h1>Shopping Cart</h1>
    <div class="row mt-5 ml-5 mr-5">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header"><b>Package 1 of 1</b> </div>
                <div class="card-body">
                  <form class="form-horizontal" action="" method="post">
                    @if (Session::has('cart'))
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
                                    @foreach ($stocks as $stock)
                                      <tr>
                                        
                                          <td>{{ $stock['deno_name'] }}</td>
                                          <td>{{ $stock['price'] }}</td>
                                          <td>2</td>
                                          <td>200</td>                             
                                          <td><button type="button" name="add" id="add" class="btn btn-danger">Remove</button></td> 
                                        
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
                  <button class="btn btn-lg btn-primary" type="submit">Continue Shopping</button>
               
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
                            <p>{{ $totalPrice }}</p>
                        </div>
                    </div>
                    
                  </form>
                </div>
                <div class="card-footer ">
                  <button class="btn btn-lg btn-primary col-md-12" type="submit">Place Order</button>
                 
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