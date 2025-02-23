<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SatuanProduk;

class SatuanProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SatuanProduk::orderBy('id','desc')->get();
        return view('pages.produk.satuanProduk.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'satuan' => 'required',
            
        ],[
            'satuan.required' => 'Jangan kosong!'
        ]);
        
        SatuanProduk::create([
            'satuan'        => $request->satuan,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
        return back()->with('added', true);
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
    public function destroy($id)
    {
        $data = SatuanProduk::find($id)->delete();
        return back();
    }
}
