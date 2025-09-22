<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Models\BidangLomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function show(Lomba $lomba)
    {
    $lomba->load('bidang', 'hadiah');
    return view('lomba.show', ['lomba' => $lomba]);
    }
    
    public function index(Request $request)
    {
        $query = Lomba::query();

        // Filter Penyelenggara
        if ($request->filled('penyelenggara')) {
            $query->where('penyelenggara_lomba', $request->penyelenggara);
        }

        // Filter Bidang Lomba
        if ($request->filled('bidang')) {
            $query->where('id_bidang', $request->bidang);
        }

        // 1. TAMBAHKAN LOGIKA FILTER UNTUK KATEGORI PESERTA
        if ($request->filled('kategori')) {
            $query->where('kategori_peserta', $request->kategori);
        }

        // Pencarian Judul
        if ($request->filled('search')) {
            $query->where('nama_lomba', 'like', '%' . $request->search . '%');
        }

        $lombas = $query->latest()->paginate(6);
        $lombaTerbaru = Lomba::latest()->take(5)->get();
        $stats = [
            'total_lomba' => Lomba::count(),
            'total_available' => Lomba::where('status', 'available')->count(),
            'total_unavailable' => Lomba::where('status', 'unavailable')->count()
        ];
        $penyelenggara = Lomba::select('penyelenggara_lomba')->distinct()->orderBy('penyelenggara_lomba')->pluck('penyelenggara_lomba');
        $bidang_lombas = BidangLomba::orderBy('nama_bidang')->get();

        // 2. DEFINISIKAN DAFTAR KATEGORI UNTUK DROPDOWN
        $kategori_peserta = ['SD', 'SMP', 'SMA', 'Mahasiswa', 'Umum'];
        $bidang_lombas = BidangLomba::orderBy('nama_bidang')->get();

        return view('lomba.index', [
            'lombas' => $lombas,
            'lombaTerbaru' => $lombaTerbaru,
            'stats' => $stats,
            'penyelenggara' => $penyelenggara,
            'bidang_lombas' => $bidang_lombas,
            'kategori_peserta' => $kategori_peserta, // 3. Kirim data kategori ke view
        ]);
        
        // SOAL 3: filtering by kategori
        if ($request->filled('penyelenggara')) {
            $query->where('penyelenggara_lomba', $request->penyelenggara);
        }
        
        // SOAL 5: search jdul
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        // pagination
        $lombas = $query->latest()->paginate(6);
        
        // SOAL 2: Tampilkan 5 lomba
        $lombaTerbaru = Lomba::latest()->take(5)->get();
        
        // SOAL 4: Statistik
        $stats = [
            'total_lomba' => Lomba::count(),
            'total_available' => Lomba::where('status', 'available')->count(),
            'total_unavailable' => Lomba::where('status', 'unavailable')->count()
        ];
        
        $penyelenggara = Lomba::select('penyelenggara_lomba')
            ->distinct()
            ->orderBy('penyelenggara_lomba')
            ->pluck('penyelenggara_lomba');

        return view('lomba.index', [
            'lombas' => $lombas,
            'lombaTerbaru' => $lombaTerbaru,
            'stats' => $stats,
            'penyelenggara' => $penyelenggara
        ]);
    }
    public function edit(Lomba $lomba)
{
    return view('lomba.edit', ['lomba' => $lomba]);
}

public function update(Request $request, Lomba $lomba)
{
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'penyelenggara_lomba' => 'required|string|max:255',
        'deskripsi' => 'required|string',
    ]);

    $lomba->update($validated);

    return redirect()->route('lomba.index')->with('success', 'Data lomba berhasil diperbarui!');
}
}