<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangLombaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bidang_lombas')->truncate();

        $now = now();
        
        DB::table('bidang_lombas')->insert([
            ['id_bidang' => 11, 'nama_bidang' => 'Teknologi Informasi', 'created_at' => $now],
            ['id_bidang' => 12, 'nama_bidang' => 'Seni dan Budaya', 'created_at' => $now],
            ['id_bidang' => 13, 'nama_bidang' => 'Olahraga', 'created_at' => $now],
            ['id_bidang' => 14, 'nama_bidang' => 'Akademik', 'created_at' => $now],
            ['id_bidang' => 15, 'nama_bidang' => 'Agama', 'created_at' => $now],
            ['id_bidang' => 16, 'nama_bidang' => 'Akuntansi', 'created_at' => $now],
            ['id_bidang' => 17, 'nama_bidang' => 'Artikel', 'created_at' => $now],
            ['id_bidang' => 18, 'nama_bidang' => 'Desain Grafis', 'created_at' => $now],
            ['id_bidang' => 19, 'nama_bidang' => 'Fotografi', 'created_at' => $now],
            ['id_bidang' => 20, 'nama_bidang' => 'Kewirausahaan', 'created_at' => $now],
            ['id_bidang' => 21, 'nama_bidang' => 'Robotika', 'created_at' => $now],
            ['id_bidang' => 22, 'nama_bidang' => 'Sains', 'created_at' => $now],
            ['id_bidang' => 23, 'nama_bidang' => 'Startup', 'created_at' => $now],
            ['id_bidang' => 24, 'nama_bidang' => 'Web Development', 'created_at' => $now],
            ['id_bidang' => 25, 'nama_bidang' => 'Pidato', 'created_at' => $now],
            ['id_bidang' => 26, 'nama_bidang' => 'Musik', 'created_at' => $now],
            ['id_bidang' => 27, 'nama_bidang' => 'Tari', 'created_at' => $now],
            ['id_bidang' => 28, 'nama_bidang' => 'Debat', 'created_at' => $now],
            ['id_bidang' => 29, 'nama_bidang' => 'Lingkungan', 'created_at' => $now],
            ['id_bidang' => 30, 'nama_bidang' => 'Kepemimpinan', 'created_at' => $now],
            ['id_bidang' => 31, 'nama_bidang' => 'Inovasi Sosial', 'created_at' => $now],
            ['id_bidang' => 32, 'nama_bidang' => 'Penelitian', 'created_at' => $now],
            ['id_bidang' => 33, 'nama_bidang' => 'Karya Tulis Ilmiah', 'created_at' => $now],
            ['id_bidang' => 57, 'nama_bidang' => 'Saintek', 'created_at' => $now],
            ['id_bidang' => 58, 'nama_bidang' => 'Sosbud', 'created_at' => $now],
            ['id_bidang' => 59, 'nama_bidang' => 'Esai', 'created_at' => $now],
            ['id_bidang' => 60, 'nama_bidang' => 'Desain Produk', 'created_at' => $now],
            ['id_bidang' => 61, 'nama_bidang' => 'Game Development', 'created_at' => $now],
            ['id_bidang' => 62, 'nama_bidang' => 'Artificial Intelligence', 'created_at' => $now],
            ['id_bidang' => 63, 'nama_bidang' => 'Software Development', 'created_at' => $now],
            ['id_bidang' => 64, 'nama_bidang' => 'Cycber Security', 'created_at' => $now],
            ['id_bidang' => 65, 'nama_bidang' => 'Lainnya', 'created_at' => $now],
            ['id_bidang' => 67, 'nama_bidang' => 'Bisnis', 'created_at' => $now]
        ]);
    }
}