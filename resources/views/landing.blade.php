@extends('layouts.base')
@section('content')
    <section class="header">
        <div class="container">
            <div class="row d-flex flex-column flex-lg-row align-items-center text-center text-sm-start py-5">
                <div class="col col-sm-6">
                    <h1>Give Yourself the<br />Item You Deserve!</h1>
                    <p>
                        Success isn't always about greatness. It's about happiness.
                        <br />Happiness makes the world beautiful.
                    </p>
                    <a href="#categories" class="btn btn-primary">Explore Now &#8594;</a>
                </div>
                <div class="col col-sm-6">
                    <img src="Assets/image1.png" alt="" class="w-100" />
                </div>
            </div>
        </div>
    </section>

    <section id="categories">
        <h1 class="title"><a class="text-black text-decoration-none" href="/categories">Categories</a></h1>
        <div class="container-fluid w-75">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col col-md-3 col-lg-4 align-items-center justify-content-center my-1">
                        <a href="/products?category={{ $category->name }}">
                            <p class="text-decoration-none text-black fs-4">{{ $category->name }}</p>
                            <img src="{{ $category->image }}" alt="{{ $category->name }}" class="w-100" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="products">
        <h2 class="title">Featured Products</h2>
        <div class="container-fluid w-75">
            <div class="row">
                @foreach ($products->take(4) as $product)
                    <div class="col col-md-6 col-lg-3 align-items-center justify-content-center my-1">
                        <div class="card">
                            <a href="/products?category={{ $product->category->name }}">
                                @if ($product->image == null)
                                    <img src="{{ asset('storage/product-images/no-image.png') }}" class="card-img-top"
                                        alt="...">
                                @else
                                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                        alt="...">
                                @endif
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h6 class="card-category">
                                    <a
                                        href="/products?category={{ $product->category->name }}">{{ $product->category->name }}</a>
                                </h6>
                                <p class="card-desc">{{ str_split($product->description, 75)[0] }}...</p>
                                <p class="card-price">Rp. {{ number_format($product->price, 2) }}</p>
                                <a href="/products/{{ $product->slug }}" class="btn btn-primary rounded-1">Read More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="container-fluid w-75">
            <div class="row">
                <div class="d-flex justify-content-end">
                    {{ $products->links() }}
                </div>
                @foreach ($products as $product)
                    <div class="col col-md-6 col-lg-3 align-items-center justify-content-center my-1">
                        <div class="card">
                            <a href="/products?category={{ $product->category->name }}">
                                @if ($product->image == null)
                                    <img src="{{ asset('storage/product-images/no-image.png') }}" class="card-img-top"
                                        alt="...">
                                @else
                                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                        alt="...">
                                @endif
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h6 class="card-category">
                                    <a
                                        href="/products?category={{ $product->category->name }}">{{ $product->category->name }}</a>
                                </h6>
                                <p class="card-desc">{{ str_split($product->description, 75)[0] }}...</p>
                                <p class="card-price">Rp. {{ number_format($product->price, 2) }}</p>
                                <a href="/products/{{ $product->slug }}" class="btn btn-primary rounded-1">Read
                                    More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col col-lg-12 d-flex justify-content-end my-4">
                    <a href="/products" class="btn btn-primary">View All Products &#8594;</a>
                </div>
            </div>
    </section>
@endsection
