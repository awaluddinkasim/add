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

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        KategoriProgram::create($data);

        return back()->with('success', 'Kategori Program berhasil ditambahkan');
    }

    public function destroy(KategoriProgram $kategoriProgram)
    {
        $kategoriProgram->delete();
        return back()->with('success', 'Kategori Program berhasil dihapus');
    }
}
