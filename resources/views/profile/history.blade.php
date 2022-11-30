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
    <section class="container text-center d-flex align-items-center justify-content-center position-relative">
        <h1 class="center-content">Looks like you don't have any transactions yet, let me get you back <a
                href="/">here</a></h1>
    </section>
    @endif
    </div>
@endsection
