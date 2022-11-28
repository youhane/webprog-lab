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

        $transactionDetail = TransactionDetails::where('transactions_id', $transaction->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($transactionDetail) {
            $transactionDetail->update([
                'quantity' =>  $request->quantity,
            ]);
        } else {
            TransactionDetails::create([
                'transactions_id' => $transaction->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ]);
        }

        $transactionDetails = TransactionDetails::where('transactions_id', $transaction->id)->get();

        $total_price = 0;
        foreach ($transactionDetails as $detail) {
            $total_price += $detail->quantity * $detail->product->price;
        }

        $transaction->update([
            'total_price' => $total_price
        ]);

        return redirect('/cart');
    }

    public function show(TransactionDetails $transactionDetails)
    {
        //
    }

    public function edit(Request $request)
    {
        //
    }

    public function update(Request $request, TransactionDetails $transactionDetails)
    {
        //
    }

    public function destroy(TransactionDetails $transactionDetails)
    {
        //
    }

    public function deleteOne(Request $request)
    {
        TransactionDetails::where('transactions_id', $request->transaction_id)
            ->where('product_id', $request->product_id)
            ->delete();

        $transaction = Transactions::find($request->transaction_id);
        $transactionDetails = TransactionDetails::where('transactions_id', $transaction->id)->get();

        $total_price = 0;
        foreach ($transactionDetails as $detail) {
            $total_price += $detail->quantity * $detail->product->price;
        }

        $transaction->update([
            'total_price' => $total_price
        ]);

        return redirect()->back();
    }

    public function updateQuantity(Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        TransactionDetails::where('transactions_id', $request->transaction_id)
            ->where('product_id', $request->product_id)
            ->update([
                'quantity' => $request->quantity,
            ]);

        $transaction = Transactions::find($request->transaction_id);
        $transactionDetails = TransactionDetails::where('transactions_id', $transaction->id)->get();

        $total_price = 0;
        foreach ($transactionDetails as $detail) {
            $total_price += $detail->quantity * $detail->product->price;
        }

        $transaction->update([
            'total_price' => $total_price
        ]);

        return redirect()->back();
    }
}
