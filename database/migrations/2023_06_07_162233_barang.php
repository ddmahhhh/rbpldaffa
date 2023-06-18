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
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id',36)->autoIncrement();
            $table->string('nama_barang', 255);
            $table->string('harga',255);
            $table->string('deskripsi_barang',512);
            $table->string('foto_barang');
            $table->foreignid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade');
            $table->timestamps();
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
