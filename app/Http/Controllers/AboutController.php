<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index()
    {
        $dataAbout = About::all();
        return view('admin.pages.about', compact('dataAbout'));
    }

   
    public function create()
    {
        return view('admin.create.about');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'desc' => 'required',
        ]);

        About::create([
            'logo' => $request->logo,
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
        $dataAbout = About::where('id', $id)->first();
         return view('admin.pages.about', compact('dataAbout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => 'required',
            'desc' => 'required',
        ]);

        About::where('id', $id)->update([
            'logo' => $request->logo,
            'address' => $request->address,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'desc' => $request->desc,
        ]);
        return redirect()->route('about.index')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        About::where('id', $id)->delete();
        return redirect()->route('about.index')->with('delete', 'Data berhasil dihapus');
    }
}
