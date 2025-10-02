<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Models\BidangLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Menampilkan form untuk membuat lomba baru
     */
    public function create()
    {
        $bidang_lombas = BidangLomba::orderBy('nama_bidang')->get();
        $kategori_peserta = ['SD', 'SMP', 'SMA', 'Mahasiswa', 'Umum', 'Pelajar'];
        $lokasi_options = ['Online', 'Offline', 'Hybrid'];
        
        return view('lomba.create', compact('bidang_lombas', 'kategori_peserta', 'lokasi_options'));
    }

    /**
     * Menyimpan lomba baru ke database
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lomba' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'penyelenggara_lomba' => 'required|string|max:255',
            'tgl_lomba' => 'required|date',
            'lokasi' => 'required|in:Online,Offline,Hybrid',
            'kategori_peserta' => 'required|in:SD,SMP,SMA,Mahasiswa,Umum,Pelajar',
            'id_bidang' => 'required|exists:bidang_lombas,id_bidang',
            'link_daftar' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'status' => 'required|in:available,unavailable'
        ]);
        
        // Generate ID baru
        $lastLomba = Lomba::orderBy('id_lomba', 'desc')->first();
        $newId = $lastLomba ? $lastLomba->id_lomba + 1 : 1;
        
        // Handle upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $file->move(public_path('uploads'), $filename);
            $validated['gambar'] = 'uploads/' . $filename;
        } else {
            $validated['gambar'] = 'uploads/default-lomba.jpg';
        }
        
        // Tambahkan ID ke validated data
        $validated['id_lomba'] = $newId;
        
        // Simpan ke database
        Lomba::create($validated);
        
        return redirect()->route('lomba.index')
            ->with('success', 'Lomba berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk edit lomba
     */
    public function edit(Lomba $lomba)
    {
        $bidang_lombas = BidangLomba::orderBy('nama_bidang')->get();
        $kategori_peserta = ['SD', 'SMP', 'SMA', 'Mahasiswa', 'Umum', 'Pelajar'];
        $lokasi_options = ['Online', 'Offline', 'Hybrid'];
        
        return view('lomba.edit', compact('lomba', 'bidang_lombas', 'kategori_peserta', 'lokasi_options'));
    }

    /**
     * Mengupdate data lomba di database
     */
    public function update(Request $request, Lomba $lomba)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lomba' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'penyelenggara_lomba' => 'required|string|max:255',
            'tgl_lomba' => 'required|date',
            'lokasi' => 'required|in:Online,Offline,Hybrid',
            'kategori_peserta' => 'required|in:SD,SMP,SMA,Mahasiswa,Umum,Pelajar',
            'id_bidang' => 'required|exists:bidang_lombas,id_bidang',
            'link_daftar' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'status' => 'required|in:available,unavailable'
        ]);
        
        // Handle upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika bukan default
            if ($lomba->gambar && $lomba->gambar !== 'uploads/default-lomba.jpg' && file_exists(public_path($lomba->gambar))) {
                unlink(public_path($lomba->gambar));
            }
            
            // Upload gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $file->move(public_path('uploads'), $filename);
            $validated['gambar'] = 'uploads/' . $filename;
        }
        
        // Update data
        $lomba->update($validated);
        
        return redirect()->route('lomba.index')
            ->with('success', 'Lomba berhasil diupdate!');
    }

    /**
     * Menghapus lomba dari database
     */
    public function destroy(Lomba $lomba)
    {
        // Hapus gambar jika bukan default
        if ($lomba->gambar && $lomba->gambar !== 'uploads/default-lomba.jpg' && file_exists(public_path($lomba->gambar))) {
            unlink(public_path($lomba->gambar));
        }
        
        // Hapus lomba
        $lomba->delete();
        
        return redirect()->route('lomba.index')
            ->with('success', 'Lomba berhasil dihapus!');
    }
}