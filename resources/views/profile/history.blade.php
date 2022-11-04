@extends('layouts.base')
@section('content')
    <section class="container">
        @if (count($transactions))
            <h1 class="py-5">History</h1>
            @foreach ($transactions as $transaction)
                <div class="card mb-5">
                    <div class="card-header">
                        <h1>Transaction No. {{ $transaction->id }}</h1>
                        <h3>{{ $transaction->updated_at->toDayDateTimeString() }}</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            @foreach ($transaction->details as $item)
                                <div class="d-flex gap-5">
                                    <div>
                                        @include('components.image', [
                                            'image' => $item->product->image,
                                            'alt' => $item->product->name,
                                        ])
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
            @endforeach
    </section>
@else
    <section class="container text-center d-flex align-items-center justify-content-center position-relative">
        <h1 class="center-content">Looks like you don't have any transactions yet, let me get you back <a
                href="/">here</a></h1>
    </section>
    @endif
    </div>
@endsection
