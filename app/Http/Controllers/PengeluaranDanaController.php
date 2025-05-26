<?php

namespace App\Http\Controllers;

use App\Models\PengeluaranDana;
use Illuminate\Http\Request;

class PengeluaranDanaController extends Controller
{
    public function index()
    {
        return view('pages.pengeluaran_dana.index', [
            'daftarPengeluaranDana' => PengeluaranDana::all()
        ]);
    }
}
