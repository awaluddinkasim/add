<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index(Kegiatan $kegiatan)
    {
        return view('pages.anggaran.index', [
            'kegiatan' => $kegiatan,
            'daftarAnggaran' => $kegiatan->anggaran
        ]);
    }

    public function store(Request $request, Kegiatan $kegiatan)
    {
        $data = $request->validate([
            'nama' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
        ]);

        $data['kegiatan_id'] = $kegiatan->id;

        Anggaran::create($data);

        return back()->with('success', 'Anggaran berhasil ditambahkan');
    }

    public function destroy(Kegiatan $kegiatan, Anggaran $anggaran)
    {
        $anggaran->delete();

        return back()->with('success', 'Anggaran berhasil dihapus');
    }
}
