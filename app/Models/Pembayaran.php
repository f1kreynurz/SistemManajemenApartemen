<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontrak;
use App\Models\Penyewa;

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

    public function kontrak()
    {
        return $this->belongsTo(Kontrak::class, 'id_kontrak');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }
}
