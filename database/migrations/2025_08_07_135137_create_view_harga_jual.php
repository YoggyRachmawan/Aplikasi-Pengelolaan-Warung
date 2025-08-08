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
        DB::statement("DROP VIEW IF EXISTS view_harga_jual");
        DB::statement("
        CREATE VIEW view_harga_jual AS
        SELECT harga_jual.nomor_produk AS nomor_produk,
        GROUP_CONCAT(CONCAT('Rp', REPLACE(FORMAT(harga_jual.harga_jual,0), ',', '.'),' / ',harga_jual.satuan_produk) SEPARATOR '<br>') AS harga_jual
        FROM harga_jual
        GROUP BY harga_jual.nomor_produk
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
