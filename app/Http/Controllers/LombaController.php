<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function index(Request $request)
    {
        $query = Lomba::query();

        // SOAL 3: filtering by kategori
        if ($request->filled('penyelenggara')) {
            $query->where('penyelenggara', $request->penyelenggara);
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
            'total_harga' => Lomba::sum('harga'),
            'harga_tertinggi' => Lomba::max('harga'),
            'harga_terendah' => Lomba::min('harga'),
        ];
        
        $penyelenggara = Lomba::select('penyelenggara')->distinct()->orderBy('penyelenggara')->pluck('penyelenggara');

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
        'penyelenggara' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
    ]);

    $lomba->update($validated);

    return redirect()->route('lomba.index')->with('success', 'Data lomba berhasil diperbarui!');
}
}