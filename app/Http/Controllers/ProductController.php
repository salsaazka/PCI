<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use File;
use Alert;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataProduct = Product::with('productDetail')->get();
        return view('admin.pages.product', compact('dataProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataCategory = Category::all();
        return view('admin.create.product', compact('dataCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'title_en' => 'required',
            'desc_en' => 'required',
        ]);

        $imgName_1 = null;
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $imgExtension = $image_1->getClientOriginalExtension();
            $imgName_1 = time() . rand() . '.' . $imgExtension;
            // when in local environment, use this path
            // $dPath = public_path('/assets/images/data/');

            //when in hosting environment, use this path
            $dPath = base_path('../../public_html/assets/images/data');
            $image_1->move($dPath, $imgName_1);
        }

        $imgName_2 = null;
        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2');
            $imgExtension = $image_2->getClientOriginalExtension();
            $imgName_2 = time() . rand() . '.' . $imgExtension;
            // when in local environment, use this path
            // $dPath = public_path('/assets/images/data/');

            //when in hosting environment, use this path
            $dPath = base_path('../../public_html/assets/images/data');
            $image_2->move($dPath, $imgName_2);
        }

        $imgName_3 = null;
        if ($request->hasFile('image_3')) {
            $image_3 = $request->file('image_3');
            $imgExtension = $image_3->getClientOriginalExtension();
            $imgName_3 = time() . rand() . '.' . $imgExtension;
            // when in local environment, use this path
            // $dPath = public_path('/assets/images/data/');

            //when in hosting environment, use this path
            $dPath = base_path('../../public_html/assets/images/data');
            $image_3->move($dPath, $imgName_3);
        }

        $imgName_4 = null;
        if ($request->hasFile('image_4')) {
            $image_4 = $request->file('image_4');
            $imgExtension = $image_4->getClientOriginalExtension();
            $imgName_4 = time() . rand() . '.' . $imgExtension;
            // when in local environment, use this path
            // $dPath = public_path('/assets/images/data/');

            //when in hosting environment, use this path
            $dPath = base_path('../../public_html/assets/images/data');
            $image_4->move($dPath, $imgName_4);
        }

        Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_en' => $request->title_en,
            'desc' => $request->desc,
            'desc_en' => $request->desc_en,
            'price' => $request->price,
            'unit' => $request->unit,
            'stock' => $request->stock,
            'image_1' => $imgName_1,
            'image_2' => $imgName_2,
            'image_3' => $imgName_3,
            'image_4' => $imgName_4,
            'min_order' => $request->min_order,
            'marketplace_url' => $request->marketplace_url,
        ]);
        Alert::success('Success!', 'Post Created Successfully');
        return redirect()->route('product.index')->with('edit', 'Data berhasil diubah');
    }

    public function edit($id)
    {
        $dataProduct = Product::where('id', $id)->first();
        $dataCategory = Category::all();
        return view('admin.edit.product', compact('dataProduct', 'dataCategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'title_en' => 'required',
            'desc_en' => 'required',
        ]);
    
        $product = Product::findOrFail($id); // Ambil produk yang ingin diupdate
        // dd request all
        // dd($request->all());
        // Update data produk
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->title_en = $request->title_en;
        $product->desc = $request->desc;
        $product->desc_en = $request->desc_en;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->stock = $request->stock;
        $product->min_order = $request->min_order;
        $product->marketplace_url = $request->marketplace_url;
    
        // when in local environment, use this path
        // $dPath = public_path('/assets/images/data/');

        //when in hosting environment, use this path
        $dPath = base_path('../../public_html/assets/images/data');
        
        // Cek apakah ada gambar yang diupload
        if ($request->image_1 != null) {
            // Hapus gambar lama jika ada
            if ($product->image_1 && file_exists($dPath . $product->image_1)) {
                unlink($dPath . $product->image_1);
            }
            $image_1 = $request->file('image_1');
            $imgName_1 = time() . rand() . '.' . $image_1->getClientOriginalExtension();
            $image_1->move($dPath, $imgName_1);
            $product->image_1 = $imgName_1;
            dd($imgName_1);
        }
    
        if ($request->hasFile('image_2')) {
            // Hapus gambar lama jika ada
            if ($product->image_2 && file_exists($dPath . $product->image_2)) {
                unlink($dPath . $product->image_2);
            }
            $image_2 = $request->file('image_2');
            $imgName_2 = time() . rand() . '.' . $image_2->getClientOriginalExtension();
            $image_2->move($dPath, $imgName_2);
            $product->image_2 = $imgName_2;
        }
    
        if ($request->hasFile('image_3')) {
            // Hapus gambar lama jika ada
            if ($product->image_3 && file_exists($dPath . $product->image_3)) {
                unlink($dPath . $product->image_3);
            }
            $image_3 = $request->file('image_3');
            $imgName_3 = time() . rand() . '.' . $image_3->getClientOriginalExtension();
            $image_3->move($dPath, $imgName_3);
            $product->image_3 = $imgName_3;
        }
    
        if ($request->hasFile('image_4')) {
            // Hapus gambar lama jika ada
            if ($product->image_4 && file_exists($dPath . $product->image_4)) {
                unlink($dPath . $product->image_4);
            }
            $image_4 = $request->file('image_4');
            $imgName_4 = time() . rand() . '.' . $image_4->getClientOriginalExtension();
            $image_4->move($dPath, $imgName_4);
            $product->image_4 = $imgName_4;
        }
    
        // Simpan perubahan
        $product->save();
    
        return redirect()->route('product.index')->with('edit', 'Data berhasil diubah');
    }    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return redirect()->route('product.index')->with('delete', 'Data berhasil dihapus');
    }


    public function createDetail(Request $request)
    {
        
    }
}
