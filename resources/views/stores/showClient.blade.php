@extends('layouts.app')

@include('includes.client_navbar')

@section('content')
	{{-- <div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card" style="margin:50px 0">
                    <div class="card-header"><h5>{{ $product->title }}</h5></div>
                    {!! Form::open(['action' => 'StoresController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'signupForm']) !!}
                        @csrf

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                @foreach ($stocks as $stock)
                                    @if ($stock->prod_id == $product->id)
                                        <dl class="row  d-flex justify-content-between align-items-center">
                                            <dd class="col"><strong>Stock:</strong> {{ $stock->stock }}</dd>
                                            <div class="def-number-input number-input safari_only mr-5">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="1" max="{{ $stock->stock }}" name="stock" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                            <dd class="col">{{ $stock->price .' '. $stock->currency }}</dd>
                                            <label class="checkbox"><input type="checkbox" />
                                                <span class="success"></span>
                                            </label>
                                        </dl>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                        <div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Purchase">
                        </div>
                    {!! Form::close() !!}
				</div> 
			</div>
		</div>
    </div> --}}
    

    <div class="container my-5">
		<div class="card">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="/storage/prod_images/{{ $product->prod_image }}" class="card-img-top" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body mx-3">
						<h1 class="card-title">{{ $product->title }}</h1>
						<p class="card-text">{!! $product->description !!}</p>
						{{-- <hr>
						<div class="row">
							<div class="col-md-3 mb-2">
								<h5 class="d-inline">Stock: <span class="badge badge-primary mb-1">{{ $stock->stock }}</span></h5>
								
							</div>
							<div class="col-md-5 mb-2">
								<div class="def-number-input number-input safari_only mr-5">
									<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
									<input class="quantity" min="1" max="{{ $stock->stock }}" name="stock" value="1" type="number">
									<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
								</div>
							</div>
							<div class="col-md-4 mb-2">
								<a href="{{ route('cart.addToCart', ['id' => $stock->id]) }}" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
							</div>
						</div> --}}
					</div>
				</div> 
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<table class="table table-striped table-borderless datatable">
					<thead>
						<tr>
							<th>Item</th>
							<th>Original Price</th>
							<th>Price</th>
							<th>Stock Available</th>
							{{-- <th></th> --}}
							<th></th>
						</tr>
					</thead>
					<tbody>
							
						@foreach ($stocks as $stock)
							<tr>
								<td>{{ $product->title }}</td>
								<td class="lead"><del>{{ $stock->original_price .' '. $stock->original_currency }}</del></td>
								<td>{{ $stock->price .' '. $stock->currency }}</td>
								<td>{{ $stock->stock }}</td>
								{{-- <th>
									<div class="def-number-input number-input safari_only mr-5">
										<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
										<input class="quantity" min="1" max="{{ $stock->stock }}" name="stock" value="1" type="number">
										<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
									</div>
								</th> --}}
								<td>
									<a href="{{ route('cart.addToCart', ['id' => $stock->id]) }}" class="btn btn-primary">
										<i class="fa fa-shopping-cart"></i> Add to Cart
									</a>
									{{-- <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</button> --}}
								</td>
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection