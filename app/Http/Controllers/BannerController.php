<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Alert;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBanner = Banner::all();
        return view('admin.pages.banner', compact('dataBanner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.banner');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan validasi untuk jenis file dan ukuran maksimum
        ]);

        $image = $request->file('image');
        $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();

        $dPath = public_path('/assets/images/data/');
        $image->move($dPath, $imgName);

        Banner::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'image' => $imgName,
            'desc' => $request->desc,
            'desc_en' => $request->desc_en,
        ]);
        Alert::success('Success!', 'Post Created Successfully');
        return redirect()->route('banner.index')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataBanner = Banner::where('id', $id)->first();
        return view('admin.edit.banner', compact('dataBanner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();

            $dPath = public_path('/assets/images/data/');
            $image->move($dPath, $imgName);

            Banner::where('id', $id)->update([
                'title' => $request->title,
                'title_en' => $request->title_en,
                'image' => $imgName,
                'desc' => $request->desc,
                'desc_en' => $request->desc_en,
            ]);
        } else {
            Banner::where('id', $id)->update([
                'title' => $request->title,
                'title_en' => $request->title_en,
                'desc' => $request->desc,
                'desc_en' => $request->desc_en,
            ]);
        }
        Alert::success('Success!', 'Updated Successfully');
        return redirect()->route('banner.index')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Banner::where('id', $id)->delete();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return redirect()->route('banner.index')->with('delete', 'Data berhasil dihapus');
    }
}
