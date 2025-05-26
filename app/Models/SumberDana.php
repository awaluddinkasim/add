<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SumberDana extends Model
{
    protected $table = 'sumber_dana';

    protected $fillable = [
        'nama',
        'keterangan',
    ];

    public function penerimaanDana()
    {
        return $this->hasMany(PenerimaanDana::class, 'sumber_dana_id');
    }
}
