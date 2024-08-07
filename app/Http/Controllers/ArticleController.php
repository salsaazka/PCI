<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Alert;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArticle = Article::all();
        return view('admin.pages.article', compact('dataArticle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.article');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_en' => 'required',
            'desc' => 'required',
            'desc_en' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan validasi untuk jenis file dan ukuran maksimum
            'order' =>'required|numeric'
        ]);

        $checkOrder = Article::where('order', $request->order)->first();
        if ($checkOrder) {
            Alert::error('Error!', 'Urutan sudah ada');
            return redirect()->route('article.create');
        }

        $image = $request->file('image');
        $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();

        // when in local environment, use this path
        // $dPath = public_path('/assets/images/data/');

        //when in hosting environment, use this path
        $dPath = base_path('../../public_html/assets/images/data');

        $image->move($dPath, $imgName);

        Article::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'image' => $imgName,
            'desc' => $request->desc,
            'desc_en' => $request->desc_en,
            'order' => $request->order
        ]);
        Alert::success('Success!', 'Post Created Successfully');
        return redirect()->route('article.index')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataArticle = Article::where('id', $id)->first();
        return view('admin.edit.article', compact('dataArticle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $checkOrder = Article::where('order', $request->order)->where('id', '!=', $id)->first();
        if ($checkOrder) {
            Alert::error('Error!', 'Urutan sudah ada');
            return redirect()->route('article.edit', $id);
        }

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();

            // when in local environment, use this path
            // $dPath = public_path('/assets/images/data/');

            //when in hosting environment, use this path
            $dPath = base_path('../../public_html/assets/images/data');

            $image->move($dPath, $imgName);

            Article::where('id', $id)->update([
                'title' => $request->title,
                'title_en' => $request->title_en,
                'image' => $imgName,
                'desc' => $request->desc,
                'desc_en' => $request->desc_en,
                'order' => $request->order
            ]);
        } else {

            Article::where('id', $id)->update([
                'title' => $request->title,
                'title_en' => $request->title_en,
                'desc' => $request->desc,
                'desc_en' => $request->desc_en,
                'order' => $request->order
            ]);

        }
        Alert::success('Success!', 'Updated Successfully');
        return redirect()->route('article.index')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Article::where('id', $id)->delete();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return redirect()->route('article.index')->with('delete', 'Data berhasil dihapus');
    }
}
