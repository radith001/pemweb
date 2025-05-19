<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::create([
            'brand' => 'Honda',
            'model' => 'Beat',
            'year' => 2022,
            'color' => 'Hitam',
            'price' => 17000000,
        ]);

        Kendaraan::create([
            'brand' => 'Yamaha',
            'model' => 'NMAX',
            'year' => 2023,
            'color' => 'Silver',
            'price' => 32000000,
        ]);

        Kendaraan::create([
            'brand' => 'Suzuki',
            'model' => 'GSX-R150',
            'year' => 2021,
            'color' => 'Merah',
            'price' => 30000000,
        ]);
 
        Kendaraan::create([
            'brand' => 'Kawasaki',
            'model' => 'Ninja ZX-25R',
            'year' => 2024,
            'color' => 'Hijau',
            'price' => 98000000,
        ]);
    }
}
