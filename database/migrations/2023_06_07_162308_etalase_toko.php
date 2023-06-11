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
        Schema::create('etalase_toko', function (Blueprint $table) {
            $table->id('id',36)->autoIncrement();
            $table->foreignid('id_toko');
            $table->foreign('id_toko')->references('id')->on('toko')->onDelete('Cascade');
            $table->foreignid('id_barang');
            $table->foreign('id_barang')->references('id')->on('barang')->onDelete('Cascade');
            $table->string('harga', 255);
            $table->string('deskripsi_barang', 255);
            $table->string('foto_barang', 255);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
