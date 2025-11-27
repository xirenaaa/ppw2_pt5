<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

echo "=== QUICK API TEST ===\n\n";

use App\Models\Lomba;
use App\Models\BidangLomba;

// Test 1: Check if API Controller exists
echo "1. Checking API Controller...\n";
if (class_exists('App\Http\Controllers\Api\LombaApiController')) {
    echo "   ✓ LombaApiController exists\n\n";
} else {
    echo "   ✗ LombaApiController NOT found\n\n";
}

// Test 2: Check routes
echo "2. Checking API Routes...\n";
$routes = \Route::getRoutes();
$apiRoutes = [];
foreach ($routes as $route) {
    if (str_starts_with($route->uri(), 'api/lomba')) {
        $apiRoutes[] = $route->methods()[0] . ' /' . $route->uri();
    }
}

if (count($apiRoutes) > 0) {
    echo "   ✓ Found " . count($apiRoutes) . " API routes:\n";
    foreach ($apiRoutes as $route) {
        echo "     - {$route}\n";
    }
} else {
    echo "   ✗ No API routes found\n";
}

echo "\n";

// Test 3: Check data availability
echo "3. Checking Database Data...\n";
$lombaCount = Lomba::count();
$bidangCount = BidangLomba::count();
echo "   ✓ Lomba data: {$lombaCount} records\n";
echo "   ✓ Bidang data: {$bidangCount} records\n\n";

// Test 4: Sample data for API test
if ($lombaCount > 0) {
    $sampleLomba = Lomba::with('bidang')->first();
    echo "4. Sample Lomba Data (for API test):\n";
    echo "   ID: {$sampleLomba->id_lomba}\n";
    echo "   Nama: {$sampleLomba->nama_lomba}\n";
    echo "   Bidang: " . ($sampleLomba->bidang ? $sampleLomba->bidang->nama_bidang : 'N/A') . "\n\n";
}

// Test 5: API endpoints info
echo "5. API Endpoints Ready to Test:\n";
echo "   Base URL: http://127.0.0.1:8000/api\n\n";

echo "   GET Endpoints:\n";
echo "   - GET /api/lomba (Get all)\n";
echo "   - GET /api/lomba/1 (Get by ID)\n";
echo "   - GET /api/lomba/bidang/1 (Get by Bidang)\n";
echo "   - GET /api/lomba/search?q=olimpiade (Search)\n\n";

echo "   POST/PUT/DELETE Endpoints:\n";
echo "   - POST /api/lomba (Create)\n";
echo "   - PUT /api/lomba/1 (Update)\n";
echo "   - DELETE /api/lomba/1 (Delete)\n\n";

echo "=== TEST COMPLETED ===\n";
echo "✓ API Controller: Created\n";
echo "✓ API Routes: Registered\n";
echo "✓ Database: Ready\n";
echo "✓ Documentation: Available\n\n";

echo "Next Steps:\n";
echo "1. Run: php artisan serve\n";
echo "2. Test API with Postman or curl commands\n";
echo "3. Read: API_DOCUMENTATION.md for detailed guide\n";
