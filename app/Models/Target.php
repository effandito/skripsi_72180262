<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_target','wilayah', 'target_kunjung', 'target_jual', 'nama', 'pmbr_kuasa','tahun'
    ];
    protected $table="target";
}
