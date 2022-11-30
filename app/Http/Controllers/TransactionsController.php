<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetails;
use App\Models\Transactions;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transaction = Transactions::where('user_id', auth()->user()->id)
            ->where('status', 'unpaid')
            ->first();

        return view('profile.cart', [
            'active' => 'transactions',
            'transaction' => $transaction,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Transactions $transactions)
    {
        //
    }

    public function edit(Transactions $transactions)
    {
        //
    }

    public function update(Request $request, Transactions $transactions)
    {
        //
    }

    public function destroy(Transactions $transactions)
    {
        //
    }

    public function history()
    {
        $transactions = Transactions::where('user_id', auth()->user()->id)
            ->where('status', 'paid')
            ->get();

        $numberOfItems = [];
        foreach ($transactions as $transaction) {
            $transactionDetails = TransactionDetails::where('transactions_id', $transaction->id)->get();
            $numberOfItems[$transaction->id] = 0;
            foreach ($transactionDetails as $transactionDetail) {
                $numberOfItems[$transaction->id] += $transactionDetail->quantity;
            }
        }

        return view('profile.history', [
            'active' => 'transactions',
            'transactions' => $transactions,
            'numberOfItems' => $numberOfItems,
        ]);
    }

    public function pay(Request $request)
    {
        $transaction = Transactions::findOrFail($request->transaction_id);

        $transaction->update([
            'status' => 'paid',
        ]);

        return redirect('/products');
    }
}
