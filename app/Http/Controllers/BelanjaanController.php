<?php

namespace App\Http\Controllers;

use App\Models\Belanjaan;
use App\Models\TempatBelanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BelanjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Belanjaan::select('belanjaan.id','tanggal', 'nota', 'nama_tempat', 'total_harga')
                ->join('tempat_belanja', 'belanjaan.id_tempat_belanja', '=', 'tempat_belanja.id')
                ->orderBy('tanggal', 'desc')
                ->get();
        return view('pages.belanja.belanjaan.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = TempatBelanja::select('id', 'nama_tempat')->get();
        return view('pages.belanja.belanjaan.formTambahBelanjaan', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'           => 'required|date',
            'id_tempat_belanja' => 'required|numeric',
            'nota'              => 'required|mimes:png,jpg,jpeg',
            'total_harga'       => 'required|numeric'
        ], [
            'tanggal.required'              => 'Jangan kosong!',
            'id_tempat_belanja.required'    => 'Jangan kosong!',
            'nota.required'                 => 'Jangan kosong!',
            'nota.mimes'                    => 'Format foto harus png, jpg atau jpeg!',
            'total_harga.required'          => 'Jangan kosong!',
            'total_harga.numeric'           => 'Hanya angka!'
        ]);

        $foto_nota = $request->file('nota');
        $nama_foto_nota = $foto_nota->getClientOriginalName();
        $path = 'foto_nota/'.$nama_foto_nota;
        Storage::disk('public')->put($path, file_get_contents($foto_nota));

        Belanjaan::create([
            'tanggal'           => $request->tanggal,
            'nota'              => $nama_foto_nota,
            'id_tempat_belanja' => $request->id_tempat_belanja,
            'total_harga'       => $request->total_harga,
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
        return redirect('/daftarBelanjaan')->with('added', true);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tempatBelanja = TempatBelanja::select('id', 'nama_tempat')->get();
        $data = Belanjaan::find($id);
        return view('pages.belanja.belanjaan.formEditBelanjaan', ['data' => $data, 'tempatBelanja' => $tempatBelanja]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal'           => 'required|date',
            'id_tempat_belanja' => 'required|numeric',
            'nota'              => 'mimes:png,jpg,jpeg',
            'total_harga'       => 'required|numeric'
        ], [
            'tanggal.required'              => 'Jangan kosong!',
            'id_tempat_belanja.required'    => 'Jangan kosong!',
            'nota.mimes'                    => 'Format foto harus png, jpg atau jpeg!',
            'total_harga.required'          => 'Jangan kosong!',
            'total_harga.numeric'           => 'Hanya angka!'
        ]);

        $foto_nota = $request->file('nota');
        $nama_foto_nota = $foto_nota->getClientOriginalName();
        $path = 'foto_nota/'.$nama_foto_nota;
        Storage::disk('public')->put($path, file_get_contents($foto_nota));

        $data = Belanjaan::find($id);
        Storage::disk('public')->delete('foto_nota/'.$data['nota']);

        $data->update([
            'tanggal'           => $request->tanggal,
            'nota'              => $nama_foto_nota,
            'id_tempat_belanja' => $request->id_tempat_belanja,
            'total_harga'       => $request->total_harga,
            'updated_at'        => now()
        ]);
        return redirect('/daftarBelanjaan')->with('edited', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Belanjaan::find($id);
        Storage::disk('public')->delete('foto_nota/'.$data['nota']);
        $data->delete();
        return back();
    }
}
