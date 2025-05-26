<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProgram extends Model
{
    protected $table = 'kategori_program';

    protected $fillable = [
        'nama',
        'keterangan',
    ];
}
