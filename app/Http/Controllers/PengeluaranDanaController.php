<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\PengeluaranDana;
use Illuminate\Http\Request;

class PengeluaranDanaController extends Controller
{
    public function index()
    {
        return view('pages.pengeluaran_dana.index', [
            'daftarKegiatan' => Kegiatan::all(),
            'daftarPengeluaranDana' => PengeluaranDana::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kegiatan_id' => 'required',
            'tanggal_pengeluaran' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $data['pencatat'] = auth()->user()->nama;

        PengeluaranDana::create($data);

        return back()->with('success', 'Pengeluaran Dana berhasil ditambahkan');
    }

    public function destroy(PengeluaranDana $pengeluaranDana)
    {
        $pengeluaranDana->delete();

        return back()->with('success', 'Pengeluaran Dana berhasil dihapus');
    }
}
