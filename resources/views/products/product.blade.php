@extends('layouts.base')
@section('content')
    <section>
        <div>
            <div>
                <div>
                    @include('components.image', ['image' => $product->image, 'alt' => $product->name])
                </div>
                <div>
                    <p>{{ $product->category->name }}</p>
                    <h1>{{ $product->name }}</h1>
                    <h4>Rp. {{ number_format($product->price, 2) }}</h4>
                    <div>
                        <h3>Product Details</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                    @if (Auth::guest())
                        <div>
                            <a href="/register"><i class="bi bi-plus-circle"></i> Register</a>
                            <a href="/login"><i class="bi bi-door-open"></i> Login</a>
                        </div>
                    @elseif (Auth::check())
                        @if (auth()->user()->is_admin == 0)
                            <form action="/cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <div>
                                    <label for="quantity">Quantity</label>
                                    <input type="number" value="1" name="quantity" id="quantity" />
                                </div>
                                <button type="submit">Add to Cart</button>
                            </form>
                            @error('quantity')
                                <div>{{ $message }}</div>
                            @enderror
                        @elseif (auth()->user()->is_admin == 1)
                            <div>
                                <a href="/products/{{ $product->slug }}/edit">Edit
                                    Product</a>
                                <form action="/products/delete/{{ $product->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h2>Related Products</h2>
            <p><a href="/products">View More</a></p>
            @foreach ($related_products->take(4) as $products)
                <div>
                    @include('components.card', ['prod' => $products])
                </div>
            @endforeach
        </div>
    </section>
@endsection
