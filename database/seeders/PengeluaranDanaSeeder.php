<?php

namespace Database\Seeders;

use App\Models\PengeluaranDana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengeluaranDanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PengeluaranDana::insert([
            [
                'kegiatan_id' => 1,
                'pencatat' => 'Ajwan',
                'tanggal_pengeluaran' => now(),
                'jumlah' => 1000000,
                'keterangan' => 'Pembayaran pertama untuk seleksi beasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 2,
                'pencatat' => 'Ajwan',
                'tanggal_pengeluaran' => now(),
                'jumlah' => 50000000,
                'keterangan' => 'Pelayanan vaksinasi tahap 1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
