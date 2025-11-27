<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

echo "=== DIRECT EXPORT TEST ===\n\n";

try {
    $export = new \App\Exports\LombaExport();
    $filename = 'direct-test-' . date('Y-m-d-His') . '.xlsx';
    
    echo "Attempting to create file: {$filename}\n";
    
    // Use the Excel facade properly
    $result = \Maatwebsite\Excel\Facades\Excel::store($export, $filename);
    
    $path = storage_path('app/' . $filename);
    
    if ($result && file_exists($path)) {
        echo "✓ SUCCESS! File created: {$path}\n";
        echo "  Size: " . filesize($path) . " bytes\n";
        unlink($path);
        echo "✓ Cleanup complete\n";
    } else {
        echo "✗ FAILED - Result: " . var_export($result, true) . "\n";
        echo "  Expected path: {$path}\n";
        echo "  File exists: " . (file_exists($path) ? 'YES' : 'NO') . "\n";
    }
    
} catch (\Throwable $e) {
    echo "✗ EXCEPTION: " . $e->getMessage() . "\n";
    echo "  at " . $e->getFile() . ":" . $e->getLine() . "\n";
}

echo "\n=== TEST COMPLETE ===\n";
