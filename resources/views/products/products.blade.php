@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Products by Category: {{ $products[0]->category->name }}</h1>
            @foreach ($products as $product)
                <h1>{{ $product->name }}</h1>
                <p class="card-text">{{ $product->description }}</p>
            @endforeach
        </div>
    </div>
@endsection
