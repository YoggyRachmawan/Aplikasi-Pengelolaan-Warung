<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\KeuanganBulanan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexHarian()
    {
        $data = Keuangan::orderBy('tanggal', 'desc')->get();
        return view('pages.keuangan.harian', ['data' => $data]);
    }

    public function indexBulanan()
    {
        $data = KeuanganBulanan::orderBy('tahun', 'desc')->orderBy('bulan', 'desc')->get();
        return view('pages.keuangan.bulanan', ['data' => $data]);
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
            'tanggal' => 'required|date',
            'omset'   => 'required|numeric'
        ], [
            'tanggal.required' => 'Jangan kosong!',
            'omset.required'  => 'Jangan kosong!',
            'omset.numeric'   => 'Hanya angka!'
        ]);

        $laba = ($request->omset / 100) * 15;
        $modal = $request->omset - $laba;

        $exist = Keuangan::where('tanggal', $request->tanggal)->exists();

        if (!$exist) {
            Keuangan::create([
                'tanggal'       => $request->tanggal,
                'omset'         => $request->omset,
                'modal'         => $modal,
                'laba'          => $laba,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
            return back()->with('added', true);
        } else {
            return back()->with('cancelled', true);
        }
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
        $data = Keuangan::find($id)->delete();
        return back();
    }
}
