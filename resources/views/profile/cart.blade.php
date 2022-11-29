@extends('layouts.base')
@section('content')
    <section class="cart-page">
        @if (isset($transaction))
            <div class="cart-items">
                @foreach ($transaction->details as $product)
                    @include('components.cartitem', ['prod' => $product->product])
                @endforeach
            </div>
            <form class="cart-total" action="/cart/pay" method="POST">
                @csrf
                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                <p>Total</p>
                <h6>Rp. {{ number_format($transaction->total_price, 2) }}</h6>
                <button type="submit">Pay</button>
            </form>
        @else
            <div>
                <h1 class="center-content">Looks like you don't have any items in your cart, let me get you back <a
                        href="/">here</a></h1>
            </div>
        @endif
    </section>
@endsection
