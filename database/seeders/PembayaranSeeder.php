<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
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
                'id_kontrak' => 10,
                'tanggal' => '2023-05-01',
                'jumlah' => 3500000.00,
                'metode' => 'KPA',
                'id_penyewa' => 1,
            ],
            [
                'id_kontrak' => 20,
                'tanggal' => '2023-04-15',
                'jumlah' => 4800000.00,
                'metode' => 'Tunai',
                'id_penyewa' => 2,
            ],
            [
                'id_kontrak' => 30,
                'tanggal' => '2023-03-20',
                'jumlah' => 3200000.00,
                'metode' => 'Transfer Bank',
                'id_penyewa' => 3,
            ],
            [
                'id_kontrak' => 40,
                'tanggal' => '2023-02-28',
                'jumlah' => 3700000.00,
                'metode' => 'Tunai Bertahap',
                'id_penyewa' => 4,
            ],
            [
                'id_kontrak' => 50,
                'tanggal' => '2023-01-10',
                'jumlah' => 4500000.00,
                'metode' => 'KPA',
                'id_penyewa' => 5,
            ],
        ];

        foreach ($data as $pembayaran) {
            Pembayaran::create($pembayaran);
        }
    }
}
