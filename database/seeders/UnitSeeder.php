<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
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
                'id_apartemen' => 1,
                'nomor_unit' => '12A',
                'tipe' => 'Studio',
                'luas' => 45,
                'id_penyewa' => 1,
            ],
            [
                'id_apartemen' => 2,
                'nomor_unit' => '8B',
                'tipe' => '2 Kamar',
                'luas' => 75,
                'id_penyewa' => 2,
            ],
            [
                'id_apartemen' => 3,
                'nomor_unit' => '16C',
                'tipe' => '3 Kamar',
                'luas' => 90,
                'id_penyewa' => 3,
            ],
            [
                'id_apartemen' => 4,
                'nomor_unit' => '20D',
                'tipe' => '2 Kamar',
                'luas' => 70,
                'id_penyewa' => 4,
            ],
            [
                'id_apartemen' => 5,
                'nomor_unit' => '5E',
                'tipe' => 'Studio',
                'luas' => 40,
                'id_penyewa' => 5,
            ],
        ];

        foreach ($data as $unit) {
            Unit::create($unit);
        }
    }
}
