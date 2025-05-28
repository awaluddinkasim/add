<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SumberDanaController;
use App\Http\Controllers\PenerimaanDanaController;
use App\Http\Controllers\KategoriProgramController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengeluaranDanaController;

Route::redirect('/', '/dashboard')->name('index');

Route::group(['middleware' => 'guest:admin,user'], function () {
    Route::view('/login', 'login')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('authenticate');
});

Route::group(['middleware' => 'auth:admin,user'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/operator', [UserController::class, 'index'])->name('operator');
    Route::post('/operator', [UserController::class, 'store'])->name('operator.store');
    Route::delete('/operator/{user}', [UserController::class, 'destroy'])->name('operator.destroy');

    Route::group(['prefix' => 'perencanaan'], function () {
        Route::get('/kategori-program', [KategoriProgramController::class, 'index'])->name('kategori-program');
        Route::post('/kategori-program', [KategoriProgramController::class, 'store'])->name('kategori-program.store');
        Route::delete('/kategori-program/{kategoriProgram}', [KategoriProgramController::class, 'destroy'])->name('kategori-program.destroy');

        Route::get('/program', [ProgramController::class, 'index'])->name('program');
        Route::post('/program', [ProgramController::class, 'store'])->name('program.store');
        Route::delete('/program/{program}', [ProgramController::class, 'destroy'])->name('program.destroy');

        Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
        Route::post('/kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
        Route::delete('/kegiatan/{kegiatan}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');

        Route::get('/kegiatan/{kegiatan}/anggaran', [AnggaranController::class, 'index'])->name('anggaran');
        Route::post('/kegiatan/{kegiatan}/anggaran', [AnggaranController::class, 'store'])->name('anggaran.store');
        Route::delete('/kegiatan/{kegiatan}/anggaran/{anggaran}', [AnggaranController::class, 'destroy'])->name('anggaran.destroy');
    });

    Route::group(['prefix' => 'keuangan'], function () {
        Route::get('/sumber-dana', [SumberDanaController::class, 'index'])->name('sumber-dana');
        Route::post('/sumber-dana', [SumberDanaController::class, 'store'])->name('sumber-dana.store');
        Route::delete('/sumber-dana/{sumberDana}', [SumberDanaController::class, 'destroy'])->name('sumber-dana.destroy');

        Route::get('/penerimaan-dana', [PenerimaanDanaController::class, 'index'])->name('penerimaan-dana');
        Route::post('/penerimaan-dana', [PenerimaanDanaController::class, 'store'])->name('penerimaan-dana.store');
        Route::delete('/penerimaan-dana/{penerimaanDana}', [PenerimaanDanaController::class, 'destroy'])->name('penerimaan-dana.destroy');

        Route::get('/pengeluaran-dana', [PengeluaranDanaController::class, 'index'])->name('pengeluaran-dana');
        Route::post('/pengeluaran-dana', [PengeluaranDanaController::class, 'store'])->name('pengeluaran-dana.store');
        Route::delete('/pengeluaran-dana/{pengeluaranDana}', [PengeluaranDanaController::class, 'destroy'])->name('pengeluaran-dana.destroy');
    });

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
