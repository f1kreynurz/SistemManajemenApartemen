<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penyewa;
use App\Models\Unit;
use App\Models\Fasilitas;

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

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    public function units()
    {
        return $this->hasMany(Unit::class, 'id_apartemen');
    }

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'id_apartemen');
    }
}
