<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'merek_kendaraan',     // brand
        'tipe_kendaraan',      // model
        'tahun_produksi',      // year
        'warna_body',          // color
        'harga_pasar'          // price
    ];
}
