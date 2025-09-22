<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lomba;
use Illuminate\Support\Carbon;

class LombaSeeder extends Seeder
{
    public function run(): void
    {
        Lomba::truncate();

        $penyelenggara = ['Universitas Gadjah Mada', 'Institut Teknologi Bandung', 'Universitas Indonesia', 'Universitas Brawijaya', 'Telkom University'];
        
        for ($i = 0; $i < 20; $i++) {
            Lomba::create([
                'judul' => 'Kompetisi ' . fake()->words(3, true),
                'penyelenggara' => $penyelenggara[array_rand($penyelenggara)],
                'deskripsi' => fake()->paragraph(2),
                'kategori' => fake()->randomElement(['Online', 'Offline']),
                'harga' => fake()->numberBetween(50000, 200000),
                'tgl_lomba' => Carbon::now()->addDays(rand(10, 60)),
            ]);
        }
    }
}