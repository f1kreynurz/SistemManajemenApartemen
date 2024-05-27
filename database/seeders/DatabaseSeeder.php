<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\Fasilitas;
use App\Models\Unit;
use App\Models\Penyewa;
use App\Models\Kontrak;
use App\Models\Pemeliharaan;
use App\Models\Pembayaran;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ApartmentSeeder::class,
            FasilitasSeeder::class,
            UnitSeeder::class,
            PenyewaSeeder::class,
            KontrakSeeder::class,
            PembayaranSeeder::class,
            PemeliharaanSeeder::class,
            UserSeeder::class
        ]);
    }
}
