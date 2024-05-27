<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_apartemen',
        'nomor_unit',
        'tipe',
        'luas',
        'id_penyewa',
    ];

    protected $table = 'units';
}
