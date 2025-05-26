<?php

namespace Database\Seeders;

use App\Models\SumberDana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SumberDanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SumberDana::insert([
            [
                'nama' => 'APBN',
                'keterangan' => 'Anggaran Pendapatan dan Belanja Negara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'APBD Provinsi',
                'keterangan' => 'Anggaran Pendapatan dan Belanja Daerah Tingkat Provinsi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'APBD Kabupaten/Kota',
                'keterangan' => 'Anggaran Pendapatan dan Belanja Daerah Tingkat Kabupaten/Kota',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
