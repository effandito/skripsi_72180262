<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_absen', 'id_kary', 'keterangan', 'waktu'
    ];
    protected $table="absen";
}
