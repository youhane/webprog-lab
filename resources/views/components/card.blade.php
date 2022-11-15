<div class="product-card">
    <a href="/products?category={{ $prod->category->name }}">
        @include('components.image', ['image' => $prod->image, 'alt' => $prod->name])
    </a>
    <div>
        <div>
            <h5>{{ $prod->name }}</h5>
            <h6>
                <a href="/products?category={{ $prod->category->slug }}">{{ $prod->category->name }}</a>
            </h6>
        </div>
        <p>Rp. {{ number_format($prod->price, 2) }}</p>
        <div>
            <a href="/products/{{ $prod->slug }}">View More...</a>
            @if (Auth::check() && auth()->user()->is_admin == 1)
                <a href="/products/{{ $prod->slug }}/edit">Edit</a>
                <form action="/products/delete/{{ $prod->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            @endif
        </div>
    </div>
</div>
