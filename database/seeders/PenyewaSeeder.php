<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyewa;

class PenyewaSeeder extends Seeder
{
    public function run()
    {
        $penyewas = [
            [
                'nama' => 'Reia Samantha',
                'nomor_telepon' => '081234567890',
                'email' => 'reia.samantha@email.com',
                'pekerjaan' => 'Karyawan Swasta',
                'id_apartemen' => 1,
                'id_user' => 1, // ID user yang sesuai
            ],
            [
                'nama' => 'Sitha cleora',
                'nomor_telepon' => '089876543210',
                'email' => 'sitha.cleora@email.com',
                'pekerjaan' => 'Guru',
                'id_apartemen' => 2,
                'id_user' => 2, // ID user yang sesuai
            ],
            [
                'nama' => 'Adi Pratama',
                'nomor_telepon' => '085678901234',
                'email' => 'adi.pratama@email.com',
                'pekerjaan' => 'Dokter',
                'id_apartemen' => 3,
                'id_user' => 3, // ID user yang sesuai
            ],
            [
                'nama' => 'Rico Fabian',
                'nomor_telepon' => '087654321098',
                'email' => 'rico.fabian@email.com',
                'pekerjaan' => 'Pengusaha',
                'id_apartemen' => 4,
                'id_user' => 4, // ID user yang sesuai
            ],
            [
                'nama' => 'Rizal Eroza',
                'nomor_telepon' => '082345678901',
                'email' => 'rizal.eroza@email.com',
                'pekerjaan' => 'Insinyur',
                'id_apartemen' => 5,
                'id_user' => 5, // ID user yang sesuai
            ],
        ];

        foreach ($penyewas as $penyewa) {
            Penyewa::create($penyewa);
        }
    }
}
