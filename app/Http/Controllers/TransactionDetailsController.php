<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetails;
use App\Models\Transactions;
use Illuminate\Http\Request;

class TransactionDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $transaction = Transactions::where('user_id', auth()->user()->id)
            ->where('status', 'unpaid')
            ->first();
        if (!$transaction) {
            $transaction = Transactions::create([
                'user_id' => auth()->user()->id,
                'status' => 'unpaid',
            ]);
        }

        $transactionDetail = TransactionDetails::where('transaction_id', $transaction->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($transactionDetail) {
            $transactionDetail->update([
                'quantity' =>  $request->quantity,
            ]);
        } else {
            TransactionDetails::create([
                'transaction_id' => $transaction->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ]);
        }

        return redirect()->back();
    }

    public function show(TransactionDetails $transactionDetails)
    {
        //
    }

    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransactionDetails  $transactionDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionDetails $transactionDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionDetails  $transactionDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionDetails $transactionDetails)
    {
        //
    }

    public function deleteOne(Request $request)
    {
        TransactionDetails::where('transaction_id', $request->transaction_id)
            ->where('product_id', $request->product_id)
            ->delete();

        return redirect()->back();
    }

    public function updateQuantity(Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        TransactionDetails::where('transaction_id', $request->transaction_id)
            ->where('product_id', $request->product_id)
            ->update([
                'quantity' => $request->quantity,
            ]);

        return redirect()->back();
    }
}
