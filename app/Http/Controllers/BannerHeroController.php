<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerHeroController extends Controller
{
    public function index()
    {
        $data = DB::table('banner-hero')->first();
        return view('admin.pages.banner-hero', compact('data'));
    }


    public function create()
    {
        return view('admin.create.about');
    }


    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required',
        ]);

        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->getClientOriginalExtension();
        $dPath = public_path('/assets/images/data/');
        $logo->move($dPath, $logoName);

        About::create([
            'logo' => $logoName,
            'address' => $request->address,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'desc' => $request->desc,
        ]);
        return redirect()->route('about.index')->with('add', 'Data berhasil ditambahkan');
    }


    public function show(About $about)
    {
        //
    }


    public function edit($id)
    {
        $dataBanner = DB::table('banner-hero')->where('id', $id)->first();
        return view('admin.edit.banner-hero', compact('dataBanner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $dPath = public_path('/assets/images/data/');
            $image->move($dPath, $imageName);

            DB::table('banner-hero')->where('id', $id)->update([
                'image' => $imageName,
                'description' => $request->description,
                'title' => $request->title
            ]);
        } else {

            DB::table('banner-hero')->where('id', $id)->update([
                'description' => $request->description,
                'title' => $request->title
            ]);
        }
        return redirect()->route('banner-hero.index')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        About::where('id', $id)->delete();
        return redirect()->route('banner-hero.index')->with('delete', 'Data berhasil dihapus');
    }
}