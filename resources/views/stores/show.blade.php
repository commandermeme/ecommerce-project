@extends('layouts.app')

@include('includes.client_navbar')

@section('content')
	{{-- <div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card mt-3">
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
												<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
												<input class="quantity" min="1" max="{{ $stock->stock }}" name="stock[]" value="1" type="number">
												<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
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
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="Purchase">
					{!! Form::close() !!}
				</div> 
			</div>
		</div>
	</div> --}}

	<div class="container">
		<div class="card mt-4">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="/storage/prod_images/{{ $prod_info->prod_image }}" class="card-img-top" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body mx-3">
						<h1 class="card-title">{{ $prod_info->title }}</h1>
						<p class="card-text">{!! $prod_info->description !!}</p>
						<p class="lead"><strong>Price:</strong> {{ $stock->price .' '. $stock->currency }}</p>
						<hr>
						<div class="row">
							<div class="col-md-3 mb-2">
								<h5 class="d-inline">Stock: <span class="badge badge-primary mb-1">{{ $stock->stock }}</span></h5>
								
							</div>
							<div class="col-md-5 mb-2">
								<div class="def-number-input number-input safari_only mr-5">
									<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
									<input class="quantity" min="1" max="{{ $stock->stock }}" name="stock[]" value="1" type="number">
									<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
								</div>
							</div>
							<div class="col-md-4 mb-2">
								<button class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
						<hr>
						<p class="lead"><strong>Total:</strong> </p>
					</div>
				</div> 
			</div>
		</div>
	</div>
@endsection