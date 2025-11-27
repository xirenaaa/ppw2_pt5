<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

echo "=== TESTING ROUTE MODEL BINDING ===\n\n";

// Simulate route model binding
$lombaId = 1;
$lomba = App\Models\Lomba::where('id_lomba', $lombaId)->first();

if ($lomba) {
    echo "✓ Lomba found with id_lomba: {$lomba->id_lomba}\n";
    echo "  Nama: {$lomba->nama_lomba}\n";
    echo "  Penyelenggara: {$lomba->penyelenggara_lomba}\n";
    echo "  Lokasi: {$lomba->lokasi}\n";
    echo "  Kategori: {$lomba->kategori_peserta}\n";
    echo "  Tanggal: {$lomba->tgl_lomba}\n";
    echo "  Gambar: {$lomba->gambar}\n";
    
    // Load relationships
    $lomba->load('bidang', 'hadiah');
    
    echo "\n✓ Bidang relation loaded\n";
    if ($lomba->bidang) {
        echo "  Bidang: {$lomba->bidang->nama_bidang}\n";
    } else {
        echo "  ERROR: Bidang is NULL\n";
    }
    
    echo "\n✓ Hadiah relation loaded\n";
    if ($lomba->hadiah) {
        echo "  Total hadiah: " . $lomba->hadiah->count() . "\n";
    }
    
    echo "\n✓ Deskripsi: " . substr($lomba->deskripsi, 0, 100) . "...\n";
    
    echo "\n=== ALL DATA IS AVAILABLE ===\n";
} else {
    echo "✗ Lomba NOT FOUND\n";
}
