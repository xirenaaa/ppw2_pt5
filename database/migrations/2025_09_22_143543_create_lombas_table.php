<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lombas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penyelenggara');
            $table->text('deskripsi');
            $table->enum('kategori', ['Online', 'Offline']);
            $table->decimal('harga', 10, 2);
            $table->date('tgl_lomba');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lombas');
    }
};