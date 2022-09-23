<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'no_ktp', 'nama_kar', 'jenis_klmn', 'alamat', 'tempat_lhr', 'tgl_lahir', 'agama','no_hp','pendidikan','goldar', 'status','no_bpjs','jml_anak','jabatan','tgmsk_awal','nm_ats'
    ];
    protected $table="karyawan";
}
