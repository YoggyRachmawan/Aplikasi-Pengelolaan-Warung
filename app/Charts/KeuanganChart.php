<?php

namespace App\Charts;

use App\Models\ViewKeuanganBulanan;
use Illuminate\Http\Request;
use marineusde\LarapexCharts\Options\XAxisOption;
use marineusde\LarapexCharts\Charts\LineChart AS OriginalLineChart;

class KeuanganChart
{
    public function grafikKeuanganTahunan(Request $request): OriginalLineChart
    {
        $tahun = $request->tahun;

        if (empty($tahun)) {
            $tahun = date('Y');
        }

        for ($i=1; $i<=12; $i++) { 
            $omset = ViewKeuanganBulanan::where('tahun', $tahun)->where('bulan', $i)->pluck('omset')->first();
            $modal = ViewKeuanganBulanan::where('tahun', $tahun)->where('bulan', $i)->pluck('modal')->first();
            $laba = ViewKeuanganBulanan::where('tahun', $tahun)->where('bulan', $i)->pluck('laba')->first();

            $dataOmset[] = $omset;
            $dataModal[] = $modal;
            $dataLaba[]  = $laba;

            $bulan[] = $i;
        }

        return (new OriginalLineChart)
            ->setTitle('Grafik Keuangan Tahun ' . $tahun)
            ->addData('Omset', $dataOmset)
            ->addData('Modal', $dataModal)
            ->addData('Laba', $dataLaba)
            ->setXAxisOption(new XAxisOption($bulan));
    }
}
