@extends('layouts.app')

@include('includes.client_navbar')

@section('content')
	<div class="container">
		<div class="row mt-5">
			@foreach ($products as $product)
				@foreach ($stocks as $stock)
					@if ($product->id == $stock->prod_id)
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-0 shadow">
								<div class="hovereffect">
									<img src="/storage/prod_images/{{ $product->prod_image }}" class="card-img-top" alt="...">
									<div class="overlay">
										<a href="{{ url('/stores/create') }}"> <button type="button" class="btn float-left btn-primary">
										<i class="fa fa-cart-plus" aria-hidden="true"></i> Buy </button></a>
									</div>
								</div>
		
								
								<div class="card-body ">
									<h6 class="card-title  mb-4">{{ $product->title }}</h6>
									<div style="line-height:.5em;" >
										<dl class="row  d-flex justify-content-between align-items-center">
											<dd class="col">{{ $stock->stock }}</dd>
											<dd class="col">{{ $product->price .' '. $product->currency}}</dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach
			@endforeach
		</div>
	</div>
@endsection
