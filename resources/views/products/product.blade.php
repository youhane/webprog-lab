@extends('layouts.base')
@section('content')
    <section class="container-fluid px-5">
        <div class="d-flex flex-column flex-lg-row gap-5">
            <div class="w-100 w-lg-50">
                @if ($product->image == null)
                    <img src="{{ asset('storage/product-images/no-image.png') }}" class="card-img-top" alt="...">
                @else
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="...">
                @endif
            </div>
            <div class="d-flex flex-column justify-content-between align-items-start">
                <p>{{ $product->category->name }}</p>
                <h1>{{ $product->name }}</h1>
                <h4>Rp. {{ number_format($product->price, 2) }}</h4>
                <label for="quantity">Quantity</label>
                <input type="number" value="1" name="quantity" id="quantity" />
                <h3>Product Details</h3>
                <p>{{ $product->description }}</p>
                <button class="btn btn-primary">
                    <a href="" class="btn">Add to Cart</a>
                </button>
            </div>
        </div>
    </section>

    <section class="container-fluid px-5">
        <div class="">
            <div class="row">
                <h2>Related Products</h2>
                <p>View More</p>
            </div>
        </div>
        <div class="">
            <div class="row">
                @foreach ($related_products as $products)
                    <div class="col col-md-6 col-lg-3 align-items-center justify-content-center my-1">
                        <div class="card">
                            <a href="/products?category={{ $products->category->name }}">
                                @if ($products->image == null)
                                    <img src="{{ asset('storage/product-images/no-image.png') }}" class="card-img-top"
                                        alt="...">
                                @else
                                    <img src="{{ asset('storage/' . $products->image) }}" class="card-img-top"
                                        alt="...">
                                @endif
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $products->name }}</h5>
                                <h6 class="card-category">
                                    <a
                                        href="/products?category={{ $products->category->name }}">{{ $products->category->name }}</a>
                                </h6>
                                <p class="card-desc">{{ str_split($products->description, 75)[0] }}...</p>
                                <p class="card-price">Rp. {{ number_format($products->price, 2) }}</p>
                                <a href="/products/{{ $products->slug }}" class="btn btn-primary rounded-1">Read
                                    More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
