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
        DB::statement("DROP VIEW IF EXISTS view_total_keuangan");
        DB::statement("
        CREATE VIEW view_total_keuangan AS
        SELECT SUM(keuangan.omset) AS total_omset,SUM(keuangan.modal) AS total_modal,SUM(keuangan.laba) AS total_laba 
        FROM keuangan
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
