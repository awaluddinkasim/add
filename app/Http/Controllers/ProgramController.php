<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('pages.program.index', [
            'daftarProgram' => Program::all()
        ]);
    }
}
