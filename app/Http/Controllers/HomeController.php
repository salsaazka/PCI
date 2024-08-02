<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\BannerModel as Banner;
use App\Models\Category;
use App\Models\ProductGrid;
use App\Models\ProductDetail;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function landingPage() {

        $banner = Banner::all();
        $category = Category::all();
        $bestSellingProducts = Product::where('category_id', 1)->orderBy('order', 'ASC')->limit(4)->get();
        $products = Product::where('category_id', 3)->orderBy('order', 'ASC')->limit(4)->get();
        $productGrids = ProductGrid::limit(5)->get();
        $contact = Contact::all();
        $article = Article::all();

        return view('pages.landing', [
            'banner' => $banner,
            'category' => $category,
            'bestSellingProducts' => $bestSellingProducts,
            'products' => $products,
            'productGrids' => $productGrids,
            'contact' => $contact,
            'article' => $article
        ]);
    }

    public function contactPage() {

        $contact = Contact::all();
        return view('pages.contact', [
            'contact' => $contact
        ]);
    }

    public function productIndex()
    {
        $products = Product::where('category_id', 1)->orderBy('order', 'ASC')->limit(99)->get();
        return view('pages.list-product', [
            'products' => $products,
        ]);
    }

    public function productIndex2()
    {
        $products = Product::where('category_id', 3)->orderBy('order', 'ASC')->limit(99)->get();
        return view('pages.list-product2', [
            'products' => $products,
        ]);
    }

    public function productKnowledgePage() {
        $data = Article::all();
        return view('pages.list-product-knowledge', [
            'data' => $data
        ]);
    }

    public function productDetail($id)
    {
        $product = Product::find($id);
        $productDetail = ProductDetail::where('product_id', $id)->get();
        $contact = Contact::where('title', 'Whatsapp')->first()['contact'];
        $contactEmail = Contact::all();

        $product['image_array'] = [
            $product['image_1'],
            $product['image_2'],
            $product['image_3'],
            $product['image_4'],
        ];

        return view('pages.detail-product', [
            'product' => $product,
            'contact' => $contact,
            'contactEmail' => $contactEmail,
            'productDetail' => $productDetail
        ]);
    }

    public function productKnowledgeDetail($id) {

        $data = Article::find($id);
        return view('pages.detail-product-knowledge', [
            'data' => $data
        ]);
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
    public function show()
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
