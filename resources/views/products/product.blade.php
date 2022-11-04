@extends('layouts.base')
@section('content')
    <section class="container py-3 p-lg-5 w-100 w-lg-75 my-3">
        <div class="card rounded-4">
            <div class="card-body d-flex flex-column align-items-center justify-content-center flex-lg-row gap-5">
                <div>
                    @include('components.image', ['image' => $product->image, 'alt' => $product->name])
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
                        <div class="d-flex justify-content-between gap-3">
                            <a href="/register" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Register</a>
                            <a href="/login" class="btn btn-primary"><i class="bi bi-door-open"></i> Login</a>
                        </div>
                    @elseif (Auth::check())
                        @if (auth()->user()->is_admin == 0)
                            <form action="/cart" method="POST"
                                class="d-flex flex-column flex-lg-row gap-3 mx-auto mx-md-0 justify-content-between w-md-50">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <div class="form-group d-flex flex-column mr-2">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" value="1" name="quantity" id="quantity" />
                                </div>
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                            @error('quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
        </div>
    </section>

    <section class="container px-lg-5">
        <div class="row">
            <h2>Related Products</h2>
            <p><a href="/products" class="text-decoration-none text-black">View More</a></p>
            @foreach ($related_products->take(4) as $products)
                <div class="col-12 col-md-6 col-lg-3 align-items-center justify-content-center mb-3">
                    @include('components.card', ['prod' => $products])
                </div>
            @endforeach
        </div>
    </section>
@endsection
