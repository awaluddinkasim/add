<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::insert([
            [
                'nama' => 'Beasiswa Pendidikan',
                'tahun_anggaran' => '2025',
                'kategori_program_id' => 1,
                'keterangan' => 'Program beasiswa untuk siswa berprestasi',
            ],
            [
                'nama' => 'Vaksinasi Massal',
                'tahun_anggaran' => '2025',
                'kategori_program_id' => 3,
                'keterangan' => 'Program vaksinasi massal untuk masyarakat',
            ]
        ]);
    }
}
