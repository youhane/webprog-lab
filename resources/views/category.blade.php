@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Category</h1>
            @foreach ($categories as $category)
            <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" alt="">
                <a href="/products?category={{ $category->name }}">
                    <h1>{{ $category->name }}</h1>
                </a>
            @endforeach
        </div>
    </div>
@endsection
