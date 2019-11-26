@extends('layouts.app')

@include('includes.client_navbar')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card" style="margin:50px 0">
					<div class="card-header"><h5>{{ $product->title }}</h5></div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<dl class="row  d-flex justify-content-between align-items-center">
								<dd class="col"><strong>Stock:</strong> {{ $stock->stock }}</dd>
								<div class="def-number-input number-input safari_only mr-5">
									<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
									<input class="quantity" min="1" max="{{ $stock->stock }}" name="quantity" value="1" type="number">
									<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
								</div>
							<dd class="col">{{ $stock->price .' '. $stock->currency }}</dd>
								<label class="checkbox"><input type="checkbox" />
									<span class="success"></span>
								</label>
							</dl>
						</li>
					</ul>
					<div>
						<button type="button" class="btn btn-primary btn-lg btn-block">Purchase</button>
					<p>{!! $product->description !!}</p>
					</div>
				</div> 
			</div>
		</div>
	</div>
@endsection