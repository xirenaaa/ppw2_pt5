<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lomba Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 to-sky-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-6">
            <a href="{{ url('/') }}" 
               class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Daftar Lomba
            </a>
        </div>

        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden">
            <!-- Header Card -->
            <div class="bg-gradient-to-r from-green-500 to-green-600 p-6 text-white">
                <h1 class="text-3xl font-bold mb-2">
                    <i class="fas fa-plus-circle mr-2"></i>Tambah Lomba Baru
                </h1>
                <p class="text-green-100">Lengkapi formulir di bawah untuk menambahkan lomba baru</p>
            </div>

            <!-- Form -->
            <form action="{{ url('/lomba') }}" method="POST" enctype="multipart/form-data" class="p-8">
                @csrf

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <p class="font-bold">Terdapat beberapa kesalahan:</p>
                        </div>
                        <ul class="list-disc list-inside ml-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Nama Lomba -->
                <div class="mb-6">
                    <label for="nama_lomba" class="block text-gray-700 font-bold mb-2">
                        <i class="fas fa-trophy text-yellow-500 mr-2"></i>Nama Lomba
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="nama_lomba" id="nama_lomba" 
                           value="{{ old('nama_lomba') }}"
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('nama_lomba') border-red-500 @enderror"
                           placeholder="Contoh: Olimpiade Matematika Nasional 2025" required>
                    @error('nama_lomba')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Penyelenggara -->
                <div class="mb-6">
                    <label for="penyelenggara_lomba" class="block text-gray-700 font-bold mb-2">
                        <i class="fas fa-building text-blue-500 mr-2"></i>Penyelenggara
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="penyelenggara_lomba" id="penyelenggara_lomba" 
                           value="{{ old('penyelenggara_lomba') }}"
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('penyelenggara_lomba') border-red-500 @enderror"
                           placeholder="Contoh: Universitas Indonesia" required>
                    @error('penyelenggara_lomba')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Grid Layout untuk Bidang, Kategori, Lokasi -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <!-- Bidang Lomba -->
                    <div>
                        <label for="id_bidang" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-tag text-orange-500 mr-2"></i>Bidang
                            <span class="text-red-500">*</span>
                        </label>
                        <select name="id_bidang" id="id_bidang" 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('id_bidang') border-red-500 @enderror" 
                                required>
                            <option value="">Pilih Bidang</option>
                            @foreach($bidang_lombas as $bidang)
                                <option value="{{ $bidang->id_bidang }}" {{ old('id_bidang') == $bidang->id_bidang ? 'selected' : '' }}>
                                    {{ $bidang->nama_bidang }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_bidang')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Kategori Peserta -->
                    <div>
                        <label for="kategori_peserta" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-users text-purple-500 mr-2"></i>Kategori
                            <span class="text-red-500">*</span>
                        </label>
                        <select name="kategori_peserta" id="kategori_peserta" 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('kategori_peserta') border-red-500 @enderror" 
                                required>
                            <option value="">Pilih Kategori</option>
                            @foreach($kategori_peserta as $kategori)
                                <option value="{{ $kategori }}" {{ old('kategori_peserta') == $kategori ? 'selected' : '' }}>
                                    {{ $kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_peserta')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Lokasi -->
                    <div>
                        <label for="lokasi" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-map-marker-alt text-green-500 mr-2"></i>Lokasi
                            <span class="text-red-500">*</span>
                        </label>
                        <select name="lokasi" id="lokasi" 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('lokasi') border-red-500 @enderror" 
                                required>
                            <option value="">Pilih Lokasi</option>
                            @foreach($lokasi_options as $lok)
                                <option value="{{ $lok }}" {{ old('lokasi') == $lok ? 'selected' : '' }}>
                                    {{ $lok }}
                                </option>
                            @endforeach
                        </select>
                        @error('lokasi')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Grid Layout untuk Tanggal dan Status -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Tanggal Lomba -->
                    <div>
                        <label for="tgl_lomba" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-calendar text-red-500 mr-2"></i>Tanggal Lomba
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="date" name="tgl_lomba" id="tgl_lomba" 
                               value="{{ old('tgl_lomba') }}"
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('tgl_lomba') border-red-500 @enderror" 
                               required>
                        @error('tgl_lomba')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-check-circle text-teal-500 mr-2"></i>Status
                            <span class="text-red-500">*</span>
                        </label>
                        <select name="status" id="status" 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('status') border-red-500 @enderror" 
                                required>
                            <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Tersedia</option>
                            <option value="unavailable" {{ old('status') == 'unavailable' ? 'selected' : '' }}>Tidak Tersedia</option>
                        </select>
                        @error('status')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Link Pendaftaran -->
                <div class="mb-6">
                    <label for="link_daftar" class="block text-gray-700 font-bold mb-2">
                        <i class="fas fa-link text-indigo-500 mr-2"></i>Link Pendaftaran
                        <span class="text-gray-500 text-sm font-normal">(Opsional)</span>
                    </label>
                    <input type="url" name="link_daftar" id="link_daftar" 
                           value="{{ old('link_daftar') }}"
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('link_daftar') border-red-500 @enderror"
                           placeholder="https://contoh.com/daftar">
                    @error('link_daftar')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="mb-6">
                    <label for="deskripsi" class="block text-gray-700 font-bold mb-2">
                        <i class="fas fa-align-left text-gray-500 mr-2"></i>Deskripsi Lomba
                        <span class="text-red-500">*</span>
                    </label>
                    <textarea name="deskripsi" id="deskripsi" rows="6" 
                              class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('deskripsi') border-red-500 @enderror"
                              placeholder="Tulis deskripsi lengkap tentang lomba..." required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Upload Gambar -->
                <div class="mb-6">
                    <label for="gambar" class="block text-gray-700 font-bold mb-2">
                        <i class="fas fa-image text-pink-500 mr-2"></i>Gambar Lomba
                        <span class="text-gray-500 text-sm font-normal">(Opsional, Max: 5MB)</span>
                    </label>
                    <input type="file" name="gambar" id="gambar" accept="image/*"
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('gambar') border-red-500 @enderror"
                           onchange="previewImage(event)">
                    @error('gambar')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    
                    <!-- Image Preview -->
                    <div id="imagePreview" class="mt-4 hidden">
                        <p class="text-sm text-gray-600 mb-2">Preview:</p>
                        <img id="preview" src="" alt="Preview" class="max-w-md rounded-lg shadow-lg">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-6 border-t">
                    <button type="submit"
                            class="flex-1 bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-3 px-6 rounded-xl hover:from-green-600 hover:to-green-700 transform hover:scale-105 transition-all shadow-lg">
                        <i class="fas fa-save mr-2"></i>Simpan Lomba
                    </button>
                    <a href="{{ url('/') }}"
                       class="flex-1 bg-gradient-to-r from-gray-500 to-gray-600 text-white font-bold py-3 px-6 rounded-xl hover:from-gray-600 hover:to-gray-700 transform hover:scale-105 transition-all shadow-lg text-center">
                        <i class="fas fa-times mr-2"></i>Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('preview');
                const previewDiv = document.getElementById('imagePreview');
                output.src = reader.result;
                previewDiv.classList.remove('hidden');
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>
