<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenerimaanDana;
use App\Models\SumberDana;
use App\Traits\FileUpload;

class PenerimaanDanaController extends Controller
{
    use FileUpload;

    public function index()
    {
        return view('pages.penerimaan_dana.index', [
            'daftarSumberDana' => SumberDana::all(),
            'daftarPenerimaanDana' => PenerimaanDana::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate($request, [
            'tahun_anggaran' => 'required|numeric',
            'sumber_dana_id' => 'required',
            'tanggal_penerimaan' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
            'bukti_penerimaan' => 'required|file',
        ]);

        $data['pencatat'] = auth()->user()->nama;
        $data['bukti_penerimaan'] = $this->uploadFile($request, 'files');

        PenerimaanDana::create($data);

        return back()->with('success', 'Penerimaan Dana berhasil ditambahkan');
    }

    public function destroy(PenerimaanDana $penerimaanDana)
    {
        $this->deleteFile($penerimaanDana->bukti_penerimaan, 'files');

        $penerimaanDana->delete();
        return back()->with('success', 'Penerimaan Dana berhasil dihapus');
    }
}
