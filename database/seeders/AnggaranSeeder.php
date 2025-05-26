<?php

namespace Database\Seeders;

use App\Models\Anggaran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggaran::insert([
            [
                'kegiatan_id' => 1,
                'nama' => 'Pembuatan soal seleksi',
                'volume' => 1,
                'satuan' => 'Paket',
                'harga_satuan' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 1,
                'nama' => 'Honor panitia seleksi',
                'volume' => 10,
                'satuan' => 'Orang',
                'harga_satuan' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
