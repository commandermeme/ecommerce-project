@extends('layouts.app')

@include('includes.client_navbar')

@section('content')



{{-- <header class="bg-primary text-left py-3 mb-4">
        <div class="container">
          <h3 class="font-weight-light text-white ">Greencity</h3>
        </div>
      </header>


      <!-- Table  -->
<table class="table table-bordered">
        <!-- Table head -->
        <thead>
          <tr>
            <th>
              <!-- Material unchecked -->
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tableMaterialCheck1">
                <label class="form-check-label" for="tableMaterialCheck1">Check 1</label>
              </div>
            </th>
            <th>Lorem</th>
            <th>Ipsum</th>
            <th>Dolor</th>
          </tr>
        </thead>
        <!-- Table head -->
      
        <!-- Table body -->
        <tbody>
          <tr>
            <th scope="row">
              <!-- Material unchecked -->
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
                <label class="form-check-label" for="tableMaterialCheck2">Check 2</label>
              </div>
            </th>
            <td>Cell 1</td>
            <td>Cell 2</td>
            <td>Cell 3</td>
          </tr>
          <tr>
            <th scope="row">
              <!-- Material unchecked -->
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tableMaterialCheck3">
                <label class="form-check-label" for="tableMaterialCheck3">Check 3</label>
              </div>
            </th>
            <td>Cell 4</td>
            <td>Cell 5</td>
            <td>Cell 6</td>
          </tr>
          <tr>
            <th scope="row">
              <!-- Material unchecked -->
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tableMaterialCheck4">
                <label class="form-check-label" for="tableMaterialCheck4">Check 4</label>
              </div>
            </th>
            <td>Cell 7</td>
            <td>Cell 8</td>
            <td>Cell 9</td>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table  --> --}}



 {{-- <header class="bg-primary text-left py-3 mb-0">
    <div class="container">
      <h3 class="font-weight-light text-white ">Greencity</h3>
    </div>
</header> --}}

<div class="container">
	<div class="row">
	  <div class="col-md-6 offset-md-3">
	    <div class="card" style="margin:50px 0">
        <div class="card-header"><h5>Jollibee Cuopons Sale 2019</h5></div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                        <dd class="col">Stock: 10</dd>
                        <dd class="col">$10.89 USD</dd>
                        <label class="checkbox"><input type="checkbox" />
                        <span class="success"></span></label>
                      </dl>
            
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 20</dd>
                  <dd class="col">$20.89 USD</dd>
                  <label class="checkbox"><input type="checkbox" />
                    <span class="success"></span></label>
                </dl>
              
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 40</dd>
                  <dd class="col">$30.89 USD</dd>
                  <label class="checkbox"><input type="checkbox" />
                    <span class="success"></span></label>
                </dl>
               
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 85</dd>
                  <dd class="col">$10.89 USD</dd>
                  <label class="checkbox"><input type="checkbox" />
                    <span class="success"></span></label>
                </dl>
               
              </li>
              <li class="list-group-item">
                <dl class="row  d-flex justify-content-between align-items-center">
                  <dd class="col">Stock: 160</dd>
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