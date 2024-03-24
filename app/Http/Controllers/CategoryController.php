<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataCategory = Category::all();
        return view('admin.pages.category', compact('dataCategory'));
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
            'title' => 'required',
            'desc' => 'required',
        ]);

        Category::create([
            'title' => $request->title,
            'desc' => $request->desc,
        ]);
        // return redirect()->route('')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataCategory = Category::where('id', $id)->first();
        // return view('', compact('dataCategory'));
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

        Category::where('id', $id)->update([
            'title' => $request->title,
            'desc' => $request->desc,
        ]);
        // return redirect()->route('')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::where('id', $id)->delete();
         // return redirect()->route('')->with('delete', 'Data berhasil dihapus');
    }
}
