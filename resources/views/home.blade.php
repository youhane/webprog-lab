@extends('layouts.base')
@section('content')
    {{-- Hero --}}
    <section>
        <div class="hero-top">
            <div class="left">
                <img src="/assets/logo-big.png" alt="barbatos-shop" class="hero-logo" />
                @include('components.searchbar')
            </div>
            <div class="right">
                <img src="assets/hero.png" alt="barbatos-shop" class="hero-img" />
            </div>
        </div>
        <a href="#products" class="down-arrow">
            <i class="fa-solid fa-lg fa-arrow-down-long"></i>
        </a>
    </section>

    {{-- Products --}}
    <section id="products">
        <div class="searchbar-container">
            @include('components.searchbar')
        </div>
        @foreach ($products as $product)
            <h3 class="category-title">
                <a href="/products?category={{ $product[0]->category->slug }}">
                    View All by {{ $product[0]->category->name }}
                </a>
            </h3>
            <div>
                @foreach ($product->take(4) as $prod)
                    @include('components.card')
                @endforeach
            </div>
        @endforeach
    </section>
@endsection
