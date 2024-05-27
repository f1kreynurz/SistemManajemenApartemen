<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;
use App\Models\Penyewa;

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

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }
}
