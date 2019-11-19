@extends('layouts.app')

@include('includes.navbar')
@section('content')
    <h1>Pricing</h1>
    <p>Project with Jaymar, Reymar, Sir Myrth and Sir Cris.</p>
    <h3>Price List</h3>
    
    @if (count($pricelist) > 0)
        <ul>
            @foreach ($pricelist as $price)
            <li>{{ $price }}</li>
            @endforeach
        </ul>
    @endif
@endsection
