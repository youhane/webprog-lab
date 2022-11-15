@extends('layouts.base')
@section('content')
    <div class="searchbar-container">
        @include('components.searchbar')
    </div>
    {{ $products->appends(request()->input())->links() }}
    @foreach ($products as $prod)
        <div>
            @include('components.card')
        </div>
    @endforeach
@endsection
