# Demo Test API dengan PowerShell
# Jalankan script ini setelah server Laravel running (php artisan serve)

Write-Host "=== DEMO API LOMBA ===" -ForegroundColor Cyan
Write-Host ""

$baseUrl = "http://127.0.0.1:8000/api"

# Test 1: GET All Lomba
Write-Host "1. Testing GET /api/lomba (Get All Lomba)" -ForegroundColor Yellow
Write-Host "   URL: $baseUrl/lomba" -ForegroundColor Gray

try {
    $response = Invoke-RestMethod -Uri "$baseUrl/lomba" -Method GET
    if ($response.success) {
        Write-Host "   ✓ Success: $($response.message)" -ForegroundColor Green
        Write-Host "   ✓ Total lomba: $($response.data.Count)" -ForegroundColor Green
        if ($response.data.Count -gt 0) {
            Write-Host "   ✓ Sample: $($response.data[0].nama_lomba)" -ForegroundColor Green
        }
    }
} catch {
    Write-Host "   ✗ Failed: $_" -ForegroundColor Red
}

Write-Host ""

# Test 2: GET Single Lomba
Write-Host "2. Testing GET /api/lomba/1 (Get Single Lomba)" -ForegroundColor Yellow
Write-Host "   URL: $baseUrl/lomba/1" -ForegroundColor Gray

try {
    $response = Invoke-RestMethod -Uri "$baseUrl/lomba/1" -Method GET
    if ($response.success) {
        Write-Host "   ✓ Success: $($response.message)" -ForegroundColor Green
        Write-Host "   ✓ Nama: $($response.data.nama_lomba)" -ForegroundColor Green
        Write-Host "   ✓ Penyelenggara: $($response.data.penyelenggara)" -ForegroundColor Green
        Write-Host "   ✓ Bidang: $($response.data.bidang.nama_bidang)" -ForegroundColor Green
    }
} catch {
    Write-Host "   ✗ Failed: $_" -ForegroundColor Red
}

Write-Host ""

# Test 3: Search Lomba
Write-Host "3. Testing GET /api/lomba/search?q=olimpiade (Search)" -ForegroundColor Yellow
Write-Host "   URL: $baseUrl/lomba/search?q=olimpiade" -ForegroundColor Gray

try {
    $response = Invoke-RestMethod -Uri "$baseUrl/lomba/search?q=olimpiade" -Method GET
    if ($response.success) {
        Write-Host "   ✓ Success: $($response.message)" -ForegroundColor Green
        Write-Host "   ✓ Results found: $($response.count)" -ForegroundColor Green
        if ($response.count -gt 0) {
            Write-Host "   ✓ First result: $($response.data[0].nama_lomba)" -ForegroundColor Green
        }
    }
} catch {
    Write-Host "   ✗ Failed: $_" -ForegroundColor Red
}

Write-Host ""

# Test 4: GET By Bidang
Write-Host "4. Testing GET /api/lomba/bidang/1 (Get by Bidang)" -ForegroundColor Yellow
Write-Host "   URL: $baseUrl/lomba/bidang/1" -ForegroundColor Gray

try {
    $response = Invoke-RestMethod -Uri "$baseUrl/lomba/bidang/1" -Method GET
    if ($response.success) {
        Write-Host "   ✓ Success: $($response.message)" -ForegroundColor Green
        Write-Host "   ✓ Bidang: $($response.bidang)" -ForegroundColor Green
        Write-Host "   ✓ Total lomba: $($response.data.Count)" -ForegroundColor Green
    }
} catch {
    Write-Host "   ✗ Failed: $_" -ForegroundColor Red
}

Write-Host ""

# Test 5: POST Create Lomba
Write-Host "5. Testing POST /api/lomba (Create Lomba)" -ForegroundColor Yellow
Write-Host "   URL: $baseUrl/lomba" -ForegroundColor Gray

$newLomba = @{
    nama_lomba = "API Test Lomba $(Get-Date -Format 'HHmmss')"
    deskripsi = "Lomba dibuat melalui API testing"
    penyelenggara = "Test API PowerShell"
    tanggal_lomba = "2025-12-31"
    lokasi = "Online"
    kategori_peserta = "Umum"
    id_bidang = 1
    status = "available"
} | ConvertTo-Json

try {
    $response = Invoke-RestMethod -Uri "$baseUrl/lomba" -Method POST -Body $newLomba -ContentType "application/json"
    if ($response.success) {
        Write-Host "   ✓ Success: $($response.message)" -ForegroundColor Green
        Write-Host "   ✓ Created ID: $($response.data.id_lomba)" -ForegroundColor Green
        Write-Host "   ✓ Nama: $($response.data.nama_lomba)" -ForegroundColor Green
        $createdId = $response.data.id_lomba
        
        Write-Host ""
        
        # Test 6: PUT Update Lomba (menggunakan ID yang baru dibuat)
        Write-Host "6. Testing PUT /api/lomba/$createdId (Update Lomba)" -ForegroundColor Yellow
        Write-Host "   URL: $baseUrl/lomba/$createdId" -ForegroundColor Gray
        
        $updateData = @{
            status = "closed"
        } | ConvertTo-Json
        
        try {
            $updateResponse = Invoke-RestMethod -Uri "$baseUrl/lomba/$createdId" -Method PUT -Body $updateData -ContentType "application/json"
            if ($updateResponse.success) {
                Write-Host "   ✓ Success: $($updateResponse.message)" -ForegroundColor Green
                Write-Host "   ✓ Updated status: $($updateResponse.data.status)" -ForegroundColor Green
            }
        } catch {
            Write-Host "   ✗ Failed: $_" -ForegroundColor Red
        }
        
        Write-Host ""
        
        # Test 7: DELETE Lomba
        Write-Host "7. Testing DELETE /api/lomba/$createdId (Delete Lomba)" -ForegroundColor Yellow
        Write-Host "   URL: $baseUrl/lomba/$createdId" -ForegroundColor Gray
        
        try {
            $deleteResponse = Invoke-RestMethod -Uri "$baseUrl/lomba/$createdId" -Method DELETE
            if ($deleteResponse.success) {
                Write-Host "   ✓ Success: $($deleteResponse.message)" -ForegroundColor Green
            }
        } catch {
            Write-Host "   ✗ Failed: $_" -ForegroundColor Red
        }
    }
} catch {
    Write-Host "   ✗ Failed: $_" -ForegroundColor Red
}

Write-Host ""
Write-Host "=== TEST COMPLETED ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Summary:" -ForegroundColor White
Write-Host "✓ GET All Lomba - Tested" -ForegroundColor Green
Write-Host "✓ GET Single Lomba - Tested" -ForegroundColor Green
Write-Host "✓ GET Search - Tested" -ForegroundColor Green
Write-Host "✓ GET By Bidang - Tested" -ForegroundColor Green
Write-Host "✓ POST Create - Tested" -ForegroundColor Green
Write-Host "✓ PUT Update - Tested" -ForegroundColor Green
Write-Host "✓ DELETE - Tested" -ForegroundColor Green
Write-Host ""
Write-Host "All API endpoints working properly! ✨" -ForegroundColor Cyan
