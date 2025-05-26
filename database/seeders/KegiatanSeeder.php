<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::insert([
            [
                'program_id' => 1,
                'nama' => 'Seleksi Beasiswa SMA',
                'keterangan' => 'Program pendidikan untuk anak-anak',
                'tanggal_kegiatan' => now(),
                'jumlah_hari' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'program_id' => 2,
                'nama' => 'Pelaksanaan Vaksinasi Tahap 1',
                'keterangan' => 'Program vaksinasi massal untuk masyarakat',
                'tanggal_kegiatan' => now(),
                'jumlah_hari' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
