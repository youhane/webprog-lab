@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Cart</h1>
            @foreach ($transaction->details as $product)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="/products/{{ $product->product->slug }}">
                                    <div>
                                        @if ($product->product->image == null)
                                            <img src="{{ asset('storage/product-images/no-image.png') }}" class="card-img-top"
                                                alt="...">
                                        @else
                                            <img src="{{ asset('storage/' . $product->product->image) }}"
                                                class="card-img-top" alt="...">
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <h3>{{ $product->product->name }}</h3>
                                <p>{{ $product->product->description }}</p>
                                <form action="/cart/quantity" method="POST">
                                    @csrf
                                    @method('put')
                                    <label for="quantity">Quantity</label>
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                                        <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                        <input type="number" class="form-control" name="quantity"
                                            value="{{ $product->quantity }}">
                                        <button type="submit" class="btn btn-primary">Update Quantity</button>
                                    </div>
                                </form>
                                <p>Price: Rp. {{ number_format($product->product->price, 2) }}</p>
                                <p>Total: Rp. {{ number_format($product->product->price * $product->quantity, 2) }}</p>
                            </div>
                            <div class="col-md-3">
                                <form action="/cart/delete" method="POST">
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
            <form action="/cart/pay" method="POST">
                @csrf
                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Total: Rp. {{ number_format($transaction->total_price, 2) }}</h3>
                    <button type="submit" class="btn btn-primary">Pay</button>
                </div>
            </form>
        </div>
    </div>
@endsection
