<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Program;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('pages.kegiatan.index', [
            'daftarProgram' => Program::all(),
            'daftarKegiatan' => Kegiatan::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'program_id' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
            'tanggal_kegiatan' => 'required',
            'jumlah_hari' => 'required',
        ]);

        Kegiatan::create($data);

        return back()->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('pages.kegiatan.edit', [
            'kegiatan' => $kegiatan
        ]);
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $data = $request->validate([
            'program_id' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
            'tanggal_kegiatan' => 'required',
            'jumlah_hari' => 'required',
        ]);

        $kegiatan->update($data);

        return back()->with('success', 'Kegiatan berhasil diubah');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return back()->with('success', 'Kegiatan berhasil dihapus');
    }
}
