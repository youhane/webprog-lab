@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->details }}</p>
        </div>
    </div>
@endsection
