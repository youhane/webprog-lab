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

        $transactionDetails = TransactionDetails::where('transaction_id', $transaction->id)->get();

        return view('profile.cart', [
            'active' => 'transactions',
            'transaction' => $transaction,
            'transactionDetails' => $transactionDetails,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function show(Transactions $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(Transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transactions $transactions)
    {
        //
    }

    public function history()
    {
        $transactions = Transactions::where('user_id', auth()->user()->id)
            ->where('status', 'paid')
            ->get();

        return view('profile.history', [
            'active' => 'transactions',
            'transactions' => $transactions,
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
