<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

echo "=== TESTING LOMBA API ENDPOINTS ===\n\n";

// Base URL
$baseUrl = 'http://127.0.0.1:8000/api';

// Helper function to make API request
function testApiEndpoint($method, $url, $data = null) {
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    
    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: application/json'
        ]);
    }
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return [
        'code' => $httpCode,
        'response' => json_decode($response, true)
    ];
}

echo "Note: Pastikan server Laravel sudah running dengan: php artisan serve\n\n";

// Test 1: GET all lomba
echo "1. Testing GET /api/lomba (Get all lomba)\n";
echo "   URL: {$baseUrl}/lomba\n";
echo "   Expected: 200 OK with array of lomba\n";
echo "   Command: curl -X GET {$baseUrl}/lomba\n\n";

// Test 2: GET single lomba
echo "2. Testing GET /api/lomba/{id} (Get single lomba)\n";
echo "   URL: {$baseUrl}/lomba/1\n";
echo "   Expected: 200 OK with lomba data\n";
echo "   Command: curl -X GET {$baseUrl}/lomba/1\n\n";

// Test 3: POST create lomba
echo "3. Testing POST /api/lomba (Create new lomba)\n";
echo "   URL: {$baseUrl}/lomba\n";
echo "   Expected: 201 Created with new lomba data\n";
echo "   Command: curl -X POST {$baseUrl}/lomba \\\n";
echo "            -H \"Content-Type: application/json\" \\\n";
echo "            -d '{\n";
echo "              \"nama_lomba\": \"Lomba Test API\",\n";
echo "              \"deskripsi\": \"Testing API endpoint\",\n";
echo "              \"penyelenggara\": \"Test Organizer\",\n";
echo "              \"tanggal_lomba\": \"2025-12-31\",\n";
echo "              \"lokasi\": \"Online\",\n";
echo "              \"kategori_peserta\": \"Umum\",\n";
echo "              \"id_bidang\": 1,\n";
echo "              \"status\": \"available\"\n";
echo "            }'\n\n";

// Test 4: PUT update lomba
echo "4. Testing PUT /api/lomba/{id} (Update lomba)\n";
echo "   URL: {$baseUrl}/lomba/1\n";
echo "   Expected: 200 OK with updated lomba data\n";
echo "   Command: curl -X PUT {$baseUrl}/lomba/1 \\\n";
echo "            -H \"Content-Type: application/json\" \\\n";
echo "            -d '{\n";
echo "              \"nama_lomba\": \"Lomba Updated\",\n";
echo "              \"status\": \"closed\"\n";
echo "            }'\n\n";

// Test 5: DELETE lomba
echo "5. Testing DELETE /api/lomba/{id} (Delete lomba)\n";
echo "   URL: {$baseUrl}/lomba/1\n";
echo "   Expected: 200 OK with success message\n";
echo "   Command: curl -X DELETE {$baseUrl}/lomba/1\n\n";

// Test 6: GET lomba by bidang
echo "6. Testing GET /api/lomba/bidang/{id_bidang} (Get lomba by bidang)\n";
echo "   URL: {$baseUrl}/lomba/bidang/1\n";
echo "   Expected: 200 OK with array of lomba in that bidang\n";
echo "   Command: curl -X GET {$baseUrl}/lomba/bidang/1\n\n";

// Test 7: Search lomba
echo "7. Testing GET /api/lomba/search?q={query} (Search lomba)\n";
echo "   URL: {$baseUrl}/lomba/search?q=olimpiade\n";
echo "   Expected: 200 OK with search results\n";
echo "   Command: curl -X GET \"{$baseUrl}/lomba/search?q=olimpiade\"\n\n";

echo "=== RESPONSE FORMAT ===\n\n";

echo "Success Response:\n";
echo "{\n";
echo "  \"success\": true,\n";
echo "  \"message\": \"Data lomba berhasil diambil\",\n";
echo "  \"data\": [...]\n";
echo "}\n\n";

echo "Error Response:\n";
echo "{\n";
echo "  \"success\": false,\n";
echo "  \"message\": \"Error message\",\n";
echo "  \"errors\": {...} // untuk validation errors\n";
echo "}\n\n";

echo "=== HTTP STATUS CODES ===\n";
echo "200 OK - Request berhasil\n";
echo "201 Created - Resource berhasil dibuat\n";
echo "400 Bad Request - Request tidak valid\n";
echo "404 Not Found - Resource tidak ditemukan\n";
echo "422 Unprocessable Entity - Validasi gagal\n";
echo "500 Internal Server Error - Server error\n\n";

echo "=== TESTING DENGAN POSTMAN/INSOMNIA ===\n\n";
echo "Import collection ini ke Postman:\n";
echo "1. GET All: {$baseUrl}/lomba\n";
echo "2. GET By ID: {$baseUrl}/lomba/1\n";
echo "3. POST Create: {$baseUrl}/lomba (with JSON body)\n";
echo "4. PUT Update: {$baseUrl}/lomba/1 (with JSON body)\n";
echo "5. DELETE: {$baseUrl}/lomba/1\n";
echo "6. GET By Bidang: {$baseUrl}/lomba/bidang/1\n";
echo "7. Search: {$baseUrl}/lomba/search?q=olimpiade\n\n";

echo "=== VALIDATION RULES ===\n\n";
echo "POST/PUT Required Fields:\n";
echo "- nama_lomba: string, max 255 (required)\n";
echo "- deskripsi: string (required)\n";
echo "- penyelenggara: string, max 255 (required)\n";
echo "- tanggal_lomba: date format YYYY-MM-DD (required)\n";
echo "- lokasi: enum (Online, Offline, Hybrid) (required)\n";
echo "- kategori_peserta: enum (SD, SMP, SMA, Mahasiswa, Umum, Pelajar) (required)\n";
echo "- id_bidang: integer, must exist in database (required)\n";
echo "- link_daftar: valid URL (optional)\n";
echo "- status: enum (available, closed, coming_soon) (optional)\n";
echo "- gambar: image file (jpeg, png, jpg, gif), max 2MB (optional)\n\n";

echo "=== TEST COMPLETED ===\n";
echo "Untuk test real API, jalankan perintah curl di atas atau gunakan Postman/Insomnia.\n";
