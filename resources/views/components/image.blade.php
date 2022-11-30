@if ($image == null)
    <img src="{{ asset('storage/product-images/no-image.png') }}" alt="{{ $alt }}">
@else
    <img src="{{ asset('storage/' . $image) }}" alt="{{ $alt }}">
@endif
