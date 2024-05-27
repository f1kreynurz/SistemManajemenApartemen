<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pemeliharaan;

class PemeliharaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_unit' => 101,
                'tanggal' => '2023-05-01',
                'deskripsi' => 'Perbaikan AC',
                'biaya' => 600000.00,
            ],
            [
                'id_unit' => 102,
                'tanggal' => '2023-04-15',
                'deskripsi' => 'Pengecatan dinding',
                'biaya' => 1200000.00,
            ],
            [
                'id_unit' => 103,
                'tanggal' => '2023-03-20',
                'deskripsi' => 'Ganti karpet',
                'biaya' => 800000.00,
            ],
            [
                'id_unit' => 104,
                'tanggal' => '2023-02-28',
                'deskripsi' => 'Perbaikan keran air',
                'biaya' => 250000.00,
            ],
            [
                'id_unit' => 105,
                'tanggal' => '2023-01-10',
                'deskripsi' => 'Pembersihan saluran air',
                'biaya' => 350000.00,
            ],
        ];

        foreach ($data as $pemeliharaan) {
            Pemeliharaan::create($pemeliharaan);
        }
    }
}
