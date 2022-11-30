@extends('layouts.base')
@section('content')
    <section>
        @if (count($transactions))
            @foreach ($transactions as $transaction)
                <div class="transactions">
                    @include('components.historycard', ['transaction' => $transaction])
                </div>
            @endforeach
    </section>
@else
    <section class="container my-5 py-5">
        <h1 class="my-5 py-5">Looks like you don't have any transactions yet, let me get you back <a
                href="/" class="back-link">here</a></h1>
    </section>
    @endif
    </div>
@endsection
