<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'program_id',
        'nama',
        'keterangan',
        'tanggal_kegiatan',
        'jumlah_hari',
    ];


    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function anggaran()
    {
        return $this->hasMany(Anggaran::class, 'kegiatan_id');
    }

    public function pengeluaranDana()
    {
        return $this->hasOne(PengeluaranDana::class, 'kegiatan_id');
    }

    public function totalAnggaran(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->anggaran->sum('total_harga'),
        );
    }
}
