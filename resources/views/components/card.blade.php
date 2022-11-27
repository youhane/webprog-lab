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
        <p class="product-card-desc">{{ Str::limit($prod->description, 100) }}</p>
        <p class="product-card-price">Rp. {{ number_format($prod->price, 2) }}</p>
        <div class="product-card-buttons">
            <a class="product-card-view-more" href="/products/{{ $prod->slug }}">View More...</a>
            @if (Auth::check() && auth()->user()->is_admin == 1)
                <div>
                    <a class="product-card-edit" href="/products/{{ $prod->slug }}/edit">Edit</a>
                    <form class="product-card-delete" action="/products/delete/{{ $prod->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
