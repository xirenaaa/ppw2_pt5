# ✅ RESTful API untuk Sistem Lomba - BERHASIL DIBUAT

## 📁 File yang Dibuat

### 1. **Controller API**
📄 `app/Http/Controllers/Api/LombaApiController.php`
- ✅ 7 method CRUD lengkap:
  - `index()` - GET all lomba
  - `show($id)` - GET single lomba
  - `store()` - POST create lomba
  - `update($id)` - PUT/PATCH update lomba
  - `destroy($id)` - DELETE lomba
  - `getByBidang($id_bidang)` - GET lomba by bidang
  - `search()` - GET search lomba

### 2. **Routes**
📄 `routes/api.php`
- ✅ 8 endpoint API dengan prefix `/api/lomba`:
  ```
  GET    /api/lomba              - Get all lomba
  GET    /api/lomba/{id}         - Get single lomba
  GET    /api/lomba/bidang/{id}  - Get lomba by bidang
  GET    /api/lomba/search?q=... - Search lomba
  POST   /api/lomba              - Create lomba
  PUT    /api/lomba/{id}         - Update lomba
  PATCH  /api/lomba/{id}         - Update lomba (partial)
  DELETE /api/lomba/{id}         - Delete lomba
  ```

### 3. **Bootstrap Configuration**
📄 `bootstrap/app.php`
- ✅ Ditambahkan: `api: __DIR__.'/../routes/api.php'`
- Routes API sekarang ter-load otomatis

### 4. **Dokumentasi**
📄 `API_DOCUMENTATION.md`
- ✅ Dokumentasi lengkap dengan:
  - Deskripsi setiap endpoint
  - Request/Response examples
  - Validation rules
  - HTTP status codes
  - cURL commands
  - Postman collection guide

### 5. **Test Script**
📄 `test_lomba_api.php`
- ✅ Script testing untuk semua endpoint
- Panduan penggunaan curl dan Postman

---

## 🚀 Cara Menggunakan API

### 1. Start Server
```bash
php artisan serve
```
Server akan berjalan di: `http://127.0.0.1:8000`

### 2. Test Endpoints

#### GET All Lomba
```bash
curl http://127.0.0.1:8000/api/lomba
```

#### GET Single Lomba
```bash
curl http://127.0.0.1:8000/api/lomba/1
```

#### POST Create Lomba
```bash
curl -X POST http://127.0.0.1:8000/api/lomba \
  -H "Content-Type: application/json" \
  -d '{
    "nama_lomba": "Lomba Test",
    "deskripsi": "Testing API",
    "penyelenggara": "Test Org",
    "tanggal_lomba": "2025-12-31",
    "lokasi": "Online",
    "kategori_peserta": "Umum",
    "id_bidang": 1
  }'
```

#### PUT Update Lomba
```bash
curl -X PUT http://127.0.0.1:8000/api/lomba/1 \
  -H "Content-Type: application/json" \
  -d '{"status": "closed"}'
```

#### DELETE Lomba
```bash
curl -X DELETE http://127.0.0.1:8000/api/lomba/1
```

#### Search Lomba
```bash
curl "http://127.0.0.1:8000/api/lomba/search?q=olimpiade"
```

#### Get by Bidang
```bash
curl http://127.0.0.1:8000/api/lomba/bidang/1
```

---

## 📊 Response Format

### Success Response
```json
{
  "success": true,
  "message": "Data lomba berhasil diambil",
  "data": {
    "id_lomba": 1,
    "nama_lomba": "Olimpiade Matematika",
    "deskripsi": "Kompetisi matematika...",
    "penyelenggara": "Kemendikbud",
    "tanggal_lomba": "2025-08-15",
    "lokasi": "Online",
    "kategori_peserta": "SMA",
    "id_bidang": 1,
    "link_daftar": "https://...",
    "status": "available",
    "gambar": "uploads/matematika.jpg",
    "bidang": {
      "id_bidang": 1,
      "nama_bidang": "Akademik"
    },
    "hadiah": [...]
  }
}
```

### Error Response (Validation)
```json
{
  "success": false,
  "message": "Validasi gagal",
  "errors": {
    "nama_lomba": ["Nama lomba wajib diisi"],
    "tanggal_lomba": ["Format tanggal tidak valid"]
  }
}
```

### Error Response (Not Found)
```json
{
  "success": false,
  "message": "Lomba tidak ditemukan"
}
```

---

## ✅ Validasi

### Required Fields (POST)
- ✅ `nama_lomba` - string, max 255
- ✅ `deskripsi` - text
- ✅ `penyelenggara` - string, max 255
- ✅ `tanggal_lomba` - date (YYYY-MM-DD)
- ✅ `lokasi` - enum: Online, Offline, Hybrid
- ✅ `kategori_peserta` - enum: SD, SMP, SMA, Mahasiswa, Umum, Pelajar
- ✅ `id_bidang` - integer (must exist in database)

### Optional Fields
- ⭕ `link_daftar` - valid URL
- ⭕ `status` - enum: available, closed, coming_soon (default: available)
- ⭕ `gambar` - image file (jpeg, png, jpg, gif), max 2MB

### Update (PUT/PATCH)
- Semua field **optional** (partial update)
- Rules sama seperti POST

---

## 🎯 Features

### ✅ CRUD Lengkap
- Create, Read, Update, Delete lomba

### ✅ Filter & Search
- Get lomba by bidang
- Search by nama/penyelenggara/deskripsi

### ✅ Relasi
- Include bidang lomba
- Include hadiah lomba

### ✅ Image Upload
- Support multipart/form-data
- Max size: 2MB
- Auto delete old image on update

### ✅ Error Handling
- Validation errors dengan pesan Bahasa Indonesia
- 404 Not Found handling
- 500 Server Error handling
- Proper HTTP status codes

### ✅ Response Consistency
- Consistent JSON structure
- Success/error indicators
- Descriptive messages

---

## 📱 Testing dengan Postman

1. **Buka Postman**
2. **Create Collection**: "Lomba API"
3. **Import Endpoints**:

### Collection Structure
```
📁 Lomba API
  ├── 📄 GET All Lomba
  ├── 📄 GET Single Lomba
  ├── 📄 POST Create Lomba
  ├── 📄 PUT Update Lomba
  ├── 📄 DELETE Lomba
  ├── 📄 GET By Bidang
  └── 📄 Search Lomba
```

### Environment Variables
```
base_url = http://127.0.0.1:8000/api
```

---

## 🔒 Security (Optional)

Untuk production, aktifkan authentication dengan uncomment di `routes/api.php`:

```php
Route::middleware(['auth:sanctum'])->prefix('lomba')->group(function () {
    Route::post('/', [LombaApiController::class, 'store']);
    Route::put('/{id}', [LombaApiController::class, 'update']);
    Route::delete('/{id}', [LombaApiController::class, 'destroy']);
});
```

Ini akan memproteksi endpoint create/update/delete agar hanya user authenticated yang bisa akses.

---

## 📝 HTTP Status Codes

| Code | Status | Keterangan |
|------|--------|------------|
| 200 | OK | Request berhasil |
| 201 | Created | Resource berhasil dibuat |
| 400 | Bad Request | Parameter tidak valid |
| 404 | Not Found | Resource tidak ditemukan |
| 422 | Unprocessable Entity | Validasi gagal |
| 500 | Internal Server Error | Error di server |

---

## 🎉 Summary

✅ **7 API Methods** - CRUD + Filter + Search  
✅ **8 Endpoints** - RESTful routes  
✅ **Validation** - Input validation lengkap  
✅ **Error Handling** - Proper error responses  
✅ **Documentation** - Lengkap dengan examples  
✅ **Test Script** - Ready to test  
✅ **Postman Guide** - Import & test mudah  

**API Lomba sudah READY digunakan!** 🚀

Baca dokumentasi lengkap di: `API_DOCUMENTATION.md`
