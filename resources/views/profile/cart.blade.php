@extends('layouts.base')
@section('content')
    <section class="container px-lg-5">
        @if (isset($transaction))
            <h1 class="py-3">Cart</h1>
            <div class="cart-items">
                @foreach ($transaction->details as $product)
                    @include('components.card', ['prod' => $product->product, 'isCart' => true])
                @endforeach
            </div>
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
