<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kehilangan extends Model
{
    use HasFactory;
    protected $table = 'toko';
    protected $fillable = ['email_toko','nama_toko','password_toko','lokasi_toko','telp_toko','kontak_toko','deskripsi_toko','kategori_toko','jamoperasional_toko'];
    protected $primarykey = ['id'];
    protected $guarded = ['id'];


}

