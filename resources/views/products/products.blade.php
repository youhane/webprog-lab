@extends('layouts.base')
@section('content')
    <div class="container mb-5">
        <div class="row">
            @include('components.searchbar')
            {{ $products->appends(request()->input())->links() }}
            @foreach ($products as $prod)
                <div class="col-9 col-md-6 col-lg-3 align-items-center justify-content-center mx-auto my-1">
                    @include('components.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
