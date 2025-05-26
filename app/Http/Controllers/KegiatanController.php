<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('pages.kegiatan.index', [
            'daftarKegiatan' => Kegiatan::all()
        ]);
    }
}
