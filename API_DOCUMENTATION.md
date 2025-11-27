# 📚 RESTful API Documentation - Sistem Informasi Lomba

## Base URL
```
http://127.0.0.1:8000/api
```

## Response Format

### Success Response
```json
{
  "success": true,
  "message": "Success message",
  "data": {...}
}
```

### Error Response
```json
{
  "success": false,
  "message": "Error message",
  "errors": {...}
}
```

## HTTP Status Codes
- `200 OK` - Request berhasil
- `201 Created` - Resource berhasil dibuat
- `400 Bad Request` - Request tidak valid
- `404 Not Found` - Resource tidak ditemukan
- `422 Unprocessable Entity` - Validasi gagal
- `500 Internal Server Error` - Server error

---

## 📋 API Endpoints

### 1. Get All Lomba
Mengambil semua data lomba.

**Endpoint:** `GET /api/lomba`

**Request:**
```bash
curl -X GET http://127.0.0.1:8000/api/lomba
```

**Response (200 OK):**
```json
{
  "success": true,
  "message": "Data lomba berhasil diambil",
  "data": [
    {
      "id_lomba": 1,
      "nama_lomba": "Olimpiade Matematika Nasional 2025",
      "deskripsi": "Kompetisi matematika tingkat nasional...",
      "penyelenggara": "Kemendikbud",
      "tanggal_lomba": "2025-08-15",
      "lokasi": "Online",
      "kategori_peserta": "SMA",
      "id_bidang": 1,
      "link_daftar": "https://olimpiade.kemdikbud.go.id",
      "status": "available",
      "gambar": "uploads/matematika.jpg",
      "created_at": "2025-11-18T10:00:00.000000Z",
      "updated_at": "2025-11-18T10:00:00.000000Z",
      "bidang": {
        "id_bidang": 1,
        "nama_bidang": "Akademik"
      },
      "hadiah": [
        {
          "id_hadiah": 1,
          "juara": "Juara 1",
          "nominal": 10000000,
          "deskripsi": "Piala + Uang Pembinaan"
        }
      ]
    }
  ]
}
```

---

### 2. Get Single Lomba
Mengambil detail lomba berdasarkan ID.

**Endpoint:** `GET /api/lomba/{id}`

**Request:**
```bash
curl -X GET http://127.0.0.1:8000/api/lomba/1
```

**Response (200 OK):**
```json
{
  "success": true,
  "message": "Data lomba berhasil diambil",
  "data": {
    "id_lomba": 1,
    "nama_lomba": "Olimpiade Matematika Nasional 2025",
    "deskripsi": "Kompetisi matematika tingkat nasional...",
    "penyelenggara": "Kemendikbud",
    "tanggal_lomba": "2025-08-15",
    "lokasi": "Online",
    "kategori_peserta": "SMA",
    "id_bidang": 1,
    "link_daftar": "https://olimpiade.kemdikbud.go.id",
    "status": "available",
    "gambar": "uploads/matematika.jpg",
    "bidang": {...},
    "hadiah": [...]
  }
}
```

**Response (404 Not Found):**
```json
{
  "success": false,
  "message": "Lomba tidak ditemukan"
}
```

---

### 3. Create New Lomba
Membuat data lomba baru.

**Endpoint:** `POST /api/lomba`

**Headers:**
```
Content-Type: application/json
Accept: application/json
```

**Request Body:**
```json
{
  "nama_lomba": "Lomba Robotik Nasional 2025",
  "deskripsi": "Kompetisi robotik untuk pelajar SMA",
  "penyelenggara": "ITB",
  "tanggal_lomba": "2025-12-25",
  "lokasi": "Offline",
  "kategori_peserta": "SMA",
  "id_bidang": 2,
  "link_daftar": "https://robotik.itb.ac.id",
  "status": "available"
}
```

**cURL Example:**
```bash
curl -X POST http://127.0.0.1:8000/api/lomba \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "nama_lomba": "Lomba Robotik Nasional 2025",
    "deskripsi": "Kompetisi robotik untuk pelajar SMA",
    "penyelenggara": "ITB",
    "tanggal_lomba": "2025-12-25",
    "lokasi": "Offline",
    "kategori_peserta": "SMA",
    "id_bidang": 2,
    "link_daftar": "https://robotik.itb.ac.id",
    "status": "available"
  }'
```

**Response (201 Created):**
```json
{
  "success": true,
  "message": "Lomba berhasil ditambahkan",
  "data": {
    "id_lomba": 37,
    "nama_lomba": "Lomba Robotik Nasional 2025",
    "deskripsi": "Kompetisi robotik untuk pelajar SMA",
    "penyelenggara": "ITB",
    "tanggal_lomba": "2025-12-25",
    "lokasi": "Offline",
    "kategori_peserta": "SMA",
    "id_bidang": 2,
    "link_daftar": "https://robotik.itb.ac.id",
    "status": "available",
    "gambar": "uploads/default-lomba.jpg",
    "created_at": "2025-11-27T10:00:00.000000Z",
    "updated_at": "2025-11-27T10:00:00.000000Z",
    "bidang": {...},
    "hadiah": []
  }
}
```

**Response (422 Unprocessable Entity) - Validation Error:**
```json
{
  "success": false,
  "message": "Validasi gagal",
  "errors": {
    "nama_lomba": [
      "Nama lomba wajib diisi"
    ],
    "tanggal_lomba": [
      "Format tanggal tidak valid"
    ],
    "lokasi": [
      "Lokasi harus Online, Offline, atau Hybrid"
    ]
  }
}
```

---

### 4. Update Lomba
Mengupdate data lomba berdasarkan ID.

**Endpoint:** `PUT /api/lomba/{id}` atau `PATCH /api/lomba/{id}`

**Headers:**
```
Content-Type: application/json
Accept: application/json
```

**Request Body (Partial Update):**
```json
{
  "status": "closed",
  "link_daftar": "https://new-link.com"
}
```

**cURL Example:**
```bash
curl -X PUT http://127.0.0.1:8000/api/lomba/1 \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "status": "closed",
    "link_daftar": "https://new-link.com"
  }'
```

**Response (200 OK):**
```json
{
  "success": true,
  "message": "Lomba berhasil diupdate",
  "data": {
    "id_lomba": 1,
    "nama_lomba": "Olimpiade Matematika Nasional 2025",
    "status": "closed",
    "link_daftar": "https://new-link.com",
    ...
  }
}
```

**Response (404 Not Found):**
```json
{
  "success": false,
  "message": "Lomba tidak ditemukan"
}
```

---

### 5. Delete Lomba
Menghapus data lomba berdasarkan ID.

**Endpoint:** `DELETE /api/lomba/{id}`

**Request:**
```bash
curl -X DELETE http://127.0.0.1:8000/api/lomba/1
```

**Response (200 OK):**
```json
{
  "success": true,
  "message": "Lomba berhasil dihapus"
}
```

**Response (404 Not Found):**
```json
{
  "success": false,
  "message": "Lomba tidak ditemukan"
}
```

---

### 6. Get Lomba by Bidang
Mengambil semua lomba berdasarkan bidang tertentu.

**Endpoint:** `GET /api/lomba/bidang/{id_bidang}`

**Request:**
```bash
curl -X GET http://127.0.0.1:8000/api/lomba/bidang/1
```

**Response (200 OK):**
```json
{
  "success": true,
  "message": "Data lomba berhasil diambil",
  "bidang": "Akademik",
  "data": [
    {
      "id_lomba": 1,
      "nama_lomba": "Olimpiade Matematika Nasional 2025",
      "id_bidang": 1,
      ...
    }
  ]
}
```

**Response (404 Not Found):**
```json
{
  "success": false,
  "message": "Bidang lomba tidak ditemukan"
}
```

---

### 7. Search Lomba
Mencari lomba berdasarkan nama, penyelenggara, atau deskripsi.

**Endpoint:** `GET /api/lomba/search?q={query}`

**Request:**
```bash
curl -X GET "http://127.0.0.1:8000/api/lomba/search?q=olimpiade"
```

**Response (200 OK):**
```json
{
  "success": true,
  "message": "Pencarian berhasil",
  "query": "olimpiade",
  "count": 5,
  "data": [
    {
      "id_lomba": 1,
      "nama_lomba": "Olimpiade Matematika Nasional 2025",
      ...
    }
  ]
}
```

**Response (400 Bad Request):**
```json
{
  "success": false,
  "message": "Parameter pencarian tidak boleh kosong"
}
```

---

## 🔑 Validation Rules

### POST /api/lomba (Create)
| Field | Type | Rules | Description |
|-------|------|-------|-------------|
| nama_lomba | string | required, max:255 | Nama lomba |
| deskripsi | text | required | Deskripsi lengkap lomba |
| penyelenggara | string | required, max:255 | Nama penyelenggara |
| tanggal_lomba | date | required, format: YYYY-MM-DD | Tanggal pelaksanaan |
| lokasi | enum | required, in: Online, Offline, Hybrid | Lokasi lomba |
| kategori_peserta | enum | required, in: SD, SMP, SMA, Mahasiswa, Umum, Pelajar | Kategori peserta |
| id_bidang | integer | required, exists in bidang_lombas | ID bidang lomba |
| link_daftar | string | optional, url | Link pendaftaran |
| status | enum | optional, in: available, closed, coming_soon, default: available | Status lomba |
| gambar | file | optional, image (jpeg,png,jpg,gif), max: 2MB | Gambar lomba |

### PUT/PATCH /api/lomba/{id} (Update)
Semua field bersifat **optional** (partial update), rules sama seperti POST.

---

## 📦 Testing dengan Postman

### Import Collection
1. Buka Postman
2. Create New Collection: "Lomba API"
3. Tambahkan request berikut:

#### 1. GET All Lomba
- Method: `GET`
- URL: `{{base_url}}/lomba`

#### 2. GET Single Lomba
- Method: `GET`
- URL: `{{base_url}}/lomba/1`

#### 3. POST Create Lomba
- Method: `POST`
- URL: `{{base_url}}/lomba`
- Headers: `Content-Type: application/json`
- Body (raw JSON):
```json
{
  "nama_lomba": "Test Lomba API",
  "deskripsi": "Testing API endpoint",
  "penyelenggara": "Test Organizer",
  "tanggal_lomba": "2025-12-31",
  "lokasi": "Online",
  "kategori_peserta": "Umum",
  "id_bidang": 1,
  "status": "available"
}
```

#### 4. PUT Update Lomba
- Method: `PUT`
- URL: `{{base_url}}/lomba/1`
- Headers: `Content-Type: application/json`
- Body (raw JSON):
```json
{
  "status": "closed"
}
```

#### 5. DELETE Lomba
- Method: `DELETE`
- URL: `{{base_url}}/lomba/1`

#### 6. GET By Bidang
- Method: `GET`
- URL: `{{base_url}}/lomba/bidang/1`

#### 7. Search
- Method: `GET`
- URL: `{{base_url}}/lomba/search?q=olimpiade`

### Environment Variables
Create Postman Environment:
```
base_url = http://127.0.0.1:8000/api
```

---

## 🚀 Quick Start

### 1. Start Laravel Server
```bash
php artisan serve
```

### 2. Test API
```bash
# Get all lomba
curl http://127.0.0.1:8000/api/lomba

# Get single lomba
curl http://127.0.0.1:8000/api/lomba/1

# Search lomba
curl "http://127.0.0.1:8000/api/lomba/search?q=olimpiade"
```

### 3. Run Test Script
```bash
php test_lomba_api.php
```

---

## 📝 Notes

1. **Authentication**: Saat ini API bersifat **public** (tidak memerlukan autentikasi). Untuk production, aktifkan middleware `auth:sanctum`.

2. **CORS**: Jika API diakses dari frontend berbeda domain, tambahkan CORS configuration di `config/cors.php`.

3. **Rate Limiting**: Pertimbangkan menambahkan rate limiting untuk mencegah abuse.

4. **Image Upload**: Upload gambar via `multipart/form-data`, bukan JSON.

5. **Pagination**: Untuk production, tambahkan pagination pada endpoint GET all.

---

## 🔒 Security Recommendations

1. **Enable Authentication**:
```php
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/lomba', [LombaApiController::class, 'store']);
    Route::put('/lomba/{id}', [LombaApiController::class, 'update']);
    Route::delete('/lomba/{id}', [LombaApiController::class, 'destroy']);
});
```

2. **Add API Throttling**:
```php
Route::middleware(['throttle:60,1'])->group(function () {
    // API routes
});
```

3. **Validate API Token**: Gunakan Laravel Sanctum untuk API authentication.

---

## 📧 Contact
Untuk pertanyaan atau bug report, silakan hubungi team developer.

---

**Last Updated:** November 27, 2025
