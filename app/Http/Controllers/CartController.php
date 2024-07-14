<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataCart = Cart::all();
        // return view('', compact('dataCart'));
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
            'user_id' => 'required',
            'product_id' => 'required',
        ]);

        Cart::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
        ]);
        Alert::success('Success!', 'Post Created Successfully');
        // return redirect()->route('')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $dataCart = Cart::where('id', $id)->first();
        // return view('', compact('dataCart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
        ]);

        Cart::where('id', $id)->update([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
        ]);
        // return redirect()->route('')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cart::where('id', $id)->delete();
         // return redirect()->route('')->with('delete', 'Data berhasil dihapus');
    }
}
