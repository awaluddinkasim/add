<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';

    protected $fillable = [
        'nama',
        'tahun_anggaran',
        'kategori_program_id',
        'keterangan',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriProgram::class, 'kategori_program_id');
    }
}
