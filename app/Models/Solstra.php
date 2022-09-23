<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solstra extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_solstra','id_user', 'nama_sales', 'nama_spv', 'masalah', 'tanggal_msl', 'waktu_msl', 'solusi','waktu_sol','tanggal_sol','status'
    ];
    protected $table="solusistrategi";
}
