<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_jual', 'id_kary', 'nama_per','nama_kons','no_telp', 'judul', 'jumlah', 'harga', 'diskon', 'ttl_hrg','foto_byr','verfikasi'
    ];
    protected $table="penjualan";
}
