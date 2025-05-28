<?php

namespace App\Http\Controllers;

use App\Models\KategoriProgram;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('pages.program.index', [
            'daftarKategori' => KategoriProgram::all(),
            'daftarProgram' => Program::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'tahun_anggaran' => 'required|numeric',
            'kategori_program_id' => 'required',
            'keterangan' => 'required',
        ]);

        Program::create($data);

        return back()->with('success', 'Program berhasil ditambahkan');
    }

    public function edit(Program $program)
    {
        return view('pages.program.edit', [
            'program' => $program
        ]);
    }

    public function update(Request $request, Program $program)
    {
        $data = $request->validate([
            'nama' => 'required',
            'tahun_anggaran' => 'required',
            'kategori_program_id' => 'required',
            'keterangan' => 'required',
        ]);

        $program->update($data);

        return back()->with('success', 'Program berhasil diubah');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return back()->with('success', 'Program berhasil dihapus');
    }
}
