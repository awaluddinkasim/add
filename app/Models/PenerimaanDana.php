<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenerimaanDana extends Model
{
    protected $table = 'penerimaan_dana';

    protected $fillable = [
        'tahun_anggaran',
        'sumber_dana_id',
        'pencatat',
        'tanggal_penerimaan',
        'jumlah',
        'keterangan',
        'bukti_penerimaan',
    ];

    public function sumberDana(): BelongsTo
    {
        return $this->belongsTo(SumberDana::class, 'sumber_dana_id');
    }
}
