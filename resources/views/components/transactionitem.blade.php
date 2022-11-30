<div class="transaction-item">
    <div class="transaction-item-right">
        <div class="transaction-item-image">
            @include('components.image', [
                'image' => $item->product->image,
                'alt' => $item->product->name,
                ])
                </div>
        <div class="transaction-item-title">
            <h5>{{ $item->product->name }}</h5>
            <h6>{{ $item->product->category->name }}</h6>
        </div>
    </div>
    <div class="transaction-item-left">
        <div class="transaction-item-price">
            <h6>Quantity x Price</h6>
            <h5>{{ $item->quantity }} x Rp. {{ number_format($item->product->price, 2) }}</h5>
        </div>
        <div class="transaction-item-total">
            <h6>Total Price</h6>
            <h5>Rp. {{ number_format($item->product->price * $item->quantity, 2) }}</h5>
        </div>
    </div>
</div>
