<?php

namespace App\Imports;

use App\Models\Lomba;
use App\Models\BidangLomba;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Carbon\Carbon;

class LombaImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * Membuat model dari data Excel
     * 
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Cari bidang lomba berdasarkan nama
        $bidang = BidangLomba::where('nama_bidang', $row['bidang'])->first();
        
        if (!$bidang) {
            // Skip jika bidang tidak ditemukan
            return null;
        }

        // Generate ID baru
        $lastLomba = Lomba::orderBy('id_lomba', 'desc')->first();
        $newId = $lastLomba ? $lastLomba->id_lomba + 1 : 1;

        // Parse tanggal
        try {
            $tanggal = Carbon::createFromFormat('d-m-Y', $row['tanggal_lomba']);
        } catch (\Exception $e) {
            // Jika format tidak sesuai, coba format lain
            $tanggal = Carbon::parse($row['tanggal_lomba']);
        }

        return new Lomba([
            'id_lomba' => $newId,
            'nama_lomba' => $row['nama_lomba'],
            'deskripsi' => $row['deskripsi'],
            'penyelenggara_lomba' => $row['penyelenggara'],
            'tgl_lomba' => $tanggal,
            'lokasi' => $row['lokasi'],
            'kategori_peserta' => $row['kategori_peserta'],
            'id_bidang' => $bidang->id_bidang,
            'link_daftar' => $row['link_pendaftaran'] ?? null,
            'status' => $row['status'] ?? 'available',
            'gambar' => $row['gambar'] ?? 'uploads/default-lomba.jpg',
        ]);
    }

    /**
     * Validasi data import
     */
    public function rules(): array
    {
        return [
            'nama_lomba' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'penyelenggara' => 'required|string|max:255',
            'tanggal_lomba' => 'required',
            'lokasi' => 'required|in:Online,Offline,Hybrid',
            'kategori_peserta' => 'required|in:SD,SMP,SMA,Mahasiswa,Umum,Pelajar',
            'bidang' => 'required|string',
            'status' => 'nullable|in:available,unavailable',
        ];
    }

    /**
     * Custom validation messages
     */
    public function customValidationMessages()
    {
        return [
            'nama_lomba.required' => 'Nama lomba harus diisi',
            'penyelenggara.required' => 'Penyelenggara harus diisi',
            'lokasi.in' => 'Lokasi harus Online, Offline, atau Hybrid',
            'kategori_peserta.in' => 'Kategori peserta tidak valid',
        ];
    }
}
