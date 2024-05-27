<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartment;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_apartemen',
        'nama',
        'deskripsi',
        'status',
        'jam_operasional',
        'kapasitas',
    ];

    protected $table = 'fasilitas';

    public function apartment()
    {
        return $this->belongsTo(Apartment::class, 'id_apartemen');
    }
}
