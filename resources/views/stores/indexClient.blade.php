@extends('layouts.app')

@include('includes.client_navbar')

@section('content')
	{{-- <div class="container">
		<div class="row mt-5">
			@foreach ($products as $product)
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-0 shadow">
						<div class="hovereffect">
							<img src="/storage/prod_images/{{ $product->prod_image }}" class="card-img-top" alt="...">
							<div class="overlay">
								<a href="/user/{{$product->id}}/{{ $user_info->name }}"> <button type="button" class="btn float-left btn-primary">
								<i class="fa fa-cart-plus" aria-hidden="true"></i> Buy </button></a>
							</div>
						</div>

						
						<div class="card-body ">
							<h6 class="card-title  mb-4"><strong>{{ $product->title }}</strong></h6>
							<div>
								@foreach ($stocks as $stock)
								@if ($stock->prod_id == $product->id)
									
									<dl class="row  d-flex justify-content-between align-items-center">
										<dd class="col-sm-5"><strong>Stock:</strong> {{ $stock->stock }}</dd>
										<dd class="col-sm-7"><strong>Price:</strong> {{ $stock->price .' '. $stock->currency}}</dd>
									</dl>
								@endif
								@endforeach
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div> --}}

	<div class="container mt-5">
		<div class="row">
		@foreach ($products as $product)
		<div class="card-group col-lg-3 col-md-6 my-3">
			<div class="card">
				<img src="/storage/prod_images/{{ $product->prod_image }}" class="card-img-top" alt="...">

				<div class="card-body">
					<h3 class="card-title">{{ $product->title }}</h3>
				
					@foreach ($stocks as $stock)
						@if ($stock->prod_id == $product->id)
							<p class="card-text"> 
								<span class="lead">Price: <small><s>{{$stock->original_price .' '. $stock->original_currency }}</s></small> | <strong>{{ $stock->price .' '. $stock->currency }}</strong></span>
								<span class="badge badge-pill badge-primary">{{ $stock->stock }}</span> 
								{{-- <a href="stores/{{$stock->id}}" class="pull-right btn btn-outline-primary">
									<i class="fa fa-shopping-cart"></i>
								</a> --}}
							</p>
						@endif
					@endforeach
					<a href="/user/{{$product->id}}/{{ $user_info->name }}" class="btn btn-primary">
						<i class="fa fa-shopping-cart"></i> Buy
					</a>
				</div>
			</div>
		</div>	
		@endforeach
		</div>
	</div
@endsection
