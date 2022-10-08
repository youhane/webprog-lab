@extends('layouts.base')
@section('content')
    <h1>Ini dashboard</h1>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <h1>{{ $product[0]->category->name }}</h1>
                @foreach ($product as $prod)
                    <div class="col-6 mb-3">
                        <div class="card">
                            <div class="position-absolute bg-dark px-3 py-2 text-white">
                                <a href="#" class="text-white">
                                    {{ $prod->category->name }}
                                </a>
                            </div>
                            <img src="https://source.unsplash.com/1200x400?{{ $prod->category->name }}" class="card-img-top"
                                alt="{{ $prod->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $prod->name }}</h5>
                                <p class="card-text">{{ $prod->description }}</p>
                                <p class="card-text">{{ $prod->category->name }}</p>
                                <a href="#" class="btn btn-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
