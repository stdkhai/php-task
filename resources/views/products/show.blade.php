@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <img src="{{ asset('images/' . $product->photo_url) }}" alt="{{ $product->name }}" width="200">
    <p>Description: {{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
@endsection
