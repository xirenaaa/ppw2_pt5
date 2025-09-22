<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangLombaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bidang_lombas')->truncate();

        DB::table('bidang_lombas')->insert([
            // ... isi data ...
        ]);
    }
}