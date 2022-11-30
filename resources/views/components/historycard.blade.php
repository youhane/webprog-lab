<div class="history-item">
    <div class="history-item-header">
        <h5>Transaction {{ $transaction->id }}</h5>
        <h6>Transaction on {{ $transaction->updated_at->toDayDateTimeString() }}</h6>
    </div>
    <div class="transction-items">
        @foreach ($transaction->details as $item)
            @include('components.transactionitem', ['item' => $item])
        @endforeach
    </div>
    <h6 class="history-paid">Paid {{ number_format($transaction->total_price, 2) }}</h6>
</div>
