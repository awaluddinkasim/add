<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengeluaranDana extends Model
{
    protected $table = 'pengeluaran_dana';

    protected $fillable = [
        'kegiatan_id',
        'pencatat',
        'tanggal_pengeluaran',
        'jumlah',
        'keterangan',
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
}
