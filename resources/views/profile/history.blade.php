@extends('layouts.base')
@section('content')
    <div class="container">
        @if (count($transactions))
            <h1 class="py-5">History</h1>
            @foreach ($transactions as $transaction)
                <div class="card">
                    <div class="card-header">
                        <h1>Transaction No. {{ $transaction->id }}</h1>
                        <h3>{{ $transaction->updated_at->toDayDateTimeString() }}</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            @foreach ($transaction->details as $item)
                                <div class="d-flex">
                                    <div>
                                        @if ($item->product->image == null)
                                            <img src="{{ asset('storage/product-images/no-image.png') }}" class="cart-img"
                                                alt="...">
                                        @else
                                            @if (substr($item->product->image, 0, 4) == 'http')
                                                <img src="{{ $item->product->image }}" class="cart-img">
                                            @else
                                                <img src="{{ asset('storage/product-images/' . $item->product->image) }}"
                                                    class="cart-img" alt="...">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h3>{{ $item->product->name }}</h3>
                                        <p>Price: Rp. {{ number_format($item->product->price, 2) }}</p>
                                        <p>Quantity: {{ $item->quantity }}</p>
                                        <p>Total: Rp. {{ number_format($item->product->price * $item->quantity, 2) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <h1>Total Rp. {{ number_format($transaction->total_price, 2) }}</h1>
                    </div>
                </div>
    </div>
    @endforeach
@else
    <section class="container text-center d-flex align-items-center justify-content-center position-relative">
        <h1 class="center-content">Looks like you don't have any transactions yet, let me get you back <a
                href="/">here</a></h1>
    </section>
    @endif
    </div>
@endsection
