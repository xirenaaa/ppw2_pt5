<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LombaSeeder extends Seeder
{
    public function run(): void
    {
        // TAMBAHKAN BARIS INI untuk mengosongkan tabel
        DB::table('bidang_lombas')->truncate();

        DB::table('bidang_lombas')->insert([
            // ... isi data ...
        ]);
    }
}