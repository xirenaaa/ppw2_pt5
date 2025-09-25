<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lomba->nama_lomba }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="container mx-auto px-4 py-8">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('lomba.index') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-gray-700 transition">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Daftar Lomba
            </a>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Hero Image -->
            <div class="relative h-64 md:h-80">
                <img src="{{ asset($lomba->gambar) }}" alt="{{ $lomba->nama_lomba }}" class="w-full h-full object-cover"
                    onerror="this.src='https://via.placeholder.com/800x400/e5e7eb/9ca3af?text=No+Image'">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                    <div class="p-6 text-white">
                        <div class="mb-2">
                            <span class="inline-block px-3 py-1 text-sm font-semibold rounded-full
                                {{ $lomba->status === 'available' ? 'bg-green-500' : 'bg-red-500' }}">
                                {{ ucfirst($lomba->status) }}
                            </span>
                        </div>
                        <h1 class="text-2xl md:text-4xl font-bold mb-2">{{ $lomba->nama_lomba }}</h1>
                        <p class="text-lg opacity-90">
                            <i class="fas fa-building mr-2"></i>{{ $lomba->penyelenggara_lomba }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-6 md:p-8">
                <!-- Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                    <div class="bg-blue-50 p-4 rounded-lg text-center">
                        <i class="fas fa-calendar-alt text-2xl text-blue-600 mb-2"></i>
                        <div class="text-sm text-gray-600">Tanggal Lomba</div>
                        <div class="font-semibold">{{ \Carbon\Carbon::parse($lomba->tgl_lomba)->format('d F Y') }}</div>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg text-center">
                        <i class="fas fa-map-marker-alt text-2xl text-green-600 mb-2"></i>
                        <div class="text-sm text-gray-600">Lokasi</div>
                        <div class="font-semibold">{{ $lomba->lokasi }}</div>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg text-center">
                        <i class="fas fa-users text-2xl text-purple-600 mb-2"></i>
                        <div class="text-sm text-gray-600">Kategori</div>
                        <div class="font-semibold">{{ $lomba->kategori_peserta }}</div>
                    </div>
                    <div class="bg-orange-50 p-4 rounded-lg text-center">
                        <i class="fas fa-tag text-2xl text-orange-600 mb-2"></i>
                        <div class="text-sm text-gray-600">Bidang</div>
                        <div class="font-semibold">{{ $lomba->bidang->nama_bidang ?? 'Tidak ada' }}</div>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">
                        <i class="fas fa-info-circle mr-2"></i>Deskripsi Lomba
                    </h2>
                    <div class="prose max-w-none">
                        <div class="text-gray-700 leading-relaxed whitespace-pre-line">{{ $lomba->deskripsi }}</div>
                    </div>
                </div>

                <!-- Hadiah Section -->
                @if($lomba->hadiah->isNotEmpty())
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">
                            <i class="fas fa-trophy mr-2"></i>Hadiah
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($lomba->hadiah as $hadiah)
                                <div
                                    class="bg-gradient-to-r from-yellow-50 to-orange-50 p-4 rounded-lg border border-yellow-200">
                                    <div class="flex items-center mb-2">
                                        <i class="fas fa-medal text-yellow-600 mr-2"></i>
                                        <strong class="text-gray-800">{{ $hadiah->posisi }}</strong>
                                    </div>
                                    @if($hadiah->nominal && $hadiah->nominal !== '0' && $hadiah->nominal !== 'Unknown' && is_numeric($hadiah->nominal))
                                        <div class="text-green-600 font-semibold mb-1">Rp
                                            {{ number_format((float) $hadiah->nominal) }}</div>
                                    @elseif($hadiah->nominal && $hadiah->nominal !== '0' && $hadiah->nominal !== 'Unknown')
                                        <div class="text-green-600 font-semibold mb-1">{{ $hadiah->nominal }}</div>
                                    @endif
                                    <div class="text-gray-600 text-sm">{{ $hadiah->deskripsi }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Action Buttons -->
                <div class="border-t pt-6">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ $lomba->link_daftar }}" target="_blank"
                            class="flex-1 bg-green-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-700 transition text-center">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Daftar Lomba Sekarang
                        </a>
                        <button onclick="window.print()"
                            class="bg-gray-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-700 transition">
                            <i class="fas fa-print mr-2"></i>
                            Cetak Detail
                        </button>
                        <button onclick="shareContent()"
                            class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 transition">
                            <i class="fas fa-share mr-2"></i>
                            Bagikan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function shareContent() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $lomba->nama_lomba }}',
                    text: 'Lihat lomba menarik ini: {{ $lomba->nama_lomba }}',
                    url: window.location.href
                });
            } else {
                // Fallback: copy to clipboard
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert('Link berhasil disalin ke clipboard!');
                });
            }
        }
    </script>
</body>

</html>