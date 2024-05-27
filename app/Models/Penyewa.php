<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Apartment;
use App\Models\Unit;
use App\Models\Kontrak;
use App\Models\Pembayaran;

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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function apartment()
    {
        return $this->belongsTo(Apartment::class, 'id_apartemen');
    }

    public function units()
    {
        return $this->hasMany(Unit::class, 'id_penyewa');
    }

    public function kontrak()
    {
        return $this->hasMany(Kontrak::class, 'id_penyewa');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_penyewa');
    }
}
