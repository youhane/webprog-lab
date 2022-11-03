@extends('layouts.base')
@section('content')
    <section class="container py-5">
        @if (isset($transaction))
            <table class="table">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                @foreach ($transaction->details as $product)
                    <tr class="d-flex flex-column flex-lg-row">
                        <td>
                            <div>
                                <a href="/products/{{ $product->product->slug }}">
                                    <div>
                                        @if ($product->product->image == null)
                                            <img src="{{ asset('storage/product-images/no-image.png') }}" class="cart-img"
                                                alt="...">
                                        @else
                                            @if (substr($product->product->image, 0, 4) == 'http')
                                                <img src="{{ $product->product->image }}" class="cart-img">
                                            @else
                                                <img src="{{ asset('storage/product-images/' . $product->product->image) }}"
                                                    class="cart-img" alt="...">
                                            @endif
                                        @endif
                                    </div>
                                </a>
                                <div>
                                    <p>{{ $product->product->name }}</p>
                                    <small>Price: Rp. {{ number_format($product->product->price, 2) }}</small>
                                    <br />
                                    <form action="/cart/delete" method="POST">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                                        <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form action="/cart/quantity" method="POST">
                                @csrf
                                @method('put')
                                <label for="quantity">Quantity</label>
                                <div class="mb-3">
                                    <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                    <input type="number" name="quantity" value="{{ $product->quantity }}">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </td>
                        <td>Rp. {{ number_format($product->product->price * $product->quantity, 2) }}</td>
                    </tr>
                @endforeach
            </table>
            <form action="/cart/pay" method="POST" class="p-4 bg-light border border-1 my-3 rounded">
                @csrf
                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Total: Rp. {{ number_format($transaction->total_price, 2) }}</h3>
                    <button type="submit" class="btn btn-primary px-4">Pay</button>
                </div>
            </form>
        @else
            <div class="container text-center d-flex align-items-center justify-content-center position-relative">
                <h1 class="center-content">Looks like you don't have any items in your cart, let me get you back <a
                        href="/">here</a></h1>
            </div>
        @endif
    </section>
@endsection
