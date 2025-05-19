<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::create([
            'merek_kendaraan' => 'Toyota',
            'tipe_kendaraan' => 'Agya 1.2 G M/T',
            'tahun_produksi' => 2023,
            'warna_body' => 'Putih',
            'harga_pasar' => 165000000,
        ]);

        Kendaraan::create([
            'merek_kendaraan' => 'Honda',
            'tipe_kendaraan' => 'BR-V E CVT',
            'tahun_produksi' => 2022,
            'warna_body' => 'Abu-abu Metalik',
            'harga_pasar' => 290000000,
        ]);

        Kendaraan::create([
            'merek_kendaraan' => 'Daihatsu',
            'tipe_kendaraan' => 'Sigra 1.2 R Deluxe A/T',
            'tahun_produksi' => 2021,
            'warna_body' => 'Hitam',
            'harga_pasar' => 160000000,
        ]);

        Kendaraan::create([
            'merek_kendaraan' => 'Hyundai',
            'tipe_kendaraan' => 'Creta Prime IVT',
            'tahun_produksi' => 2024,
            'warna_body' => 'Merah Mewah',
            'harga_pasar' => 385000000,
        ]);

        Kendaraan::create([
            'merek_kendaraan' => 'Mazda',
            'tipe_kendaraan' => 'Mazda 3 Sedan',
            'tahun_produksi' => 2023,
            'warna_body' => 'Silver',
            'harga_pasar' => 515000000,
        ]);
    }
}
