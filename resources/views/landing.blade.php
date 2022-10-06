@extends('layouts.base')
@section('content')
    <h1>Ini dashboard</h1>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2 text-white">
                            <a href="#" class="text-white">
                                {{ $product->category->name }}
                            </a>
                        </div>
                        <img src="https://source.unsplash.com/1200x400?{{ $product->category->name }}" class="card-img-top"
                            alt="{{ $product->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->detail }}</p>
                            <p class="card-text">{{ $product->category->name }}</p>
                            <a href="#" class="btn btn-primary">Read More...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
