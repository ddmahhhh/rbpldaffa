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
        Schema::create('toko', function (Blueprint $table) {
            $table->id('id',36)->autoIncrement();
            $table->string('email_toko', 255)->unique();
            $table->string('nama_toko', 255);
            $table->string('password_toko', 255);
            $table->string('telp_toko',255);
            $table->string('kontak_toko',255);
            $table->string('lokasi_toko',255);
            $table->string('deskripsi_toko',255);
            $table->string('kategori_toko',255);
            $table->string('jamoperasional_toko',255);
            $table->string('foto_toko');
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
