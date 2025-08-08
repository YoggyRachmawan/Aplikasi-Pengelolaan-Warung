<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("DROP VIEW IF EXISTS view_keuangan_bulanan");
        DB::statement("
        CREATE VIEW view_keuangan_bulanan AS
        SELECT YEAR(keuangan.tanggal) AS tahun,MONTH(keuangan.tanggal) AS bulan,SUM(keuangan.omset) AS omset,SUM(keuangan.modal) AS modal,SUM(keuangan.laba) AS laba 
        FROM keuangan GROUP BY YEAR(keuangan.tanggal),MONTH(keuangan.tanggal) ORDER BY tahun,bulan
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
