<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penerimaan_dana', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_anggaran');
            $table->foreignId('sumber_dana_id')->constrained('sumber_dana')->cascadeOnDelete();
            $table->string('pencatat');
            $table->date('tanggal_penerimaan');
            $table->integer('jumlah');
            $table->text('keterangan')->nullable();
            $table->string('bukti_penerimaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimaan_dana');
    }
};
