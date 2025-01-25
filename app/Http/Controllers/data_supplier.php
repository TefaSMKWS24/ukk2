<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data_supplier extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('data_supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'data_supplier' => 'required',
            'nama_supplier' => 'required',
            'nohp' => 'required',
            'kode_barang' =>'required',
        ]);

        $data = [
            'data_supplier' => $request->data_supplier,
            'nama_supplier' => $request->nama_supplier,
            'nohp' => $request->nohp,
            'kode_barang' => $request->kode_barang,

        ];

        DB::table('data_supplier')->insert($data);
        return redirect()->route('data_supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
