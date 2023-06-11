<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\barang;
use App\Models\toko;

class kehilangan extends Model
{
    use HasFactory;
    protected $table = 'etalase_toko';
    protected $fillable = ['harga','deskripsi_barang','foto_barang'];
    protected $primarykey = ['id'];
    protected $guarded = ['id'];

    public function barang()
  {
    return $this->belongsTo(barang::class, 'id_barang');
  }

  public function toko()
  {
    return $this->belongsTo(toko::class, 'id_toko');
  }
}

