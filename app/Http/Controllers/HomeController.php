<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGrid;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function landingPage() {

        $bestSellingProducts = Product::limit(4)->get(); // should be sorted by highest transaction or smt
        $products = Product::all(); // should change to a limited list or something
        $productGrids = ProductGrid::limit(3)->get(); // no matter how many data, only 3 is displayed

        return view('pages.landing', [
            'bestSellingProducts' => $bestSellingProducts,
            'products' => $products,
            'productGrids' => $productGrids,
        ]);
    }

    public function productIndex()
    {
        $products = Product::all();

        return view('pages.list-product', ['products' => $products]);
    }

    public function productDetail($id)
    {
        $product = Product::find($id);

        $product['image_array'] = [
            $product['image_1'],
            $product['image_2'],
            $product['image_3'],
            $product['image_4'],
        ];

        return view('pages.detail-product', ['product' => $product]);
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}
