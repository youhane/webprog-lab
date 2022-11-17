@extends('layouts.base')
@section('content')
    <section class="product-page">
        <div class="product-page-image">
            @include('components.image', ['image' => $product->image, 'alt' => $product->name])
        </div>
        <form action="/cart" method="POST">
            @csrf
            <div class="product-card-title page">
                <h5>{{ $product->name }}</h5>
                <h6>{{ $product->category->name }}</h6>
            </div>
            <p class="product-page-desc">{{ $product->description }}</p>
            <div class="product-page-amount">
                @if (Auth::check())
                    <div class="product-page-quantity">
                        <button id="plus" class="plus">+</button>
                        <input type="number" value="1" name="quantity" id="quantity" class="quantity">
                        <button id="minus" class="minus">-</button>
                    </div>
                    @error('quantity')
                        <div>{{ $message }}</div>
                    @enderror
                @endif
                <h5>Rp. {{ number_format($product->price, 2) }}</h5>
            </div>
            <div class="product-page-btns">
                @if (Auth::guest())
                    <a href="/register" class="register">Register</a>
                    <a href="/login" class="login">Login</a>
                @elseif (Auth::check())
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <button type="submit">Add to Cart</button>
                @endif
            </div>
        </form>
    </section>

    <section>
        <h2>Related Products</h2>
        <p><a href="/products">View More</a></p>
        <div class="products-home">
            @foreach ($related_products->take(4) as $products)
                @include('components.card', ['prod' => $products])
            @endforeach
        </div>
    </section>
@endsection
