<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ketua');
            $table->string('jumlah_rombongan');
            $table->string('telp');
            $table->string('email');
            $table->string('tujuan');
            $table->string('maksud_tujuan');
            $table->string('bukti_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pengajuans');
    }
};
