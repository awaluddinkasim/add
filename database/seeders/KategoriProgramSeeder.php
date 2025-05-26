<?php

namespace Database\Seeders;

use App\Models\KategoriProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriProgram::insert([
            [
                'nama' => 'Pendidikan',
                'keterangan' => 'Program yang berkaitan dengan pendidikan dan pelatihan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Pemberdayaan',
                'keterangan' => 'Program yang berkaitan dengan pemberdayaan masyarakat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Kesehatan',
                'keterangan' => 'Program yang berkaitan dengan kesehatan dan kesejahteraan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Infrastruktur',
                'keterangan' => 'Program yang berkaitan dengan infrastruktur dan pengembangan',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
