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
        $tahun = ViewKeuanganBulanan::select('tahun')->groupBy('tahun')->orderBy('tahun', 'desc')->get();

        return view('pages.beranda.index', ['data' => $data, 'tahun' => $tahun, 'chart' => $chart->grafikKeuanganTahunan($request)]);
    }
}
