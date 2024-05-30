<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Alert;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataContact = Contact::all();
        return view('admin.pages.contact', compact('dataContact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'contact' => 'required',
           
        ]);

        Contact::create([
            'title' => $request->title,
            'contact' => $request->contact,
        ]);
        Alert::success('Success!', 'Post Created Successfully');
        return redirect()->route('contact.index')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataContact = Contact::where('id', $id)->first();
        return view('admin.edit.contact', compact('dataContact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'contact' => 'required',
        ]);

        Contact::where('id', $id)->update([
            'title' => $request->title,
            'contact' => $request->contact,
        ]);
        Alert::success('Success!', 'Updated Successfully');
        return redirect()->route('contact.index')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Contact::where('id', $id)->delete();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
         return redirect()->route('contact.index')->with('delete', 'Data berhasil dihapus');
    }
}
