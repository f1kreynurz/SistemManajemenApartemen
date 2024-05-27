<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontrak;

class KontrakSeeder extends Seeder
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
                'id_penyewa' => 1,
                'tanggal_mulai' => '2023-01-01',
                'tanggal_berakhir' => '2024-12-31',
                'biaya_sewa' => 3500000.00,
            ],
            [
                'id_unit' => 102,
                'id_penyewa' => 2,
                'tanggal_mulai' => '2023-03-01',
                'tanggal_berakhir' => '2025-02-28',
                'biaya_sewa' => 4800000.00,
            ],
            [
                'id_unit' => 103,
                'id_penyewa' => 3,
                'tanggal_mulai' => '2023-05-01',
                'tanggal_berakhir' => '2025-04-30',
                'biaya_sewa' => 3200000.00,
            ],
            [
                'id_unit' => 104,
                'id_penyewa' => 4,
                'tanggal_mulai' => '2023-07-01',
                'tanggal_berakhir' => '2024-06-30',
                'biaya_sewa' => 3700000.00,
            ],
            [
                'id_unit' => 105,
                'id_penyewa' => 5,
                'tanggal_mulai' => '2023-09-01',
                'tanggal_berakhir' => '2025-08-31',
                'biaya_sewa' => 4500000.00,
            ],
        ];

        foreach ($data as $kontrak) {
            Kontrak::create($kontrak);
        }
    }
}
