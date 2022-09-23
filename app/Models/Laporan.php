<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    const CREATED_AT = 'wkt_msk';
    const UPDATED_AT = 'wkt_kel';
    protected $fillable = [
        'nama_per', 'nama_kons','no_telp', 'wkt_msk','wkt_kel', 'alamat_kunj','foto_lok', 'verifikasi'
    ];
    protected $table="laporharian";
}
