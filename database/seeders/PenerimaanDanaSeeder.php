<?php

namespace Database\Seeders;

use App\Models\PenerimaanDana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerimaanDanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PenerimaanDana::insert([
            [
                'tahun_anggaran' => 2025,
                'sumber_dana_id' => 1,
                'pencatat' => 'Ajwan',
                'tanggal_penerimaan' => now(),
                'jumlah' => 500000000,
                'keterangan' => 'Dana tahap pertama untuk program pendidikan',
                'bukti_penerimaan' => 'bukti-penerimaan-1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
