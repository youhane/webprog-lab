@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $product->name }}</h1>
            <h3>{{ $product->category->name }}</h3>
            <h2>Price {{ $product->price }}</h2>
            <p>{{ $product->description }}</p>
        </div>
    </div>
@endsection
