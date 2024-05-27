<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;

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

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit');
    }
}
