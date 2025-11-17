# Template Import Lomba Excel

## Format Kolom (Header Row)

Buat file Excel dengan kolom berikut di baris pertama (header):

| Nama Lomba | Deskripsi | Penyelenggara | Tanggal Lomba | Lokasi | Kategori Peserta | Bidang | Link Pendaftaran | Status | Gambar |
|------------|-----------|---------------|---------------|--------|------------------|--------|------------------|--------|--------|

## Contoh Data:

| Nama Lomba | Deskripsi | Penyelenggara | Tanggal Lomba | Lokasi | Kategori Peserta | Bidang | Link Pendaftaran | Status | Gambar |
|------------|-----------|---------------|---------------|--------|------------------|--------|------------------|--------|--------|
| Lomba Karya Tulis Ilmiah 2025 | Lomba menulis karya ilmiah untuk mahasiswa tingkat nasional | Universitas Indonesia | 25-12-2025 | Online | Mahasiswa | Akademik | https://example.com/daftar | available | uploads/default-lomba.jpg |
| Kompetisi Programming 2025 | Hackathon untuk siswa SMA | PT Tech Indonesia | 15-01-2026 | Hybrid | SMA | Teknologi | https://example.com/daftar2 | available | uploads/default-lomba.jpg |

## Validasi:

1. **Nama Lomba**: Wajib diisi, maksimal 255 karakter
2. **Deskripsi**: Wajib diisi, bisa panjang
3. **Penyelenggara**: Wajib diisi, maksimal 255 karakter
4. **Tanggal Lomba**: Wajib diisi, format DD-MM-YYYY (contoh: 17-11-2025)
5. **Lokasi**: Wajib diisi, harus salah satu dari: Online, Offline, Hybrid
6. **Kategori Peserta**: Wajib diisi, harus salah satu dari: SD, SMP, SMA, Mahasiswa, Umum, Pelajar
7. **Bidang**: Wajib diisi, harus sesuai dengan nama bidang yang ada di database
8. **Link Pendaftaran**: Opsional, harus berformat URL yang valid
9. **Status**: Opsional, default: available. Bisa: available atau unavailable
10. **Gambar**: Opsional, default: uploads/default-lomba.jpg

## Cara Download Template:

1. Login sebagai admin
2. Klik menu "Export Excel" atau akses `/lomba/export`
3. File yang didownload sudah berisi data lomba yang ada dan bisa dijadikan template
4. Atau buat file Excel baru dengan kolom header seperti di atas

## Cara Import:

1. Login sebagai admin
2. Klik menu "Import Excel" atau akses `/lomba/import`
3. Download template jika belum punya
4. Isi data sesuai format di atas
5. Upload file Excel yang sudah diisi
6. Data akan otomatis ditambahkan ke database
