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
        //membuat tabel data siswa di database
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('sekolah');
            $table->string('tempat_lahir');
            $table->string('keterangan');
            $table->date('tanggal_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswas');
    }
};
