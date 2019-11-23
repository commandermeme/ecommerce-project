@extends('layouts.app')

@include('includes.client_navbar')

@section('content')

<div class="container">
	<div class="row">
	  <div class="col-md-6 offset-md-3">
	    <div class="card" style="margin:50px 0">
        <div class="card-header"><h5>Jollibee Cuopons Sale 2019</h5></div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                        <dd class="col">Stock: 10</dd>
                        <div class="def-number-input number-input safari_only mr-5">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                          <input class="quantity" min="0" name="quantity" value="0" type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                        <dd class="col">$10.89 USD</dd>
                        <label class="checkbox"><input type="checkbox" />
                        <span class="success"></span></label>
                      </dl>
            
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 20</dd>
                  <div class="def-number-input number-input safari_only mr-5">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="0" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                  <dd class="col">$20.89 USD</dd>
                  <label class="checkbox"><input type="checkbox" />
                    <span class="success"></span></label>
                </dl>
              
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 40</dd>
                  <div class="def-number-input number-input safari_only mr-5">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="0" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                  <dd class="col">$30.89 USD</dd>
                  <label class="checkbox"><input type="checkbox" />
                    <span class="success"></span></label>
                </dl>
               
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 85</dd>
                  <div class="def-number-input number-input safari_only mr-5">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="0" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                  <dd class="col">$10.89 USD</dd>
                  <label class="checkbox"><input type="checkbox" />
                    <span class="success"></span></label>
                </dl>
               
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 160</dd>
                  <div class="def-number-input number-input safari_only mr-5">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="0" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                  <dd class="col">$11.89 USD</dd>
                  <label class="checkbox"><input type="checkbox" />
                    <span class="success"></span></label>
                </dl>
              </li>
            </ul>
            <div>
              <button type="button" class="btn btn-primary btn-lg btn-block">Purchase</button>
            </div>
            </div> 

           
            </div>
            
            </div>
      
          </div>

@endsection