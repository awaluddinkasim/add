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
}
