<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_unit',
        'id_penyewa',
        'tanggal_mulai',
        'tanggal_berakhir',
        'biaya_sewa',
    ];

    protected $table = 'kontrak';
}
