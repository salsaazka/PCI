<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Category;
use Illuminate\Http\Request;
use File;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $productDetail = ProductDetail::all();
        return view('pages.detail-product', compact('productDetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Product::all();
        return view('admin.create.product-detail', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        ProductDetail::create([
            'product_id' => $request->product_id,
            'title' => $request->title,
            'packing' => $request->packing,
            'size_min' => $request->size_min,
            'size_max' => $request->size_max,
            'measurement' => $request->measurement,
        ]);

        return redirect()->route('product-detail.index')->with('edit', 'Data berhasil diubah');
    }

    public function edit($id)
    {
        $dataProduct = ProductDetail::where('id', $id)->first();
        $data = Product::all();
        return view('admin.edit.product-detail', compact('dataProduct', 'data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $product = ProductDetail::findOrFail($id); // Ambil produk yang ingin diupdate

        // Update data produk
        $product->product_id = $request->product_id;
        $product->title = $request->title;
        $product->packing = $request->packing;
        $product->size_min = $request->size_min;
        $product->size_max = $request->size_max;
        $product->measurement = $request->measurement;

        // Simpan perubahan
        $product->save();
        return redirect()->route('product-detail.index')->with('edit', 'Data berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ProductDetail::where('id', $id)->delete();
        return redirect()->route('product-detail.index')->with('delete', 'Data berhasil dihapus');
    }
}
