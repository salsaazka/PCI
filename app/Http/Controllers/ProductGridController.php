<?php

namespace App\Http\Controllers;

use App\Models\ProductGrid;
use App\Models\Category;
use Illuminate\Http\Request;
use Alert;
class ProductGridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataProductGrid = ProductGrid::all();
        return view('admin.pages.product-grid', compact('dataProductGrid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.product-grid');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Tambahkan validasi untuk jenis file dan ukuran maksimum
        ]);

        $image = $request->file('image');
        $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();

        $dPath = public_path('/assets/images/data/');
        $image->move($dPath, $imgName);

        ProductGrid::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_en' => $request->title_en,
            'image' =>  $imgName,
            'desc' => $request->desc,
            'desc_en' => $request->desc_en
        ]);
        Alert::success('Success!', 'Post Created Successfully');
        return redirect()->route('productgrid.index')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductGrid $productGrid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataProductGrid = ProductGrid::where('id', $id)->first();

        return view('admin.edit.product-grid', compact('dataProductGrid'));
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

        if ($request->file('image')) {
            $image = $request->file('image');
            $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();

            $dPath = public_path('/assets/images/data/');
            $image->move($dPath, $imgName);


            ProductGrid::where('id', $id)->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'title_en' => $request->title_en,
                'image' =>  $imgName,
                'desc' => $request->desc,
                'desc_en' => $request->desc_en
            ]);
        } else {
            ProductGrid::where('id', $id)->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'title_en' => $request->title_en,
                'desc' => $request->desc,
                'desc_en' => $request->desc_en
            ]);
        }
        Alert::success('Success!', 'Updated Successfully');
        return redirect()->route('productgrid.index')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ProductGrid::where('id', $id)->delete();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return redirect()->route('productgrid.index')->with('delete', 'Data berhasil dihapus');
    }
}
