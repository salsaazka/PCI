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
        $product1 = ProductDetail::whereNotNull('title')->get();
        $product2 = ProductDetail::whereNotNull('container')->get();
        return view('admin.pages.product_detail', compact([
            'product1',
            'product2',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Product::where('category_id', 1)->get();
        return view('admin.create.product-detail', compact('data'));
    }

    public function create2()
    {
        $data = Product::where('category_id', 3)->get();
        return view('admin.create.product-variant', compact('data'));
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

        return redirect()->route('productVariant.index')->with('edit', 'Data berhasil ditambah');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
        ]);

        ProductDetail::create([
            'product_id' => $request->product_id,
            'container' => $request->container,
            'size' => $request->size,
            'bag' => $request->bag,
        ]);

        return redirect()->route('productVariant.index')->with('edit', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $dataProduct = ProductDetail::where('id', $id)->first();
        $data = Product::all();
        return view('admin.edit.product-detail', compact('dataProduct', 'data'));
    }

    public function edit2($id)
    {
        $dataProduct = ProductDetail::where('id', $id)->first();
        $data = Product::all();
        return view('admin.edit.product-variant', compact('dataProduct', 'data'));
    }

    public function update(Request $request, $id)
    {
        ProductDetail::where('id', $id)->update([
            'product_id' => $request->product_id,
            'title' => $request->title,
            'packing' => $request->packing,
            'size_min' => $request->size_min,
            'size_max' => $request->size_max,
            'measurement' => $request->measurement,
        ]);

        return redirect()->route('productVariant.index')->with('edit', 'Data berhasil diubah');
    }

    public function update2(Request $request, $id)
    {
        ProductDetail::where('id', $id)->update([
            'product_id' => $request->product_id,
            'container' => $request->container,
            'size' => $request->size,
            'bag' => $request->bag,
        ]);
        return redirect()->route('productVariant.index')->with('edit', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        ProductDetail::where('id', $id)->delete();
        return redirect()->route('productVariant.index')->with('delete', 'Data berhasil dihapus');
    }
}
