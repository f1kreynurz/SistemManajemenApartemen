<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kontrak',
        'tanggal',
        'jumlah',
        'metode',
        'id_penyewa',
    ];

    protected $table = 'pembayaran';
}
