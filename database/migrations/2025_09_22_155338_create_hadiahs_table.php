<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hadiahs', function (Blueprint $table) {
            $table->integer('id_hadiah');
            $table->integer('id_lomba');
            $table->string('posisi', 50);
            $table->string('nominal', 50)->nullable();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hadiahs');
    }
};