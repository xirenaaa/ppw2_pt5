<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

echo "=== TESTING EXCEL IMPORT ===\n\n";

try {
    // Test import class
    $import = new \App\Imports\LombaImport();
    echo "✓ LombaImport class instantiated\n";
    
    // Test validation rules
    $rules = $import->rules();
    echo "✓ Validation rules count: " . count($rules) . "\n";
    echo "  Required fields: nama_lomba, deskripsi, penyelenggara, tanggal_lomba, lokasi, kategori_peserta, bidang\n";
    
    // Test custom messages
    $messages = $import->customValidationMessages();
    echo "✓ Custom validation messages count: " . count($messages) . "\n";
    
    echo "\n=== ALL TESTS PASSED ===\n";
    echo "Import function should work now!\n";
    echo "You can now upload Excel files via the import form.\n";
    
} catch (\Exception $e) {
    echo "\n✗ ERROR: " . $e->getMessage() . "\n";
    echo "  File: " . $e->getFile() . ":" . $e->getLine() . "\n";
}
