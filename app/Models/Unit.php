<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartment;
use App\Models\Penyewa;
use App\Models\Pemeliharaan;
use App\Models\Kontrak;

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

    public function apartment()
    {
        return $this->belongsTo(Apartment::class, 'id_apartemen');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    public function pemeliharaan()
    {
        return $this->hasMany(Pemeliharaan::class, 'id_unit');
    }

    public function kontrak()
    {
        return $this->hasOne(Kontrak::class, 'id_unit');
    }
}
