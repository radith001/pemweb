<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pastikan role super_admin sudah ada, jika belum buat
        if (!Role::where('name', 'super_admin')->exists()) {
            Role::create(['name' => 'super_admin']);
        }

        // Buat user admin jika belum ada
        if (User::count() == 0) {
            $user = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);

            // Assign role super_admin ke user
            $user->assignRole('super_admin');
        }

        // Panggil seeder lain (misalnya MahasiswaSeeder)
        $this->call([
            KendaraanSeeder::class,
        ]);
    }
}