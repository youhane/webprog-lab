@extends('layouts.base')
@section('content')
    <section class="container my-0 my-lg-5">
        <div class="d-flex flex-column align-items-center pt-5 pt-lg-0 pb-5">
            <div class="row d-flex flex-column-reverse flex-lg-row align-items-center gap-2">
                <div class="col col-9 col-lg text-center text-lg-start gap-2">
                    <img src="/assets/logo-big.png" alt="barbatos-shop" class="hero-logo" >
                    <p class="fst-italic text-muted subtitle">
                        We always (try to) provide the best products for you.
                    </p>
                    @include('components.searchbar', ['hero' => true])
                </div>
                <div class="col col-9 col-lg d-flex align-items-center justify-content-center">
                    <img src="assets/hero.png" alt="logo" class="hero" />
                </div>
            </div>
            <a href="#products" class="jump text-black fs-2 mt-3 mt-lg-5">
                <i class="bi bi-arrow-down"></i>
            </a>
        </div>
    </section>

    <section class="container py-5" id="products">
        <div class="row">
            @include('components.searchbar')
            @foreach ($products as $product)
                <h3>
                    <a href="/products?category={{ $product[0]->category->slug }}" class="text-white text-decoration-none badge bg-primary mt-5">
                        View All by {{ $product[0]->category->name }}
                    </a>
                </h3>
                @foreach ($product->take(4) as $prod)
                    <div class="col col-md-6 col-lg-3 align-items-center justify-content-center mt-1 mb-5">
                        @include('components.card')
                    </div>
                @endforeach
            @endforeach
        </div>
    </section>
@endsection
