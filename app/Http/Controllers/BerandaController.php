<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\KeuanganChart;
use App\Models\ViewKeuanganBulanan;
use App\Models\ViewTotalKeuangan;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{
    public function index(KeuanganChart $chart, Request $request)
    {
        $data = ViewTotalKeuangan::all();
        $daftarTahun = ViewKeuanganBulanan::select('tahun')->groupBy('tahun')->orderBy('tahun', 'desc')->get();

        $tahun = $request->tahun;
        if (empty($tahun)) {
            $tahun = date('Y');
        }
        $keuanganTahuanan = ViewKeuanganBulanan::where('tahun', $tahun)->selectRaw('SUM(omset) as omset, SUM(modal) as modal, SUM(laba) as laba, tahun')->groupBy('tahun')->first();

        return view('pages.beranda.index', ['data' => $data, 'daftarTahun' => $daftarTahun, 'keuanganTahunan' => $keuanganTahuanan, 'chart' => $chart->grafikKeuanganTahunan($request)]);
    }
}
