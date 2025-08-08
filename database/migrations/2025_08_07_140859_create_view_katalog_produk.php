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
        DB::statement("DROP VIEW IF EXISTS view_katalog_produk");
        DB::statement("
        CREATE VIEW view_katalog_produk AS
        SELECT katalog_produk.id AS id,katalog_produk.nomor_produk AS nomor_produk,katalog_produk.nama_produk AS nama_produk,
        katalog_produk.foto_produk AS foto_produk,view_harga_modal.harga_modal AS harga_modal,view_harga_jual.harga_jual AS harga_jual 
        FROM ((katalog_produk JOIN view_harga_modal ON((katalog_produk.nomor_produk = view_harga_modal.nomor_produk))) 
        JOIN view_harga_jual ON((katalog_produk.nomor_produk = view_harga_jual.nomor_produk))) 
        GROUP BY katalog_produk.id,katalog_produk.nomor_produk,katalog_produk.nama_produk,katalog_produk.foto_produk
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
