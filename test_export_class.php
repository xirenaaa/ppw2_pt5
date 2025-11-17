<?php

require __DIR__.'/vendor/autoload.php';

echo "Testing Maatwebsite Excel package...\n\n";

// Test 1: Check if FromCollection interface exists
if (interface_exists('Maatwebsite\\Excel\\Concerns\\FromCollection')) {
    echo "✓ FromCollection interface EXISTS\n";
} else {
    echo "✗ FromCollection interface NOT FOUND\n";
}

// Test 2: Check if WithHeadings interface exists
if (interface_exists('Maatwebsite\\Excel\\Concerns\\WithHeadings')) {
    echo "✓ WithHeadings interface EXISTS\n";
} else {
    echo "✗ WithHeadings interface NOT FOUND\n";
}

// Test 3: Check if LombaExport class can be loaded
try {
    $lombaExport = new \App\Exports\LombaExport();
    echo "✓ LombaExport class LOADED successfully\n";
} catch (\Throwable $e) {
    echo "✗ LombaExport class FAILED: " . $e->getMessage() . "\n";
}

// Test 4: Check vendor path
$vendorPath = __DIR__ . '/vendor/maatwebsite/excel/src/Concerns/FromCollection.php';
if (file_exists($vendorPath)) {
    echo "✓ FromCollection file EXISTS at vendor path\n";
} else {
    echo "✗ FromCollection file NOT FOUND at vendor path\n";
}

echo "\n=== TEST COMPLETE ===\n";
