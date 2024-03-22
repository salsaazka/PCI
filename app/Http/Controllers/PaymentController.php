<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPayment = Payment::all();
        // return view('', compact('dataPayment'));
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
            'bank_name' => 'required',
            'no_bank' => 'required',
        ]);

        Payment::create([
            'bank_name' => $request->bank_name,
            'no_bank' => $request->no_bank,
        ]);
        // return redirect()->route('')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataPayment = Payment::where('id', $id)->first();
        // return view('', compact('dataPayment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bank_name' => 'required',
            'no_bank' => 'required',
        ]);

        Payment::where('id', $id)->update([
            'bank_name' => $request->bank_name,
            'no_bank' => $request->no_bank,
        ]);
        // return redirect()->route('')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Payment::where('id', $id)->delete();
        // return redirect()->route('')->with('delete', 'Data berhasil dihapus');
    }
}
