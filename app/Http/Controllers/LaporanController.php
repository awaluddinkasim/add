<?php

namespace App\Http\Controllers;

use App\Models\PenerimaanDana;
use App\Models\PengeluaranDana;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('jenis') && $request->get('jenis') != '') {
            $jenis = $request->get('jenis');
            if ($jenis == 'penerimaan') {
                $penerimaanDana = PenerimaanDana::with('sumberDana')
                    ->orderBy('tanggal_penerimaan', 'desc')
                    ->get();

                $data = [
                    'penerimaanDana' => $penerimaanDana,
                ];

                $view = 'pdf.penerimaan-dana';
            } elseif ($jenis == 'pengeluaran') {
                $pengeluaranDana = PengeluaranDana::with('kegiatan')
                    ->orderBy('tanggal_pengeluaran', 'desc')
                    ->get();

                // Data untuk view
                $data = [
                    'pengeluaranDana' => $pengeluaranDana,
                ];

                $view = 'pdf.pengeluaran-dana';
            } else {
                return abort(404);
            }

            $pdf = Pdf::loadView($view, $data);
            return $pdf->stream();
        }


        return view('laporan');
    }
}
