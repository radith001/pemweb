<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('merek_kendaraan');   // Nama merek motor
            $table->string('tipe_kendaraan');    // Tipe atau model motor
            $table->string('tahun_produksi');    // Tahun produksi motor
            $table->string('warna_body');        // Warna body motor
            $table->integer('harga_pasar');      // Harga pasar motor
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
