<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionProduct;
use App\Models\User;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataTransaction = Transaction::with('transactionProduct.product')->get();

        return view('admin.pages.transaction', compact('dataTransaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'user')->get();
        $payments = Payment::all();

        return view('admin.create.transaction', compact( 'users', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'user_id' => 'required',
            'total_price' => 'required',
        ]);

        Transaction::create([
            'user_id' => $request->user_id,
            'payment_id' => $request->payment_id,
            'transaction_product_id' => $request->transaction_product_id,
            'total_price' => $request->total_price,
            'total_count' => $request->total_count,
            'proof_payment' => $request->proof_payment,

        ]);
        return redirect()->route('transaction.index')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataTransaction = Transaction::with('transactionProduct.product')
            ->where('id', $id)->first();
        $users = User::where('role', 'user')->get();
        $payments = Payment::all();

        return view('admin.edit.transaction', compact('dataTransaction', 'users', 'payments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'user_id' => 'required',
            'total_count' => 'required',
            'total_price' => 'required',
        ]);

        Transaction::where('id', $id)->update([
            'user_id' => $request->user_id,
            'payment_id' => $request->payment_id,
            'transaction_product_id' => $request->transaction_product_id,
            'total_price' => $request->total_price,
            'total_count' => $request->total_count,
            'proof_payment' => $request->proof_payment,

        ]);
        return redirect()->route('transaction.index')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Transaction::where('id', $id)->delete();
        return redirect()->route('transaction.index')->with('delete', 'Data berhasil dihapus');
    }
    
    public function recordTransaction(Request $request) {
        $productId = $request->productId;
        $quantity = $request->quantity;

        $product = Product::findOrFail($productId);

        $productTransaction = new TransactionProduct();

        $productTransaction->product_id = $product->id;
        $productTransaction->count = $quantity;

        $productTransaction->save();

        $transaction = new Transaction();

        $transaction->user_id = null;
        $transaction->payment_id = null;
        $transaction->total_price = $product->price * $quantity;
        $transaction->total_count = $quantity;
        $transaction->transaction_product_id = $productTransaction->id;
        $transaction->proof_payment = null;

        $transaction->save();

        return response()->json([
            'success' => true,
            'message' => 'Transaction recorded successfully',
        ]);
    }
}
