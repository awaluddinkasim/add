<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenerimaanDana;

class PenerimaanDanaController extends Controller
{
    public function index()
    {
        return view('pages.penerimaan_dana.index', [
            'daftarPenerimaanDana' => PenerimaanDana::all()
        ]);
    }
}
