@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Categories</h1>
                @foreach ($categories as $category)
                    <div class="card w-25">
                        <img src="{{ $category->image }}" alt="">
                        <a href="/products?category={{ $category->name }}">
                            <h2>{{ $category->name }}</h2>
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
@endsection
