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
        DB::statement("DROP VIEW IF EXISTS view_harga_modal");
        DB::statement("
        CREATE VIEW view_harga_modal AS
        SELECT harga_modal.nomor_produk AS nomor_produk,
        GROUP_CONCAT(CONCAT('Rp ',replace(format(harga_modal.harga_modal,0),',','.'),' / ',harga_modal.satuan_produk) SEPARATOR '<br>') AS harga_modal 
        FROM harga_modal 
        GROUP BY harga_modal.nomor_produk
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
