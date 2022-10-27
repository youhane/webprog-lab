@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Cart</h1>
            @foreach ($transactionDetails as $product)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('storage/' . $product->product->image) }}" alt="..."
                                    class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h3>{{ $product->product->name }}</h3>
                                <p>{{ $product->product->description }}</p>
                                <p>Quantity: {{ $product->quantity }}</p>
                                <p>Price: Rp. {{ number_format($product->product->price, 2) }}</p>
                            </div>
                            <div class="col-md-3">
                                <form action="/cart" method="POST">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
