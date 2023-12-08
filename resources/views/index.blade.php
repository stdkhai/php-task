@extends('layouts.app')

@section('content')
<h1>Products</h1>
<label for="sort">Sort by:</label>
<select id="sort" onchange="window.location.href=this.value">
    <option value="" selected disabled hidden>Choose here</option>
    <option value="{{ url('/?sort=date') }}">Date</option>
    <option value="{{ url('/?sort=price') }}">Price</option>
</select>
<div class="row">
    @foreach($products as $product)
    <div id="{{$product->id}}" class="product-card col-md-4 mb-4">
        <div class="card text-center">
            <img class="card-img-top" src="{{ asset('images/' . $product->photo_url) }}" alt="{{ $product->name }}">
            <div class="card-body">
                <h2 class="card-title">{{ $product->name }}</h2>
                <p class="card-text">Price: ${{ $product->price }}</p>
                <button class="buy btn btn-primary">Buy</button>
            </div>
        </div>

    </div>

    @endforeach
</div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        var productCards = document.querySelectorAll('.product-card');

        productCards.forEach(card => {
            card.addEventListener('click', event => {
                if (!event.target.classList.contains('buy')) {
                    var productId = card.id;
                    window.location.href = '/products/' + productId;
                }
            });
        });

        var buyButtons = document.querySelectorAll('.buy');
        buyButtons.forEach(button => {
            button.addEventListener('click', () => {
                alert('Product added to cart. To show details click on the another part of card');
            });
        });
    });
</script>