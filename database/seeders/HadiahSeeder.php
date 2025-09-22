<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HadiahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('hadiahs')->insert([
            ['id_lomba' => 1, 'posisi' => 'Diamond Medalist', 'nominal' => 'Unknown', 'deskripsi' => 'Uang Tunai, Plakat/Piala, Medali, Sertifikat, Beasiswa kelas Math Champs/Kalananti'],
            ['id_lomba' => 1, 'posisi' => 'Gold Medalist', 'nominal' => '0', 'deskripsi' => 'Uang Tunai, Medali, Sertifikat, Voucher belajar kelas Math Champs/Kalananti'],
            ['id_lomba' => 13, 'posisi' => 'Winner', 'nominal' => '0', 'deskripsi' => 'Uang tunai + Piala + Sertifikat'],
            ['id_lomba' => 13, 'posisi' => '1st Runner Up', 'nominal' => '0', 'deskripsi' => 'Uang tunai + Piala + Sertifikat'],
            // ... LANJUTKAN DENGAN SEMUA DATA HADIAH DARI FILE SQL ...
        ]);
    }
}