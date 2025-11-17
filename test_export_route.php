<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

echo "=== TESTING EXPORT ROUTE ===\n\n";

try {
    // Import Excel facade
    $excel = app(\Maatwebsite\Excel\Excel::class);
    
    // Create export instance
    $export = new \App\Exports\LombaExport();
    
    // Try to export to file
    $filename = 'test-export-' . date('Y-m-d') . '.xlsx';
    $path = storage_path('app/' . $filename);
    
    echo "Creating export file: {$filename}\n";
    
    // Use Excel facade to download
    \Maatwebsite\Excel\Facades\Excel::store($export, $filename, 'local');
    
    if (file_exists($path)) {
        $size = filesize($path);
        echo "✓ Export file created successfully!\n";
        echo "  Location: {$path}\n";
        echo "  Size: " . number_format($size) . " bytes\n";
        
        // Clean up
        unlink($path);
        echo "✓ Test file deleted\n";
    } else {
        echo "✗ Export file NOT created\n";
    }
    
} catch (\Throwable $e) {
    echo "✗ ERROR: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo "\nStack trace:\n" . $e->getTraceAsString() . "\n";
}

echo "\n=== TEST COMPLETE ===\n";
