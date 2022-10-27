@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>History</h1>
            @foreach ($transactions as $transaction)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h1>{{ $transaction->total_price }}</h1>
                            </div>
                            <div class="col-md-6">
                                @foreach ($transaction->details as $item)
                                    <h3>{{ $item->product->name }}</h3>
                                    <p>{{ $item->product->description }}</p>
                                    <p>Price: Rp. {{ number_format($item->product->price, 2) }}</p>
                                    <p>Quantity: {{ $item->quantity }}</p>
                                    <p>Total: Rp. {{ number_format($item->product->price * $item->quantity, 2) }}</p>
                                @endforeach
                            </div>
                            <div class="col-md-3">
                                <p>Status: {{ $transaction->status }}</p>
                                <p>Buyer: {{ $transaction->user->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
