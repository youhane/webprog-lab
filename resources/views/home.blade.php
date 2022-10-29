@extends('layouts.base')
@section('content')
    <section class="container my-5">
        <div class="d-flex flex-column align-items-center justify-content-center pb-5">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <h1 class="display-1">Barbatos Shop</h1>
                    <p class="fst-italic text-muted">Barbatos Shop an E-Commerce Website where we provide everything you need with an affordable price! Clothes, Beauty, Camera, Hobbies and more. <br> But not food, somehow.</p>
                </div>
                <div class="col">
                    <img src="assets/logo.png" alt="logo" />
                </div>
            </div>
            <a href="#products" class="jump text-black fs-2 mt-3">
                <i class="bi bi-arrow-down"></i>
            </a>
        </div>
    </section>

    <section class="container my-5" id="products">
        <div class="row">
            @include('components.searchbar')
            @foreach ($products as $product)
                <h3>
                    <a href="/products?category={{ $product[0]->category->name }}"
                        class="text-white text-decoration-none badge bg-primary mt-5">
                        View All by {{ $product[0]->category->name }}
                    </a>
                </h3>
                @foreach ($product->take(4) as $prod)
                    <div class="col col-md-6 col-lg-3 align-items-center justify-content-center mt-1 mb-5">
                        <div class="card">
                            <a href="/products?category={{ $prod->category->name }}">
                                @if ($prod->image == null)
                                    <img src="{{ asset('storage/product-images/no-image.png') }}" class="card-img-top"
                                        alt="...">
                                @else
                                    <img src="{{ asset('storage/' . $prod->image) }}" class="card-img-top" alt="...">
                                @endif
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $prod->name }}</h5>
                                <h6>
                                    <a href="/products?category={{ $prod->category->name }}"
                                        class="badge bg-primary text-white text-decoration-none">
                                        {{ $prod->category->name }}
                                    </a>
                                </h6>
                                <p>{{ str_split($prod->description, 75)[0] }}...</p>
                                <p class="card-price">Rp. {{ number_format($prod->price, 2) }}</p>
                                <div>
                                    <a href="/products/{{ $prod->slug }}" class="btn btn-primary rounded-1">
                                        Read More...
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </section>
@endsection
