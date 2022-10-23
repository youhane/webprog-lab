@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            @include('components.searchbar')

            @foreach ($products as $product)
                {{-- Has Search --}}
                @if ($hasSearch == true)
                    <div class="col-6 mb-3">
                        <div class="card">
                            <div class="position-absolute bg-dark px-3 py-2 text-white">
                                <a href="/products?category={{ $product->category->slug }}" class="text-white">
                                    {{ $product->category->name }}
                                </a>
                            </div>
                            <img src="https://source.unsplash.com/1200x400?{{ $product->category->name }}"
                                class="card-img-top" alt="{{ $product->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="/products?category={{ $product->category->slug }}"
                                    class="card-text d-block">{{ $product->category->name }}</a>
                                <a href="/products/{{ $product->slug }}" class="btn btn-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                {{-- Not Search --}}
                @else
                    <h1>{{ $product[0]->category->name }}</h1>
                    @foreach ($product as $prod)
                        <div class="col-6 mb-3">
                            <div class="card">
                                <div class="position-absolute bg-dark px-3 py-2 text-white">
                                    <a href="/products?category={{ $prod->category->slug }}" class="text-white">
                                        {{ $prod->category->name }}
                                    </a>
                                </div>
                                <img src="https://source.unsplash.com/1200x400?{{ $prod->category->name }}"
                                    class="card-img-top" alt="{{ $prod->category->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $prod->name }}</h5>
                                    <p class="card-text">{{ $prod->description }}</p>
                                    <a href="/products?category={{ $prod->category->slug }}"
                                        class="card-text d-block">{{ $prod->category->name }}</a>
                                    <a href="/products/{{ $prod->slug }}" class="btn btn-primary">Read More...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>
@endsection
