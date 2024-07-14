<?php

namespace App\Http\Controllers;

use App\Models\TransactionProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Alert;
class TransactionProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataTransactionProduct = TransactionProduct::all();
         // return view('', compact('dataTransactionProduct));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'count' => 'required',
        ]);

        TransactionProduct::create([
            'product_id' => $request->product_id,
            'count' => $request->count,
        ]);
        Alert::success('Success!', 'Post Created Successfully');
        // return redirect()->route('')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionProduct $transactionProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataTransactionProduct = TransactionProduct::where('id', $id)->first();
         // return view('', compact('dataTransactionProduct));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required',
            'count' => 'required',
        ]);

        TransactionProduct::where('id', $id)->update([
            'product_id' => $request->product_id,
            'count' => $request->count,
        ]);
        // return redirect()->route('')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        TransactionProduct::where('id', $id)->delete();
        // return redirect()->route('')->with('delete', 'Data berhasil dihapus');
    }
}
