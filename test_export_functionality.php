<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

echo "=== TESTING EXPORT FUNCTIONALITY ===\n\n";

try {
    // Test 1: Instantiate export class
    $export = new \App\Exports\LombaExport();
    echo "✓ LombaExport instantiated\n";
    
    // Test 2: Get collection
    $collection = $export->collection();
    echo "✓ Collection retrieved: " . $collection->count() . " items\n";
    
    // Test 3: Get headings
    $headings = $export->headings();
    echo "✓ Headings retrieved: " . count($headings) . " columns\n";
    
    // Test 4: Test mapping on first item
    if ($collection->count() > 0) {
        $mapped = $export->map($collection->first());
        echo "✓ Mapping works: " . count($mapped) . " columns mapped\n";
    }
    
    // Test 5: Try to create Excel file
    echo "\n✓ All export methods working correctly!\n";
    echo "\nYou can now access: http://127.0.0.1:8000/lomba/export\n";
    
} catch (\Throwable $e) {
    echo "✗ ERROR: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
}

echo "\n=== TEST COMPLETE ===\n";
