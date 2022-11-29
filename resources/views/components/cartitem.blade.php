<div class="cart-item">
    <a href="/products/{{ $prod->slug }}">
        @include('components.image', ['image' => $prod->image, 'alt' => $prod->name])
    </a>
    <div>
        <div class="cart-item-right">
            <div class="cart-item-title">
                <h5>{{ $prod->name }}</h5>
                <h6>
                    <a href="/products?category={{ $prod->category->slug }}">{{ $prod->category->name }}</a>
                </h6>
            </div>
            <form class="cart-item-quantity" action="/cart" method="POST">
                @csrf
                <div class="cart-item-quantity-buttons">
                    <button type="button" class="minus minusCart">-</button>
                    <input type="number" value="{{ $product->quantity }}" name="quantity"
                        class="quantity quantityCart">
                    <button type="button" class="plus plusCart">+</button>
                </div>
                @error('quantity')
                    <div>{{ $message }}</div>
                @enderror
                <input type="hidden" name="product_id" value="{{ $prod->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <button class="update-quantity" type="submit">Update Value</button>
            </form>
        </div>
        <div class="cart-item-right">
            <div class="cart-prices">
                <p class="cart-item-price">Singular Price <br> Rp. {{ number_format($prod->price, 2) }}</p>
                <p class="cart-item-total">Total Price <br> Rp.
                    {{ number_format($prod->price * $product->quantity, 2) }}</p>
            </div>
            <div class="cart-item-buttons">
                <form action="/cart/delete" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>
            </div>
        </div>
    </div>
</div>
