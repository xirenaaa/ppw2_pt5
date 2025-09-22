<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangLombaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bidang_lombas')->insert([
            ['id' => 11, 'nama_bidang' => 'Teknologi Informasi'],
            ['id' => 12, 'nama_bidang' => 'Seni dan Budaya'],
            ['id' => 13, 'nama_bidang' => 'Olahraga'],
            ['id' => 14, 'nama_bidang' => 'Akademik'],
            ['id' => 15, 'nama_bidang' => 'Agama'],
            ['id' => 16, 'nama_bidang' => 'Akuntansi'],
            ['id' => 17, 'nama_bidang' => 'Artikel'],
            ['id' => 18, 'nama_bidang' => 'Desain Grafis'],
            ['id' => 19, 'nama_bidang' => 'Fotografi'],
            ['id' => 20, 'nama_bidang' => 'Kewirausahaan'],
            ['id' => 21, 'nama_bidang' => 'Robotika'],
            ['id' => 22, 'nama_bidang' => 'Sains'],
            ['id' => 23, 'nama_bidang' => 'Startup'],
            ['id' => 24, 'nama_bidang' => 'Web Development'],
            ['id' => 25, 'nama_bidang' => 'Pidato'],
            ['id' => 26, 'nama_bidang' => 'Musik'],
            ['id' => 27, 'nama_bidang' => 'Tari'],
            ['id' => 28, 'nama_bidang' => 'Debat'],
            ['id' => 29, 'nama_bidang' => 'Lingkungan'],
            ['id' => 30, 'nama_bidang' => 'Kepemimpinan'],
            ['id' => 31, 'nama_bidang' => 'Inovasi Sosial'],
            ['id' => 32, 'nama_bidang' => 'Penelitian'],
            ['id' => 33, 'nama_bidang' => 'Karya Tulis Ilmiah'],
            ['id' => 57, 'nama_bidang' => 'Saintek'],
            ['id' => 58, 'nama_bidang' => 'Sosbud'],
            ['id' => 59, 'nama_bidang' => 'Esai'],
            ['id' => 60, 'nama_bidang' => 'Desain Produk'],
            ['id' => 61, 'nama_bidang' => 'Game Development'],
            ['id' => 62, 'nama_bidang' => 'Artificial Intelligence'],
            ['id' => 63, 'nama_bidang' => 'Software Development'],
            ['id' => 64, 'nama_bidang' => 'Cycber Security'],
            ['id' => 65, 'nama_bidang' => 'Lainnya'],
            ['id' => 67, 'nama_bidang' => 'Bisnis'],
        ]);
    }
}