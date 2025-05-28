<?php

namespace App\Http\Controllers;

use App\Models\SumberDana;
use Illuminate\Http\Request;

class SumberDanaController extends Controller
{
    public function index()
    {
        return view('pages.sumber-dana.index', [
            'daftarSumberDana' => SumberDana::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        SumberDana::create($data);

        return back()->with('success', 'Sumber Dana berhasil ditambahkan');
    }

    public function update(Request $request, SumberDana $sumberDana)
    {
        $data = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        $sumberDana->update($data);

        return back()->with('success', 'Sumber Dana berhasil diubah');
    }

    public function destroy(SumberDana $sumberDana)
    {
        $sumberDana->delete();

        return back()->with('success', 'Sumber Dana berhasil dihapus');
    }
}
