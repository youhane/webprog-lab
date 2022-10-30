@extends('layouts.base')
@section('content')
    <section class="container my-0 my-lg-5">
        <div class="d-flex flex-column align-items-center pt-5 pt-lg-0 pb-5">
            <div class="row d-flex flex-column-reverse flex-lg-row align-items-center">
                <div class="col col-9 col-lg text-center text-lg-start">
                    <img src="/assets/logo-big.png" alt="barbatos-shop">
                    <p class="fst-italic text-muted subtitle">
                        We always (try to) provide the best products for you.
                    </p>
                    <div class="mb-5 mt-4 mb-lg-0">
                        <form action="/products" method="GET">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if (request('name'))
                                <input type="hidden" name="name" value="{{ request('name') }}">
                            @endif
                            <div class="input-group d-flex">
                                <label for="search" class="text-muted">Find what you need here!</label>
                                <div class="d-flex border border-2 w-100 ps-3 rounded-5">
                                    <input type="text" class="form-control border-0 rounded-0" placeholder="Search" id="search" name="search" value="{{ request('search') }}">
                                    <button type="button" class="bg-white px-3 border-0"
                                        onclick="this.form.search.value = ''">
                                        <i class="bi bi-x"></i>
                                    </button>
                                    <button class="btn border-0 btn-primary rounded-pill d-flex align-items-center gap-2" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-9 col-lg d-flex align-items-center justify-content-center">
                    <img src="assets/logo.png" alt="logo" class="hero" />
                </div>
            </div>
            <a href="#products" class="jump text-black fs-2 mt-5">
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
