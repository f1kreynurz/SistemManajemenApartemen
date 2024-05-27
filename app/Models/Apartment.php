<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'jumlah_lantai',
        'jumlah_unit',
        'id_penyewa',
    ];

    protected $table = 'apartments';
}
