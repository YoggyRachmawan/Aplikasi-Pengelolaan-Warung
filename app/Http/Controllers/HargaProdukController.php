<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexHargaModal()
    {
        $data = session()->get('hargaModal');
        return response()->json($data);
    }

    public function indexHargaJual()
    {
        $data = session()->get('hargaJual');
        return response()->json($data);
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
    public function storeHargaModal(Request $request)
    {
        $request->validate([
            'harga'     => 'required|numeric',
            'satuan'    => 'required'
        ]);

        $dataHargaModal = session()->get('hargaModal', []);
        $dataHargaModal[] = [
            'harga' => $request->harga,
            'satuan' => $request->satuan
        ];
        session()->put('hargaModal', $dataHargaModal);
        $data = session()->get('hargaModal');

        return response()->json($data);
    }

    public function storeHargaJual(Request $request)
    {
        $request->validate([
            'harga'     => 'required|numeric',
            'satuan'    => 'required'
        ]);

        $dataHargaJual = session()->get('hargaJual', []);
        $dataHargaJual[] = [
            'harga' => $request->harga,
            'satuan' => $request->satuan
        ];
        session()->put('hargaJual', $dataHargaJual);
        $data = session()->get('hargaJual');

        return response()->json($data);
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
    public function destroyHargaModal($index)
    {
        $dataHargaModal = session()->get('hargaModal', []);

        if (isset($dataHargaModal[$index])) {
            unset($dataHargaModal[$index]);
            $penyesuaianDataHargaModal = array_values($dataHargaModal);
            session()->put('hargaModal', $penyesuaianDataHargaModal);
            return response()->json(['success' => true, 'message' => 'Berhasil dihapus']);
        }
        
        return response()->json(['success' => false, 'message' => 'Gagal dihapus']);
    }

    public function destroyHargaJual($index)
    {
        $dataHargaJual = session()->get('hargaJual', []);

        if (isset($dataHargaJual[$index])) {
            unset($dataHargaJual[$index]);
            $penyesuaianDataHargaJual = array_values($dataHargaJual);
            session()->put('hargaJual', $penyesuaianDataHargaJual);
            return response()->json(['success' => true, 'message' => 'Berhasil dihapus']);
        }
        
        return response()->json(['success' => false, 'message' => 'Gagal dihapus']);
    }
}
