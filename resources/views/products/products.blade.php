@extends('layouts.base')
@section('content')
    <section class="products">
        <div class="searchbar-products">
            @include('components.searchbar')
        </div>
        @if (count($products) < 1)
            <h3 class="no-products">No products found</h3>
        @else
            <div class="pagination">
                {{ $products->appends(request()->input())->links() }}
            </div>
            <div class="products-home">
                @foreach ($products as $prod)
                    @include('components.card')
                @endforeach
            </div>
        @endif
    </section>
@endsection
