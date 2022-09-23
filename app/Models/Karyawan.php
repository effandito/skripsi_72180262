<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_karyawan', 'id_user','nama_kar','no_ktp', 'jenis_klmn', 'alamat', 'no_hp', 'pendidikan', 'goldar','status','no_bpjs','jml_ank' , 'jabatan', 'tgmsk_awal', 'thmsk_awal', 'nm_ats'
    ];
    protected $table="karyawan";
}
