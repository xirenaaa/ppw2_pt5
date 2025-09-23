<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lombas', function (Blueprint $table) {
            $table->integer('id_lomba')->primary();
            $table->string('nama_lomba');
            $table->text('deskripsi');
            $table->date('tgl_lomba');
            $table->string('lokasi');
            $table->string('link_daftar', 500);
            $table->string('gambar');
            $table->string('penyelenggara_lomba');
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->integer('id_bidang')->nullable();
            $table->enum('kategori_peserta', ['SD', 'SMP', 'SMA', 'Mahasiswa', 'Umum', 'Pelajar'])->default('Umum');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lombas');
    }
};