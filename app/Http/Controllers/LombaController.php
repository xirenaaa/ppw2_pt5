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
}