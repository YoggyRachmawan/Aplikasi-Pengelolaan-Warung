<?php

namespace App\Http\Controllers;

use App\Models\Belanjaan;
use App\Models\HargaJual;
use App\Models\HargaModal;
use App\Models\SatuanProduk;
use Illuminate\Http\Request;
use App\Models\KatalogProduk;
use App\Models\TempatBelanja;
use App\Http\Controllers\Controller;
use App\Models\ViewKatalogProduk;
use Illuminate\Support\Facades\Storage;

class KatalogProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ViewKatalogProduk::all();
        return view('pages.produk.katalogProduk.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataSatuanProduk = SatuanProduk::all();
        return view('pages.produk.katalogProduk.formTambahProduk', ['dataSatuanProduk' => $dataSatuanProduk]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // nomor_produk
        $idKatalogProduk = KatalogProduk::max('id');
        $nomorProduk = 'PRD' . '/' . date('d-m-Y') . '/' . $idKatalogProduk + 1;

        // validasi katalog_produk
        $validasi = $request->validate([
                        'nama_produk'   => 'required',
                        'foto_produk'   => 'required|mimes:png,jpg,jpeg'
                    ], [
                        'nama_produk.required'  => 'Jangan kosong!',
                        'foto_produk.required'  => 'Jangan kosong!',
                        'foto_produk.mimes'     => 'Format foto harus png, jpg atau jpeg!',
                    ]);

        if (!empty(session('hargaModal') && session('hargaJual')) && $validasi == true) {
            // harga_modal
            $dataHargaModal = [];
            foreach (session('hargaModal') as $itemHargaModal) {
                $dataHargaModal[] = [
                    'nomor_produk' => $nomorProduk,
                    'harga_modal' => (int) $itemHargaModal['harga'],
                    'satuan_produk' => $itemHargaModal['satuan'],
                    'created_at'    => now(),
                    'updated_at'    => now()
                ];
            }
            HargaModal::insert($dataHargaModal);

            // harga_jual
            $dataHargaJual = [];
            foreach (session('hargaJual') as $itemHargaJual) {
                $dataHargaJual[] = [
                    'nomor_produk' => $nomorProduk,
                    'harga_jual' => (int) $itemHargaJual['harga'],
                    'satuan_produk' => $itemHargaJual['satuan'],
                    'created_at'    => now(),
                    'updated_at'    => now()
                ];
            }
            HargaJual::insert($dataHargaJual);

            // katalog_produk
            $namaProduk = $request->nama_produk;
            $fotoProduk = $request->file('foto_produk');
            $namaFotoProduk = $fotoProduk->getClientOriginalName();
            $path = 'foto_produk/' . $namaFotoProduk;
            Storage::disk('public')->put($path, file_get_contents($fotoProduk));

            KatalogProduk::create([
                'nomor_produk'  => $nomorProduk,
                'nama_produk'   => $request->nama_produk,
                'foto_produk'   => $namaFotoProduk,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);

            session()->forget('hargaModal');
            session()->forget('hargaJual');

            return redirect('/daftarProduk')->with('added', true);
            
        } else {
            return back()->with('cancelled', true);
        }
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
    public function edit()
    {
        return view('pages.produk.katalogProduk.formEditProduk');
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
