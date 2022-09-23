<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_kons','prshn', 'alamat', 'npwp', 'telp', 'email', 'nama_cp','no_hp','pesan','ttl_hrg'
    ];
    protected $table="konsumen";
}
