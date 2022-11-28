<div class="product-card">
    <a href="/products/{{ $prod->slug }}">
        @include('components.image', ['image' => $prod->image, 'alt' => $prod->name])
    </a>
    <div>
        <div class="product-card-title">
            <h5>{{ $prod->name }}</h5>
            <h6>
                <a href="/products?category={{ $prod->category->slug }}">{{ $prod->category->name }}</a>
            </h6>
        </div>
        @if (!isset($isCart))
            <p class="product-card-desc">{{ Str::limit($prod->description, 100) }}</p>
        @endif
        <p class="product-card-price">Rp. {{ number_format($prod->price, 2) }}</p>
        <p class="product-card-price product-price-total">Total Price <br> Rp. {{ number_format($prod->price * $product->quantity, 2) }}</p>
        @if (isset($isCart))
            <form class="cart-quantity" action="/cart" method="POST">
                @csrf
                <div class="product-card-quantity">
                    <button type="button" class="minus minusCart">-</button>
                    <input type="number" value="{{ $product->quantity }}" name="quantity" class="quantity quantityCart">
                    <button type="button" class="plus plusCart">+</button>
                </div>
                @error('quantity')
                    <div>{{ $message }}</div>
                @enderror
                <input type="hidden" name="product_id" value="{{ $prod->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <button class="update-quantity" type="submit">Update Value</button>
            </form>
        @endif
        <div class="product-card-buttons">
            @if (isset($isCart))
                <form action="/cart/delete" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>
            @else
                <a class="product-card-view-more" href="/products/{{ $prod->slug }}">View More...</a>
            @endif
            @if (Auth::check() && auth()->user()->is_admin == 1)
                <div>
                    <a class="product-card-edit" href="/products/{{ $prod->slug }}/edit">Edit</a>
                    <form action="/products/delete/{{ $prod->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="product-card-delete" type="submit">Delete</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
