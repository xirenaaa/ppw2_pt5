<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
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
        'harga' => 'required|numeric',
    ]);

    $lomba->update($validated);

    return redirect()->route('lomba.index')->with('success', 'Data lomba berhasil diperbarui!');
}
}