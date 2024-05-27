<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentSeeder extends Seeder
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
                'nama' => 'Apartemen Pondok Indah Residence',
                'alamat' => 'Jl. Metro Pondok Indah, Jakarta Selatan',
                'jumlah_lantai' => 25,
                'jumlah_unit' => 400,
                'id_penyewa' => 1,
            ],
            [
                'nama' => 'Apartemen Tamansari Semanggi',
                'alamat' => 'Jl. Semanggi, Jakarta Pusat',
                'jumlah_lantai' => 20,
                'jumlah_unit' => 300,
                'id_penyewa' => 2,
            ],
            [
                'nama' => 'Apartemen Gunawangsa Merr',
                'alamat' => 'Jl. Gunawangsa, Surabaya',
                'jumlah_lantai' => 18,
                'jumlah_unit' => 250,
                'id_penyewa' => 3,
            ],
            [
                'nama' => 'Apartemen Bale Hinggil',
                'alamat' => 'Jl. Bale Hinggil, Bandung',
                'jumlah_lantai' => 22,
                'jumlah_unit' => 350,
                'id_penyewa' => 4,
            ],
            [
                'nama' => 'Apartemen Yogya Residences',
                'alamat' => 'Jl. Affandi, Yogyakarta',
                'jumlah_lantai' => 16,
                'jumlah_unit' => 200,
                'id_penyewa' => 5,
            ],
        ];

        foreach ($data as $apartment) {
            Apartment::create($apartment);
        }
    }
}
