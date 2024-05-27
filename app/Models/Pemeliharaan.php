<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_unit',
        'tanggal',
        'deskripsi',
        'biaya',
    ];

    protected $table = 'pemeliharaan';
}
