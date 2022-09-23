<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'C1', 'C2', 'C3', 'C4', 'SUM', 'created_at', 'updated_at'
    ];
    protected $table="hasil";
}
