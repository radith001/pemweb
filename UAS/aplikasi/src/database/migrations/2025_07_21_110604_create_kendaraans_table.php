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
            $table->string('brand'); // Nama motor
            $table->string('model'); // Merek motor
            $table->string('year'); // Tahun pembuatan motor
            $table->string('color'); // Warna motor
            $table->integer('price');// Harga motor
            $table->timestamps(); // Created at dan Updated at
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


