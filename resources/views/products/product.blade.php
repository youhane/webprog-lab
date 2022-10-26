@extends('layouts.base')
@section('content')
    <section class="container-fluid px-5">
        <div class="d-flex flex-column align-items-center justify-content-center flex-lg-row gap-5">
            <div>
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
                <div class="my-3">
                    <h3>Product Details</h3>
                    <p>{{ $product->description }}</p>
                </div>
                @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'register' ? 'active' : '' }}" href="/register"><i
                                class="bi bi-plus-circle"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                class="bi bi-door-open"></i> Login</a>
                    </li>
                @elseif (Auth::check())
                    @if (auth()->user()->is_admin == 0)
                        <form action="/cart" method="POST" class="d-flex justify-content-between w-50">
                            @csrf
                            <input class="d-none" type="text" name="product_id" id="product_id"
                                value="{{ $product->id }}">
                            <div class="form-group d-flex flex-column mr-2">
                                <label for="quantity">Quantity</label>
                                <input type="number" value="1" name="quantity" id="quantity" />
                            </div>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    @elseif (auth()->user()->is_admin == 1)
                        <div class="d-flex">
                            <a href="/products/{{ $product->slug }}/edit" class="btn btn-primary">Edit
                                Product</a>
                            <form action="/products/delete/{{ $product->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </section>

    <section class="container-fluid px-5">
        <div class="">
            <div class="row">
                <h2>Related Products</h2>
                <p><a href="/products" class="text-decoration-none text-black">View More</a></p>
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
