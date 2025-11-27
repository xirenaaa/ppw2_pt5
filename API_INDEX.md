# 📚 Index Dokumentasi RESTful API - Sistem Lomba

## 🎯 Quick Links

### 📖 Dokumentasi Utama
- **[API_DOCUMENTATION.md](API_DOCUMENTATION.md)** - Dokumentasi API lengkap dengan examples
- **[API_IMPLEMENTATION_SUMMARY.md](API_IMPLEMENTATION_SUMMARY.md)** - Summary implementasi dan cara penggunaan

### 🔧 File Implementasi
1. **Controller**: `app/Http/Controllers/Api/LombaApiController.php`
2. **Routes**: `routes/api.php`
3. **Bootstrap**: `bootstrap/app.php` (API routes registration)

### 🧪 File Testing
1. **[test_api_status.php](test_api_status.php)** - Quick check API status
2. **[test_lomba_api.php](test_lomba_api.php)** - Panduan testing lengkap
3. **[test_api_demo.ps1](test_api_demo.ps1)** - Demo test dengan PowerShell

---

## 🚀 Quick Start Guide

### 1. Start Server
```bash
php artisan serve
```

### 2. Verify API Status
```bash
php test_api_status.php
```

### 3. Test API (PowerShell)
```powershell
.\test_api_demo.ps1
```

### 4. Manual Test dengan cURL
```bash
# GET all lomba
curl http://127.0.0.1:8000/api/lomba

# GET single lomba
curl http://127.0.0.1:8000/api/lomba/1

# Search
curl "http://127.0.0.1:8000/api/lomba/search?q=olimpiade"
```

---

## 📋 API Endpoints Summary

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/lomba` | Get all lomba |
| GET | `/api/lomba/{id}` | Get single lomba by ID |
| GET | `/api/lomba/bidang/{id}` | Get lomba by bidang |
| GET | `/api/lomba/search?q=...` | Search lomba |
| POST | `/api/lomba` | Create new lomba |
| PUT | `/api/lomba/{id}` | Update lomba (full) |
| PATCH | `/api/lomba/{id}` | Update lomba (partial) |
| DELETE | `/api/lomba/{id}` | Delete lomba |

---

## 📝 Response Format

### Success
```json
{
  "success": true,
  "message": "Success message",
  "data": {...}
}
```

### Error
```json
{
  "success": false,
  "message": "Error message",
  "errors": {...}
}
```

---

## 🔑 Validation Rules

### Required Fields (POST)
- `nama_lomba` - string, max 255
- `deskripsi` - text
- `penyelenggara` - string, max 255
- `tanggal_lomba` - date (YYYY-MM-DD)
- `lokasi` - enum: Online, Offline, Hybrid
- `kategori_peserta` - enum: SD, SMP, SMA, Mahasiswa, Umum, Pelajar
- `id_bidang` - integer (must exist)

### Optional Fields
- `link_daftar` - valid URL
- `status` - enum: available, closed, coming_soon
- `gambar` - image file (max 2MB)

---

## 📱 Testing Tools

### 1. Postman
- Import endpoints dari `API_DOCUMENTATION.md`
- Set base URL: `http://127.0.0.1:8000/api`
- Test semua endpoints

### 2. Insomnia
- Alternative untuk Postman
- Import cURL commands dari dokumentasi

### 3. Browser
- GET endpoints bisa ditest langsung di browser
- Contoh: `http://127.0.0.1:8000/api/lomba`

### 4. PowerShell
- Gunakan `test_api_demo.ps1`
- Automated testing untuk semua endpoints

---

## 🎓 Tutorial Lengkap

### Baca Dokumentasi Berurutan:

1. **[API_IMPLEMENTATION_SUMMARY.md](API_IMPLEMENTATION_SUMMARY.md)**
   - Pengenalan dan overview
   - File-file yang dibuat
   - Cara kerja API

2. **[API_DOCUMENTATION.md](API_DOCUMENTATION.md)**
   - Detail setiap endpoint
   - Request/Response examples
   - Validation rules
   - Testing guide

3. **[test_lomba_api.php](test_lomba_api.php)**
   - Testing checklist
   - cURL commands
   - Expected responses

---

## ✅ Checklist

Pastikan semua ini sudah OK:

- [x] Server running (`php artisan serve`)
- [x] Routes registered (`php artisan route:list --path=api`)
- [x] Database ready (36 lomba records)
- [x] Test passed (`php test_api_status.php`)
- [x] Documentation complete
- [x] Examples provided
- [x] Validation working
- [x] Error handling implemented

---

## 🎉 Done!

API RESTful untuk Sistem Lomba sudah **100% READY** untuk digunakan! 🚀

**Last Updated:** November 27, 2025
