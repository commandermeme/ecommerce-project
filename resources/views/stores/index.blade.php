@extends('layouts.app')

@include('includes.client_navbar')

@section('content')

{{-- <header class="bg-primary text-left py-3 mb-4">
        <div class="container">
          <h3 class="font-weight-light text-white ">Greencity</h3>
        </div>
      </header> --}}
      
      
      <!-- Page Content -->
    
      {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="hovereffect">
              <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                  <div class="overlay">
                      <h2>Effect 10</h2>
                     
                  </div>
          </div>
      </div> --}}

      <div class="container">
        <div class="row mt-5">
          <!-- Team Member 1 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <div class="hovereffect">
                  <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
                  <div class="overlay">
                    <a href="{{ url('/stores/create') }}"> <button type="button" class="btn float-left btn-primary">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i> Buy </button></a>
                    
                  </div>
                </div>
              
              
              <div class="card-body ">
                <h6 class="card-title  mb-4">Jollibee Cuopons Sale  2019</h6>
                
                {{-- <div class="card-text text-black-50 d-inline">
                    <div class="float-left">
                        <h6>Stock: 4</h6>
                    </div> 

                    <div class="pull-right">
                      <h6 >$10.99USD</h6>
                    </div>
                </div> --}}
                <div style="line-height:.5em;" >
                  <dl class="row  d-flex justify-content-between align-items-center">
                    <dd class="col">Stock: 15</dd>
                    <dd class="col">$10.89 USD</dd>
                  </dl>
                  <dl class="row d-flex justify-content-between align-items-center">
                    <dd class="col">Stock: 14</dd>
                    <dd class="col">$10.99 USD</dd>
                  </dl>
                  <dl class="row d-flex justify-content-between align-items-center">
                    <dd class="col">Stock: 128</dd>
                    <dd class="col">$15.12 USD</dd>
                  </dl>
                  <dl class="row d-flex justify-content-between align-items-center">
                    <dd class="col">Stock: 40</dd>
                    <dd class="col">$10.45 USD</dd>
                  </dl>
                </div>
             
              </div>
              
            </div>
          </div>
          
          <!-- Team Member 2 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
           
              <div class="hovereffect">
                  <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
                  <div class="overlay">
                      <button type="button" class="btn float-left btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Buy</button>
                    
                  </div>
                </div>
              <div class="card-body text-left">
                    <h6 class="card-title  mb-4">Golf Now Gift Card $50</h6>
                    <div style="line-height:.5em;" >
                            <dl class="row  d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 15</dd>
                              <dd class="col">$10.89 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 14</dd>
                              <dd class="col">$10.99 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 128</dd>
                              <dd class="col">$15.12 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 40</dd>
                              <dd class="col">$10.45 USD</dd>
                            </dl>
                          </div>
                  </div>
            </div>
          </div>
          <!-- Team Member 3 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
             
              <div class="hovereffect">
                  <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
                  <div class="overlay">
                      <button type="button" class="btn float-left btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Buy</button>
                    
                  </div>
                </div>
              <div class="card-body text-left">
                    <h6 class="card-title  mb-4">Jamba Gift Card $20</h6>
                    <div style="line-height:.5em;" >
                            <dl class="row  d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 15</dd>
                              <dd class="col">$10.89 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 14</dd>
                              <dd class="col">$10.99 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 128</dd>
                              <dd class="col">$15.12 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 40</dd>
                              <dd class="col">$10.45 USD</dd>
                            </dl>
                          </div>
                  </div>
            </div>
          </div>
          <!-- Team Member 4 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
              
              <div class="hovereffect">
                  <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
                  <div class="overlay">
                      <button type="button" class="btn float-left btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Buy</button>
                    
                  </div>
                </div>
              <div class="card-body text-left">
                    <h6 class="card-title  mb-4"> Rainforest SPA Gift Card $100</h6>
                    <div style="line-height:.5em;" >
                            <dl class="row  d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 15</dd>
                              <dd class="col">$10.89 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 14</dd>
                              <dd class="col">$10.99 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 128</dd>
                              <dd class="col">$15.12 USD</dd>
                            </dl>
                            <dl class="row d-flex justify-content-between align-items-center">
                              <dd class="col">Stock: 40</dd>
                              <dd class="col">$10.45 USD</dd>
                            </dl>
                          </div>
                  </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      
      </div>
      <!-- /.container -->




            <!-- /.row -->

  @endsection

