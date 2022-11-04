@if ($image == null)
    <img src="{{ asset('storage/product-images/no-image.png') }}" class="product-img" alt="{{ $alt }}">
@else
    @if (substr($image, 0, 4) == 'http')
        <img src="{{ $image }}" class="product-img" alt="{{ $alt }}">
    @else
        <img src="{{ asset('storage/' . $image) }}" class="product-img" alt="{{ $alt }}">
    @endif
@endif
