<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    protected $table = 'anggaran';

    protected $fillable = [
        'kegiatan_id',
        'nama',
        'volume',
        'satuan',
        'harga_satuan',
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }

    public function totalHarga(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->harga_satuan * $this->volume,
        );
    }
}
