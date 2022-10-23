@extends('layouts.base')
@section('content')
    <div class="container my-5">
        <div class="row">
            @include('components.searchbar')
            @foreach ($products as $product)
                <h2 class="my-5">
                    <a href="/products?category={{ $product[0]->category->name }}">
                        View All by {{ $product[0]->category->name }}
                    </a>
                </h2>
                @foreach ($product->take(4) as $prod)
                <div class="col col-md-6 col-lg-3 align-items-center justify-content-center my-1">
                    <div class="card">
                        <a href="/products?category={{ $prod->category->name }}">
                            <img src="https://source.unsplash.com/90x90?{{ $prod->category->name }}"
                                class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $prod->name }}</h5>
                            <h6 class="card-category">
                                <a href="/products?category={{ $prod->category->name }}">{{ $prod->category->name }}</a>
                            </h6>
                            <p class="card-desc">{{ str_split($prod->description, 75)[0] }}...</p>
                            <p class="card-price">Rp. {{ number_format($prod->price, 2) }}</p>
                            <a href="/products/{{ $prod->slug }}" class="btn btn-primary rounded-1">Read More...</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
