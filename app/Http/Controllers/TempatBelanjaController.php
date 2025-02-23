<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatBelanja;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TempatBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TempatBelanja::orderBy('id', 'desc')->get();
        return view('pages.belanja.tempatBelanja.index',  ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.belanja.tempatBelanja.formTambahTempatBelanja');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tempat'   => 'required',
            'kontak'        => 'required',
            'alamat'        => 'required'
        ], [
            'nama_tempat.required'  => 'Jangan kosong!',
            'kontak.required'       => 'Jangan kosong!',
            'alamat.required'       => 'Jangan kosong!'
        ]);

        TempatBelanja::create([
            'nama_tempat'   => $request->nama_tempat,
            'kontak'        => $request->kontak,
            'alamat'        => $request->alamat,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
        return redirect('/daftarTempatBelanja')->with('added', true);
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
    public function edit($id)
    {
        $data = TempatBelanja::find($id);
        return view('pages.belanja.tempatBelanja.formEditTempatBelanja', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tempat'   => 'required',
            'kontak'        => 'required',
            'alamat'        => 'required'
        ], [
            'nama_tempat.required'  => 'Jangan kosong!',
            'kontak.required'       => 'Jangan kosong!',
            'alamat.required'       => 'Jangan kosong!'
        ]);

        TempatBelanja::find($id)->update([
            'nama_tempat'   => $request->nama_tempat,
            'kontak'        => $request->kontak,
            'alamat'        => $request->alamat,
            'updated_at'    => now()
        ]);
        return redirect('/daftarTempatBelanja')->with('edited', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = TempatBelanja::find($id)->delete();
        return back();
    }
}
