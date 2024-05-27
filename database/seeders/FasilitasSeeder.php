<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fasilitas;

class FasilitasSeeder extends Seeder
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
                'nama' => 'Kolam Renang',
                'deskripsi' => 'Kolam renang outdoor dengan area berjemur',
                'status' => 'Aktif',
                'jam_operasional' => '07:00 - 19:00',
                'kapasitas' => 20,
            ],
            [
                'id_apartemen' => 2,
                'nama' => 'Gym',
                'deskripsi' => 'Fasilitas gym lengkap dengan peralatan modern',
                'status' => 'Aktif',
                'jam_operasional' => '06:00 - 22:00',
                'kapasitas' => 15,
            ],
            [
                'id_apartemen' => 3,
                'nama' => 'Taman Bermain',
                'deskripsi' => 'Taman bermain anak dengan ayunan dan perosotan',
                'status' => 'Aktif',
                'jam_operasional' => '08:00 - 18:00',
                'kapasitas' => 12,
            ],
            [
                'id_apartemen' => 4,
                'nama' => 'Lapangan Basket',
                'deskripsi' => 'Lapangan basket dengan lampu penerangan',
                'status' => 'Perbaikan',
                'jam_operasional' => '09:00 - 21:00',
                'kapasitas' => 18,
            ],
            [
                'id_apartemen' => 5,
                'nama' => 'Ruang Serbaguna',
                'deskripsi' => 'Ruang serbaguna untuk acara dan pertemuan',
                'status' => 'Aktif',
                'jam_operasional' => '08:00 - 22:00',
                'kapasitas' => 100,
            ],
        ];

        foreach ($data as $fasilitas) {
            Fasilitas::create($fasilitas);
        }
    }
}
