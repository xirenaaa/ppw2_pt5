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
            ['id_bidang' => 11, 'nama_bidang' => 'Teknologi Informasi'],
            ['id_bidang' => 12, 'nama_bidang' => 'Seni dan Budaya'],
            ['id_bidang' => 13, 'nama_bidang' => 'Olahraga'],
            ['id_bidang' => 14, 'nama_bidang' => 'Akademik'],
            ['id_bidang' => 15, 'nama_bidang' => 'Agama'],
            ['id_bidang' => 16, 'nama_bidang' => 'Akuntansi'],
            ['id_bidang' => 17, 'nama_bidang' => 'Artikel'],
            ['id_bidang' => 18, 'nama_bidang' => 'Desain Grafis'],
            ['id_bidang' => 19, 'nama_bidang' => 'Fotografi'],
            ['id_bidang' => 20, 'nama_bidang' => 'Kewirausahaan'],
            ['id_bidang' => 21, 'nama_bidang' => 'Robotika'],
            ['id_bidang' => 22, 'nama_bidang' => 'Sains'],
            ['id_bidang' => 23, 'nama_bidang' => 'Startup'],
            ['id_bidang' => 24, 'nama_bidang' => 'Web Development'],
            ['id_bidang' => 25, 'nama_bidang' => 'Pidato'],
            ['id_bidang' => 26, 'nama_bidang' => 'Musik'],
            ['id_bidang' => 27, 'nama_bidang' => 'Tari'],
            ['id_bidang' => 28, 'nama_bidang' => 'Debat'],
            ['id_bidang' => 29, 'nama_bidang' => 'Lingkungan'],
            ['id_bidang' => 30, 'nama_bidang' => 'Kepemimpinan'],
            ['id_bidang' => 31, 'nama_bidang' => 'Inovasi Sosial'],
            ['id_bidang' => 32, 'nama_bidang' => 'Penelitian'],
            ['id_bidang' => 33, 'nama_bidang' => 'Karya Tulis Ilmiah'],
            ['id_bidang' => 57, 'nama_bidang' => 'Saintek'],
            ['id_bidang' => 58, 'nama_bidang' => 'Sosbud'],
            ['id_bidang' => 59, 'nama_bidang' => 'Esai'],
            ['id_bidang' => 60, 'nama_bidang' => 'Desain Produk'],
            ['id_bidang' => 61, 'nama_bidang' => 'Game Development'],
            ['id_bidang' => 62, 'nama_bidang' => 'Artificial Intelligence'],
            ['id_bidang' => 63, 'nama_bidang' => 'Software Development'],
            ['id_bidang' => 64, 'nama_bidang' => 'Cycber Security'],
            ['id_bidang' => 65, 'nama_bidang' => 'Lainnya'],
            ['id_bidang' => 67, 'nama_bidang' => 'Bisnis'],
        ]);
    }
}