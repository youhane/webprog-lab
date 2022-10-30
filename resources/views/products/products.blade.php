@extends('layouts.base')
@section('content')
    <div class="container mb-5">
        <div class="row">
            @include('components.searchbar')
            {{ $products->appends(request()->input())->links() }}
            @foreach ($products as $prod)
                <div class="col-9 col-md-6 col-lg-3 align-items-center justify-content-center mx-auto my-1">
                    <div class="card">
                        <a href="/products?category={{ $prod->category->name }}">
                            @if ($prod->image == null)
                                <img src="{{ asset('storage/product-images/no-image.png') }}" class="card-img-top"
                                    alt="...">
                            @else
                                @if (substr($prod->image, 0, 4) == 'http')
                                    <img src="{{ $prod->image }}" class="card-img-top">
                                @else
                                    <img src="{{ asset('storage/product-images/' . $prod->image) }}" class="card-img-top"
                                        alt="...">
                                @endif
                            @endif
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $prod->name }}</h5>
                            <h6 class="card-category">
                                <a class="badge bg-primary text-white text-decoration-none"
                                    href="/products?category={{ $prod->category->name }}">{{ $prod->category->name }}</a>
                            </h6>
                            <p class="card-desc">{{ str_split($prod->description, 75)[0] }}...</p>
                            <p class="card-price">Rp. {{ number_format($prod->price, 2) }}</p>
                            <div>
                                <a href="/products/{{ $prod->slug }}" class="btn btn-primary rounded-1">Read
                                    More...</a>
                                @if (Auth::check() && auth()->user()->is_admin == 1)
                                    <a href="/products/{{ $prod->slug }}/edit" class="btn btn-primary">Edit
                                        Product</a>
                                    <form action="/products/delete/{{ $prod->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
