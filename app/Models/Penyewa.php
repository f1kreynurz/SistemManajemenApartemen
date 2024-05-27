<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nomor_telepon',
        'email',
        'pekerjaan',
        'id_apartemen',
        'id_user',
    ];

    protected $table = 'penyewa';
}
