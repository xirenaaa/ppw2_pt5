<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lomba;
use App\Models\BidangLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class LombaApiController extends Controller
{
    /**
     * Display a listing of lomba.
     * GET /api/lomba
     */
    public function index()
    {
        try {
            $lomba = Lomba::with(['bidang', 'hadiah'])->get();
            
            return response()->json([
                'success' => true,
                'message' => 'Data lomba berhasil diambil',
                'data' => $lomba
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data lomba',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created lomba.
     * POST /api/lomba
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lomba' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'penyelenggara' => 'required|string|max:255',
            'tanggal_lomba' => 'required|date',
            'lokasi' => 'required|in:Online,Offline,Hybrid',
            'kategori_peserta' => 'required|in:SD,SMP,SMA,Mahasiswa,Umum,Pelajar',
            'id_bidang' => 'required|exists:bidang_lombas,id_bidang',
            'link_daftar' => 'nullable|url',
            'status' => 'nullable|in:available,closed,coming_soon',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'nama_lomba.required' => 'Nama lomba wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'penyelenggara.required' => 'Penyelenggara wajib diisi',
            'tanggal_lomba.required' => 'Tanggal lomba wajib diisi',
            'tanggal_lomba.date' => 'Format tanggal tidak valid',
            'lokasi.required' => 'Lokasi wajib diisi',
            'lokasi.in' => 'Lokasi harus Online, Offline, atau Hybrid',
            'kategori_peserta.required' => 'Kategori peserta wajib diisi',
            'kategori_peserta.in' => 'Kategori peserta tidak valid',
            'id_bidang.required' => 'Bidang lomba wajib dipilih',
            'id_bidang.exists' => 'Bidang lomba tidak ditemukan',
            'link_daftar.url' => 'Link pendaftaran harus berupa URL valid',
            'status.in' => 'Status tidak valid',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $request->all();
            
            // Handle image upload
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $data['gambar'] = 'uploads/' . $imageName;
            } else {
                $data['gambar'] = 'uploads/default-lomba.jpg';
            }

            // Set default status
            if (!isset($data['status'])) {
                $data['status'] = 'available';
            }

            $lomba = Lomba::create($data);
            $lomba->load(['bidang', 'hadiah']);

            return response()->json([
                'success' => true,
                'message' => 'Lomba berhasil ditambahkan',
                'data' => $lomba
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan lomba',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified lomba.
     * GET /api/lomba/{id}
     */
    public function show($id)
    {
        try {
            $lomba = Lomba::with(['bidang', 'hadiah'])->find($id);

            if (!$lomba) {
                return response()->json([
                    'success' => false,
                    'message' => 'Lomba tidak ditemukan'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Data lomba berhasil diambil',
                'data' => $lomba
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data lomba',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified lomba.
     * PUT/PATCH /api/lomba/{id}
     */
    public function update(Request $request, $id)
    {
        $lomba = Lomba::find($id);

        if (!$lomba) {
            return response()->json([
                'success' => false,
                'message' => 'Lomba tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'nama_lomba' => 'sometimes|required|string|max:255',
            'deskripsi' => 'sometimes|required|string',
            'penyelenggara' => 'sometimes|required|string|max:255',
            'tanggal_lomba' => 'sometimes|required|date',
            'lokasi' => 'sometimes|required|in:Online,Offline,Hybrid',
            'kategori_peserta' => 'sometimes|required|in:SD,SMP,SMA,Mahasiswa,Umum,Pelajar',
            'id_bidang' => 'sometimes|required|exists:bidang_lombas,id_bidang',
            'link_daftar' => 'nullable|url',
            'status' => 'nullable|in:available,closed,coming_soon',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'nama_lomba.required' => 'Nama lomba wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'penyelenggara.required' => 'Penyelenggara wajib diisi',
            'tanggal_lomba.required' => 'Tanggal lomba wajib diisi',
            'tanggal_lomba.date' => 'Format tanggal tidak valid',
            'lokasi.required' => 'Lokasi wajib diisi',
            'lokasi.in' => 'Lokasi harus Online, Offline, atau Hybrid',
            'kategori_peserta.required' => 'Kategori peserta wajib diisi',
            'kategori_peserta.in' => 'Kategori peserta tidak valid',
            'id_bidang.required' => 'Bidang lomba wajib dipilih',
            'id_bidang.exists' => 'Bidang lomba tidak ditemukan',
            'link_daftar.url' => 'Link pendaftaran harus berupa URL valid',
            'status.in' => 'Status tidak valid',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $request->all();
            
            // Handle image upload
            if ($request->hasFile('gambar')) {
                // Delete old image if exists and not default
                if ($lomba->gambar && $lomba->gambar !== 'uploads/default-lomba.jpg' && file_exists(public_path($lomba->gambar))) {
                    unlink(public_path($lomba->gambar));
                }

                $image = $request->file('gambar');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $data['gambar'] = 'uploads/' . $imageName;
            }

            $lomba->update($data);
            $lomba->load(['bidang', 'hadiah']);

            return response()->json([
                'success' => true,
                'message' => 'Lomba berhasil diupdate',
                'data' => $lomba
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengupdate lomba',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified lomba.
     * DELETE /api/lomba/{id}
     */
    public function destroy($id)
    {
        try {
            $lomba = Lomba::find($id);

            if (!$lomba) {
                return response()->json([
                    'success' => false,
                    'message' => 'Lomba tidak ditemukan'
                ], 404);
            }

            // Delete image if exists and not default
            if ($lomba->gambar && $lomba->gambar !== 'uploads/default-lomba.jpg' && file_exists(public_path($lomba->gambar))) {
                unlink(public_path($lomba->gambar));
            }

            $lomba->delete();

            return response()->json([
                'success' => true,
                'message' => 'Lomba berhasil dihapus'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus lomba',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get lomba by bidang.
     * GET /api/lomba/bidang/{id_bidang}
     */
    public function getByBidang($id_bidang)
    {
        try {
            $bidang = BidangLomba::find($id_bidang);

            if (!$bidang) {
                return response()->json([
                    'success' => false,
                    'message' => 'Bidang lomba tidak ditemukan'
                ], 404);
            }

            $lomba = Lomba::with(['bidang', 'hadiah'])
                ->where('id_bidang', $id_bidang)
                ->get();

            return response()->json([
                'success' => true,
                'message' => 'Data lomba berhasil diambil',
                'bidang' => $bidang->nama_bidang,
                'data' => $lomba
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data lomba',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Search lomba by name.
     * GET /api/lomba/search?q={query}
     */
    public function search(Request $request)
    {
        try {
            $query = $request->input('q');

            if (!$query) {
                return response()->json([
                    'success' => false,
                    'message' => 'Parameter pencarian tidak boleh kosong'
                ], 400);
            }

            $lomba = Lomba::with(['bidang', 'hadiah'])
                ->where('nama_lomba', 'like', '%' . $query . '%')
                ->orWhere('penyelenggara', 'like', '%' . $query . '%')
                ->orWhere('deskripsi', 'like', '%' . $query . '%')
                ->get();

            return response()->json([
                'success' => true,
                'message' => 'Pencarian berhasil',
                'query' => $query,
                'count' => $lomba->count(),
                'data' => $lomba
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal melakukan pencarian',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
