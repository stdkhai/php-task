<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Products</h1>
<label for="sort">Sort by:</label>
<select id="sort" onchange="window.location.href=this.value">
    <option value="" selected disabled hidden>Choose here</option>
    <option value="{{ url('/?sort=date') }}">Date</option>
    <option value="{{ url('/?sort=price') }}">Price</option>
</select>
@foreach($products as $product)
<div id="{{$product->id}}">
    <img src="{{ asset('images/' . $product->photo_url) }}" alt="{{ $product->name }}" width="100">
    <h2>{{ $product->name }}</h2>
    <p>Price: ${{ $product->price }}</p>
    <button class="buy">Buy</button>
</div>

@endforeach
@endsection