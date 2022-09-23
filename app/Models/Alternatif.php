<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_alter','nama_kar', 'C1', 'C2', 'C3', 'C4',
    ];
    protected $table="nilai";
}
