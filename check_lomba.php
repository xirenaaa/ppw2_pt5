<?php

use Illuminate\Support\Facades\DB;

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== CHECKING LOMBA DATA ===\n\n";

// Get first lomba with relationships
$lomba = App\Models\Lomba::with(['bidang', 'hadiah'])->first();

if ($lomba) {
    echo "ID Lomba: {$lomba->id_lomba}\n";
    echo "Nama Lomba: {$lomba->nama_lomba}\n";
    echo "Gambar Path: {$lomba->gambar}\n";
    echo "ID Bidang: {$lomba->id_bidang}\n";
    
    echo "\n--- BIDANG RELATION ---\n";
    if ($lomba->bidang) {
        echo "Bidang ID: {$lomba->bidang->id_bidang}\n";
        echo "Nama Bidang: {$lomba->bidang->nama_bidang}\n";
    } else {
        echo "ERROR: Bidang relation is NULL!\n";
        echo "Checking if bidang exists in database...\n";
        $bidangExists = DB::table('bidang_lombas')->where('id_bidang', $lomba->id_bidang)->first();
        if ($bidangExists) {
            echo "Bidang EXISTS in database: {$bidangExists->nama_bidang}\n";
        } else {
            echo "Bidang NOT FOUND in database!\n";
        }
    }
    
    echo "\n--- HADIAH RELATION ---\n";
    if ($lomba->hadiah && count($lomba->hadiah) > 0) {
        echo "Total Hadiah: " . count($lomba->hadiah) . "\n";
        foreach ($lomba->hadiah as $h) {
            echo "  - {$h->hadiah}\n";
        }
    } else {
        echo "No hadiah found\n";
    }
    
    echo "\n--- CHECKING IMAGE FILE ---\n";
    $imagePath = public_path($lomba->gambar);
    if (file_exists($imagePath)) {
        echo "✓ Image file EXISTS: {$imagePath}\n";
    } else {
        echo "✗ Image file NOT FOUND: {$imagePath}\n";
    }
} else {
    echo "No lomba found in database!\n";
}
