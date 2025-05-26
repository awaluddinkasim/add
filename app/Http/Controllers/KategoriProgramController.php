<?php

namespace App\Http\Controllers;

use App\Models\KategoriProgram;
use Illuminate\Http\Request;

class KategoriProgramController extends Controller
{
    public function index()
    {
        return view('pages.kategori_program.index', [
            'daftarKategori' => KategoriProgram::all()
        ]);
    }
}
