@if ($image == null)
    <img src="{{ asset('storage/product-images/no-image.png') }}" alt="{{ $alt }}">
@else
    @if (substr($image, 0, 4) == 'http')
        <img src="{{ $image }}" alt="{{ $alt }}">
    @else
        <img src="{{ asset('storage/' . $image) }}" alt="{{ $alt }}">
    @endif
@endif
