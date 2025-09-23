<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Models\BidangLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class LombaController extends Controller
{
    public function index(Request $request)
    {
        // Start with base query including relationships
        $query = Lomba::with(['bidang', 'hadiah']);

        // Apply filters
        if ($request->filled('search')) {
            $query->where('nama_lomba', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('penyelenggara')) {
            $query->where('penyelenggara_lomba', $request->penyelenggara);
        }
        if ($request->filled('bidang')) {
            $query->where('id_bidang', $request->bidang);
        }
        if ($request->filled('kategori')) {
            $query->where('kategori_peserta', $request->kategori);
        }

        // Get paginated results with relationships
        $lombas = $query->where('status', 'available')
                       ->orderBy('tgl_lomba', 'asc')
                       ->paginate(12);

        // Get latest 5 lomba based on created_at for "Lomba Terbaru" section
        $lombaTerbaru = Lomba::with('bidang')
            ->where('status', 'available')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        $stats = [
            'total_lomba' => Lomba::count(),
            'total_available' => Lomba::where('status', 'available')->count(),
            'total_unavailable' => Lomba::where('status', 'unavailable')->count()
        ];

        $penyelenggara = Lomba::select('penyelenggara_lomba')
            ->distinct()
            ->orderBy('penyelenggara_lomba')
            ->pluck('penyelenggara_lomba');
        
        $bidang_lombas = BidangLomba::orderBy('nama_bidang')->get();
        $kategori_peserta = ['SD', 'SMP', 'SMA', 'Mahasiswa', 'Umum', 'Pelajar'];

        return view('lomba.index', compact(
            'lombas', 
            'lombaTerbaru', 
            'stats',
            'penyelenggara',
            'bidang_lombas',
            'kategori_peserta'
        ));
    }

    public function show(Lomba $lomba)
    {
        $lomba->load('bidang', 'hadiah');
        return view('lomba.show', compact('lomba'));
    }

    public function update(Request $request, Lomba $lomba)
    {
        $validated = $request->validate([
            'nama_lomba' => 'required|string|max:255',
            'penyelenggara_lomba' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $lomba->update($validated);
        return redirect()->route('lomba.index')->with('success', 'Data lomba berhasil diperbarui!');
    }
}