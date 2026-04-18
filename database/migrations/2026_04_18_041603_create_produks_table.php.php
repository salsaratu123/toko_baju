<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');      // Kolom nama produk
            $table->string('kategori');  // Kolom kategori produk
            $table->integer('stok');     // Kolom jumlah stok
            $table->integer('harga');    // Kolom harga produk
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi (hapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};