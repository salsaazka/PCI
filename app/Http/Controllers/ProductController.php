<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataProduct = Product::all();
        return view('admin.pages.product', compact('dataProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);
        
        $image_1 = $request->file('image_1');
        $imgExtension = $image_1->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_1 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_1->move($dPath, $imgName_1);

        // image 2
        $image_2 = $request->file('image_2');
        $imgExtension = $image_2->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_2 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_2->move($dPath, $imgName_2);
        
        // image 3
        $image_3 = $request->file('image_3');
        $imgExtension = $image_3->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_3 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_3->move($dPath, $imgName_3);

        
        // image 4
        $image_4 = $request->file('image_4');
        $imgExtension = $image_4->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_4 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_4->move($dPath, $imgName_4);


        Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'price' => $request->price,
            'unit' => $request->unit,
            'stock' => $request->stock,
            'image_1' => $imgName_1,
            'image_2' => $imgName_2,
            'image_3' => $imgName_3,
            'image_4' => $imgName_4,
        ]);
        return redirect()->route('product.index')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataProduct = Product::where('id', $id)->first();
        return view('admin.edit.product' ,compact('dataProduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);
        
        $image_1 = $request->file('image_1');
        $imgExtension = $image_1->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_1 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_1->move($dPath, $imgName_1);

        // image 2
        $image_2 = $request->file('image_2');
        $imgExtension = $image_2->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_2 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_2->move($dPath, $imgName_2);
        
        // image 3
        $image_3 = $request->file('image_3');
        $imgExtension = $image_3->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_3 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_3->move($dPath, $imgName_3);

        
        // image 4
        $image_4 = $request->file('image_4');
        $imgExtension = $image_4->getClientOriginalExtension(); // Memperbaiki pemanggilan metode
        $imgName_4 = time() . rand() . '.' . $imgExtension;

        $dPath = public_path('/assets/images/data/');
        $image_4->move($dPath, $imgName_4);

        Product::where('id', $id)->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'price' => $request->price,
            'unit' => $request->unit,
            'stock' => $request->stock,
            'image_1' => $imgName_1,
            'image_2' => $imgName_2,
            'image_3' => $imgName_3,
            'image_4' => $imgName_4,
        ]);
        return redirect()->route('product.index')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('product.index')->with('delete', 'Data berhasil dihapus');
    }
}
