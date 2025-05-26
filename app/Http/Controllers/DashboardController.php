<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Anggaran;
use App\Models\Kegiatan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PenerimaanDana;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalProgram = Program::count();
        $totalKegiatan = Kegiatan::count();
        $totalAnggaran = Anggaran::all()->sum('total_harga');
        $totalPenerimaanDana = PenerimaanDana::sum('jumlah');

        $recentKegiatan = Kegiatan::with('program')->orderBy('tanggal_kegiatan', 'desc')->take(5)->get();
        $recentPenerimaanDana = PenerimaanDana::with('sumberDana')->orderBy('tanggal_penerimaan', 'desc')->take(5)->get();

        return view('pages.dashboard', [
            'totalProgram' => $totalProgram,
            'totalKegiatan' => $totalKegiatan,
            'totalAnggaran' => $totalAnggaran,
            'totalPenerimaanDana' => $totalPenerimaanDana,
            'recentKegiatan' => $recentKegiatan,
            'recentPenerimaanDana' => $recentPenerimaanDana
        ]);
    }
}
