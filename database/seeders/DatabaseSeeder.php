<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Admin::create([
            'nama' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);

        $this->call([
            KategoriProgramSeeder::class,
            ProgramSeeder::class,
            KegiatanSeeder::class,
            AnggaranSeeder::class,
            SumberDanaSeeder::class,
            PenerimaanDanaSeeder::class,
            PengeluaranDanaSeeder::class,
        ]);
    }
}
