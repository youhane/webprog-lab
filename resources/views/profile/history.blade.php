@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            @if (count($transactions))
                <h1>History</h1>
                @foreach ($transactions as $transaction)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h1>{{ $transaction->total_price }}</h1>
                                    <h1>{{ $transaction->updated_at->toDayDateTimeString() }}</h1>
                                </div>
                                <div class="col-md-6">
                                    @foreach ($transaction->details as $item)
                                        <h3>{{ $item->product->name }}</h3>
                                        <p>Price: Rp. {{ number_format($item->product->price, 2) }}</p>
                                        <p>Quantity: {{ $item->quantity }}</p>
                                        <p>Total: Rp. {{ number_format($item->product->price * $item->quantity, 2) }}</p>
                                    @endforeach
                                </div>
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
    </div>
@endsection
