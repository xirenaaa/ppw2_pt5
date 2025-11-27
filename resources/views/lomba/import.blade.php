<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800">
                <i class="fas fa-file-import mr-2"></i>Import Data Lomba
            </h2>
            <a href="{{ url('/') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                <i class="fas fa-arrow-left mr-2"></i>Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg shadow-md" role="alert">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-3 text-xl"></i>
                        <p class="font-medium">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <!-- Error Message -->
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg shadow-md" role="alert">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-3 text-xl"></i>
                        <div>
                            <p class="font-medium">{{ session('error') }}</p>
                            @if(session('failures'))
                                <ul class="mt-2 ml-4 list-disc text-sm">
                                    @foreach(session('failures') as $failure)
                                        <li>Baris {{ $failure->row() }}: {{ implode(', ', $failure->errors()) }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <p class="font-semibold">Terdapat kesalahan:</p>
                    </div>
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Instructions Card -->
            <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-6 rounded-lg">
                <h3 class="text-lg font-bold text-blue-900 mb-3">
                    <i class="fas fa-info-circle mr-2"></i>Panduan Import
                </h3>
                <ol class="list-decimal list-inside text-blue-800 space-y-2 text-sm">
                    <li>Download template Excel dengan klik tombol "Download Template" di bawah</li>
                    <li>Isi data lomba sesuai dengan kolom yang tersedia</li>
                    <li>Pastikan format tanggal: <code class="bg-blue-100 px-2 py-1 rounded">DD-MM-YYYY</code> (contoh: 17-11-2025)</li>
                    <li>Kolom yang wajib diisi: Nama Lomba, Deskripsi, Penyelenggara, Tanggal Lomba, Lokasi, Kategori Peserta, Bidang</li>
                    <li>Lokasi harus salah satu: <strong>Online</strong>, <strong>Offline</strong>, atau <strong>Hybrid</strong></li>
                    <li>Kategori harus salah satu: <strong>SD</strong>, <strong>SMP</strong>, <strong>SMA</strong>, <strong>Mahasiswa</strong>, <strong>Umum</strong>, atau <strong>Pelajar</strong></li>
                    <li>Bidang harus sesuai dengan nama bidang yang ada di sistem</li>
                    <li>Upload file yang sudah diisi menggunakan form di bawah</li>
                </ol>
            </div>

            <!-- Template Download Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6 border-2 border-green-200">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-file-excel text-green-600 text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">
                                Download Template Excel
                            </h3>
                            <p class="text-sm text-gray-700 mb-2">Template dengan format dan kolom yang sudah sesuai</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-green-50 text-green-800 px-3 py-1 rounded-full border border-green-200 font-medium">
                                    <i class="fas fa-check text-green-600 mr-1"></i>36 Data Contoh
                                </span>
                                <span class="text-xs bg-green-50 text-green-800 px-3 py-1 rounded-full border border-green-200 font-medium">
                                    <i class="fas fa-table text-green-600 mr-1"></i>Format Lengkap
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('lomba.export') }}" 
                       class="w-full md:w-auto inline-flex items-center justify-center px-8 py-4 bg-white border-2 border-green-600 text-green-700 rounded-xl hover:bg-green-50 hover:border-green-700 transition-all shadow-md hover:shadow-lg font-bold text-base whitespace-nowrap">
                        <i class="fas fa-download mr-2 text-lg"></i>Download Template
                    </a>
                </div>
            </div>

            <!-- Import Form Card -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden border-2 border-purple-300">
                <div class="bg-gradient-to-r from-purple-600 to-purple-700 px-6 py-6">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-upload text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-1">Upload File Import</h3>
                            <p class="text-purple-100 text-sm">Unggah file Excel Anda di sini</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('lomba.import') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
                    @csrf

                    <!-- File Input -->
                    <div class="mb-6">
                        <label for="file" class="block text-base font-bold text-gray-800 mb-3">
                            <i class="fas fa-file-excel text-green-600 mr-2"></i>Pilih File Excel 
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="relative border-2 border-dashed border-purple-300 rounded-xl p-8 bg-purple-50 hover:bg-purple-100 transition-all cursor-pointer">
                            <div class="text-center">
                                <i class="fas fa-cloud-upload-alt text-6xl text-purple-500 mb-3 block"></i>
                                <p class="text-base text-gray-700 font-semibold mb-1">
                                    Klik atau drag & drop file di sini
                                </p>
                                <p class="text-sm text-gray-500">
                                    File Excel atau CSV
                                </p>
                            </div>
                            <input type="file" 
                                   name="file" 
                                   id="file" 
                                   accept=".xlsx,.xls,.csv"
                                   class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                   required>
                        </div>
                        <div class="mt-3 flex items-start gap-2 text-xs text-gray-600 bg-blue-50 p-3 rounded-lg border border-blue-200">
                            <i class="fas fa-info-circle text-blue-600 mt-0.5"></i>
                            <div>
                                <p class="font-semibold text-blue-800">Format yang didukung:</p>
                                <p>Excel (.xlsx, .xls) atau CSV (.csv) dengan ukuran maksimal 5MB</p>
                            </div>
                        </div>
                        @error('file')
                            <div class="mt-3 flex items-center gap-2 text-sm text-red-600 bg-red-50 p-3 rounded-lg border border-red-200">
                                <i class="fas fa-exclamation-circle"></i>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <!-- File Preview -->
                    <div id="filePreview" class="hidden mb-6 p-5 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-2 border-green-300 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center flex-1">
                                <div class="w-14 h-14 bg-white rounded-lg flex items-center justify-center mr-4 shadow-sm">
                                    <i class="fas fa-file-excel text-green-600 text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold text-gray-800 mb-1" id="fileName">filename.xlsx</p>
                                    <div class="flex items-center gap-3">
                                        <span class="text-xs text-gray-600 bg-white px-2 py-1 rounded-full" id="fileSize">0 KB</span>
                                        <span class="text-xs text-green-600 font-semibold flex items-center">
                                            <i class="fas fa-check-circle mr-1"></i>Siap diimport
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="button" onclick="clearFile()" class="ml-3 text-red-500 hover:text-red-700 transition-colors">
                                <i class="fas fa-times-circle text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-6 mt-6 border-t-2 border-gray-200">
                        <a href="{{ url('/') }}" 
                           class="inline-flex items-center justify-center px-6 py-4 bg-white border-2 border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 hover:border-gray-400 transition-all font-bold text-base shadow-md hover:shadow-lg">
                            <i class="fas fa-arrow-left mr-2 text-lg"></i>Kembali ke Daftar
                        </a>
                        <button type="submit" 
                                class="inline-flex items-center justify-center px-8 py-4 bg-white border-2 border-purple-600 text-purple-700 rounded-xl hover:bg-purple-50 hover:border-purple-700 transition-all shadow-md hover:shadow-lg font-bold text-base whitespace-nowrap">
                            <i class="fas fa-file-import mr-2 text-lg"></i>Import Data Sekarang
                        </button>
                    </div>
                </form>
            </div>

            <!-- Info Bidang Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 mt-6 border border-gray-200">
                <h3 class="text-lg font-bold text-gray-800 mb-4">
                    <i class="fas fa-list-check text-purple-600 mr-2"></i>Bidang Lomba yang Tersedia
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    @php
                        $bidangLombas = \App\Models\BidangLomba::orderBy('nama_bidang')->get();
                    @endphp
                    @foreach($bidangLombas as $bidang)
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg border border-gray-200">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-sm font-medium text-gray-700">{{ $bidang->nama_bidang }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <!-- JavaScript for Enhanced File Preview -->
    <script>
        const fileInput = document.getElementById('file');
        const filePreview = document.getElementById('filePreview');
        
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            
            if (file) {
                // Update preview box
                document.getElementById('fileName').textContent = file.name;
                document.getElementById('fileSize').textContent = formatFileSize(file.size);
                filePreview.classList.remove('hidden');
                
                // Update upload area visual
                const uploadArea = fileInput.parentElement;
                uploadArea.classList.remove('border-purple-300', 'bg-purple-50');
                uploadArea.classList.add('border-green-400', 'bg-green-50');
                
                // Update icon and text
                const icon = uploadArea.querySelector('.fa-cloud-upload-alt');
                const text = uploadArea.querySelector('p');
                if (icon) {
                    icon.className = 'fas fa-check-circle text-5xl text-green-500 mb-2';
                }
                if (text) {
                    text.innerHTML = '<span class="text-green-700 font-semibold">File berhasil dipilih!</span>';
                }
            } else {
                filePreview.classList.add('hidden');
                
                // Reset upload area
                const uploadArea = fileInput.parentElement;
                uploadArea.classList.remove('border-green-400', 'bg-green-50');
                uploadArea.classList.add('border-purple-300', 'bg-purple-50');
            }
        });
        
        // Drag and drop styling
        const dropZone = fileInput.parentElement;
        
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight(e) {
            dropZone.classList.add('border-purple-500', 'bg-purple-200', 'scale-105');
        }
        
        function unhighlight(e) {
            dropZone.classList.remove('border-purple-500', 'bg-purple-200', 'scale-105');
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
        }
        
        function clearFile() {
            fileInput.value = '';
            filePreview.classList.add('hidden');
            
            // Reset upload area
            const uploadArea = fileInput.parentElement;
            uploadArea.classList.remove('border-green-400', 'bg-green-50');
            uploadArea.classList.add('border-purple-300', 'bg-purple-50');
            
            // Reset icon and text
            const icon = uploadArea.querySelector('.fa-check-circle');
            const text = uploadArea.querySelector('p');
            if (icon) {
                icon.className = 'fas fa-cloud-upload-alt text-5xl text-purple-400 mb-2';
            }
            if (text) {
                text.innerHTML = 'Klik atau drag & drop file di sini';
                text.className = 'text-sm text-gray-600 font-medium';
            }
        }
    </script>
</x-app-layout>
