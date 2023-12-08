@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/' . $product->photo_url) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>{{ $product->name }}</h1>
                <p class="lead">Price: ${{ $product->price }}</p>
                <p>{{ $product->description }}</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
@endsection
