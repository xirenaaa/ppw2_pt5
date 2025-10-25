<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Info Lomba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e0f2fe 0%, #b3e5fc 100%);
        }

        .lomba-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .lomba-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(14, 165, 233, 0.2), 0 10px 10px -5px rgba(14, 165, 233, 0.1);
        }

        .card-image {
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            display: flex;
            flex-direction: column;
            height: calc(100% - 200px);
        }

        .card-description {
            flex-grow: 1;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .gradient-header {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
        }

        .card-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
        }
    </style>
</head>

<body class="text-gray-800 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <h1 class="text-2xl font-bold text-gray-800">Sistem Info Lomba</h1>
                </div>
                
                <div class="flex items-center space-x-3">
                    @auth
                        <!-- Logged in user -->
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center space-x-2 bg-gradient-to-r from-sky-50 to-blue-50 px-4 py-2 rounded-lg border border-sky-200">
                                <div class="w-8 h-8 bg-sky-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Welcome back,</p>
                                    <p class="font-semibold text-sm text-gray-800">{{ Auth::user()->name }}</p>
                                </div>
                                <span class="text-xs bg-sky-500 text-white px-2 py-0.5 rounded-full font-medium ml-2">
                                    {{ ucfirst(Auth::user()->role) }}
                                </span>
                            </div>
                            <a href="{{ url('/dashboard') }}" 
                               class="px-3 py-1.5 text-sm bg-gradient-to-r from-sky-500 to-blue-500 text-white rounded-md hover:from-sky-600 hover:to-blue-600 transition-all font-medium shadow-sm hover:shadow-md">
                                <i class="fas fa-th-large mr-1.5"></i>Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" 
                                        class="px-3 py-1.5 text-sm bg-white border border-red-300 text-red-600 rounded-md hover:bg-red-50 hover:border-red-400 transition-all font-medium">
                                    <i class="fas fa-sign-out-alt mr-1.5"></i>Logout
                                </button>
                            </form>
                        </div>
                    @else
                        <!-- Not logged in -->
                        <a href="{{ route('login') }}" 
                           class="px-4 py-1.5 text-sm border border-sky-400 text-sky-600 rounded-md hover:bg-sky-50 transition-all font-medium">
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                           class="px-4 py-1.5 text-sm bg-gradient-to-r from-sky-500 to-blue-500 text-white rounded-md hover:from-sky-600 hover:to-blue-600 transition-all font-medium shadow-sm hover:shadow-md">
                            Register
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="gradient-header rounded-2xl p-8 mb-8 text-center text-white shadow-lg">
            <h1 class="text-5xl font-bold mb-4 drop-shadow-lg">Info Lomba Terbaru</h1>
            <p class="text-xl opacity-90">Temukan berbagai lomba menarik dan tingkatkan kemampuanmu!</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg shadow-md" role="alert">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-3 text-xl"></i>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Tombol Tambah Lomba (Admin Only) -->
        @auth
            @if(Auth::user()->role == 'admin')
            <div class="mb-6">
                <a href="{{ url('/lomba/create/new') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-bold rounded-xl hover:from-green-600 hover:to-green-700 transform hover:scale-105 transition-all shadow-lg">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Tambah Lomba Baru
                </a>
            </div>
            @endif
        @endauth

        <!-- Search and Filters -->
        <div class="card-gradient p-6 rounded-2xl shadow-lg mb-8 border border-sky-100">
            <form action="{{ url('/') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                    <div class="md:col-span-4">
                        <input type="text" name="search"
                            class="w-full px-4 py-3 border-2 border-sky-200 rounded-xl focus:ring-3 focus:ring-sky-300 focus:border-sky-400 transition-all"
                            placeholder="Cari nama lomba..." value="{{ request('search') }}">
                    </div>
                    <div class="md:col-span-3">
                        <select name="penyelenggara"
                            class="w-full px-4 py-3 border-2 border-sky-200 rounded-xl focus:ring-3 focus:ring-sky-300 focus:border-sky-400 transition-all">
                            <option value="">Semua Penyelenggara</option>
                            @foreach($penyelenggara as $p)
                                <option value="{{ $p }}" {{ request('penyelenggara') == $p ? 'selected' : '' }}>
                                    {{ Str::limit($p, 30) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <select name="bidang"
                            class="w-full px-4 py-3 border-2 border-sky-200 rounded-xl focus:ring-3 focus:ring-sky-300 focus:border-sky-400 transition-all">
                            <option value="">Semua Bidang</option>
                            @foreach($bidang_lombas as $bidang)
                                <option value="{{ $bidang->id_bidang }}" {{ request('bidang') == $bidang->id_bidang ? 'selected' : '' }}>
                                    {{ $bidang->nama_bidang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <select name="kategori"
                            class="w-full px-4 py-3 border-2 border-sky-200 rounded-xl focus:ring-3 focus:ring-sky-300 focus:border-sky-400 transition-all">
                            <option value="">Semua Kategori</option>
                            @foreach($kategori_peserta as $kategori)
                                <option value="{{ $kategori }}" {{ request('kategori') == $kategori ? 'selected' : '' }}>
                                    {{ $kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-1">
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-sky-500 to-sky-600 text-white font-bold py-3 px-4 rounded-xl hover:from-sky-600 hover:to-sky-700 transform hover:scale-105 transition-all shadow-lg">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Latest Lomba Section -->
        <div class="card-gradient p-8 rounded-2xl shadow-lg mb-8 border border-sky-100">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-3xl font-bold text-sky-900">
                    <i class></i>Lomba Terbaru
                </h2>
                <div class="text-sm text-sky-600 font-medium">
                    <i class="fas fa-clock mr-1"></i>
                    Diperbarui {{ now()->format('d M Y') }}
                </div>
            </div>

            @if($lombaTerbaru->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                    @foreach($lombaTerbaru as $index => $lomba)
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden border border-sky-100 transform hover:scale-105 transition-all hover:shadow-lg">
                            <div class="relative">
                                <img src="{{ asset($lomba->gambar) }}" alt="{{ $lomba->nama_lomba }}"
                                    class="w-full h-32 object-cover"
                                    onerror="this.src='https://via.placeholder.com/300x128/0ea5e9/ffffff?text=Lomba+{{ $index + 1 }}'">
                                <div class="absolute top-2 left-2">
                                    <span
                                        class="bg-gradient-to-r from-orange-400 to-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                        NEW
                                    </span>
                                </div>
                                <div class="absolute top-2 right-2">
                                    <span
                                        class="bg-gradient-to-r from-emerald-400 to-emerald-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                        #{{ $index + 1 }}
                                    </span>
                                </div>
                            </div>

                            <div class="p-4">
                                <h3 class="font-bold text-sm text-sky-900 mb-2 line-clamp-2" style="min-height: 2.5rem;">
                                    {{ Str::limit($lomba->nama_lomba, 40) }}
                                </h3>

                                <div class="flex items-center text-xs text-sky-600 mb-2">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    {{ \Carbon\Carbon::parse($lomba->tgl_lomba)->format('d M Y') }}
                                </div>

                                <div class="mb-3">
                                    <p class="text-xs text-gray-600 mb-2">
                                        <i class="fas fa-building mr-1"></i>
                                        {{ Str::limit($lomba->penyelenggara_lomba, 25) }}
                                    </p>
                                </div>

                                <div class="flex flex-wrap gap-1 mb-3">
                                    <span class="bg-sky-100 text-sky-800 text-xs px-2 py-1 rounded-full">
                                        {{ $lomba->kategori_peserta }}
                                    </span>
                                    <span class="bg-emerald-100 text-emerald-800 text-xs px-2 py-1 rounded-full">
                                        {{ $lomba->lokasi }}
                                    </span>
                                </div>

                                <a href="{{ url('/lomba/' . $lomba->id_lomba) }}"
                                    class="block w-full bg-gradient-to-r from-sky-500 to-sky-600 text-white text-center py-2 rounded-lg hover:from-sky-600 hover:to-sky-700 transition-all text-xs font-bold">
                                    <i class="fas fa-eye mr-1"></i>Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8 text-sky-600">
                    <i class="fas fa-info-circle text-3xl mb-4"></i>
                    <p class="text-lg">Belum ada lomba terbaru tersedia</p>
                </div>
            @endif
        </div>

        @if($lombas->isEmpty())
            <div
                class="bg-gradient-to-r from-amber-50 to-orange-50 border-l-4 border-amber-400 text-amber-800 p-6 rounded-xl text-center shadow-lg">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-search text-5xl text-amber-400"></i>
                </div>
                <p class="text-xl font-bold mb-2">Lomba tidak ditemukan</p>
                <p class="text-sm">Coba ubah kriteria pencarian atau
                    <a href="{{ url('/') }}"
                        class="text-sky-600 underline hover:text-sky-700 font-semibold">lihat semua lomba</a>
                </p>
            </div>
        @else
            <!-- All Lomba Section Header -->
            <div class="mb-6">
                <h2 class="text-3xl font-bold text-sky-900">
                    <i class="text-yellow-500"></i>Semua Lomba Tersedia
                </h2>
                <p class="text-sky-600 mt-2">Jelajahi semua lomba yang tersedia dan temukan yang sesuai dengan minatmu</p>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                @foreach($lombas as $lomba)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden lomba-card border border-sky-100">
                        <!-- Image -->
                        <div class="relative">
                            <img src="{{ asset($lomba->gambar) }}" alt="{{ $lomba->nama_lomba }}" class="w-full card-image"
                                onerror="this.src='https://via.placeholder.com/400x200/0ea5e9/ffffff?text=No+Image'">
                            <div class="absolute top-3 right-3">
                                <span
                                    class="inline-block px-3 py-1 text-xs font-bold rounded-full shadow-lg
                                        {{ $lomba->status === 'available' ? 'bg-gradient-to-r from-emerald-400 to-emerald-500 text-white' : 'bg-gradient-to-r from-red-400 to-red-500 text-white' }}">
                                    {{ ucfirst($lomba->status) }}
                                </span>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-sky-900/80 to-transparent p-3">
                                <div class="text-white text-sm font-medium">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    {{ \Carbon\Carbon::parse($lomba->tgl_lomba)->format('d M Y') }}
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-4 card-content">
                            <!-- Title -->
                            <h3 class="text-lg font-bold text-sky-900 mb-2 line-clamp-2">
                                {{ $lomba->nama_lomba }}
                            </h3>

                            <!-- Organizer -->
                            <p class="text-sm text-sky-600 mb-3 line-clamp-1 font-medium">
                                <i class="fas fa-building mr-1"></i>
                                {{ $lomba->penyelenggara_lomba }}
                            </p>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-1 mb-3">
                                @if($lomba->bidang)
                                    <span
                                        class="bg-gradient-to-r from-sky-100 to-sky-200 text-sky-800 text-xs px-2 py-1 rounded-full font-medium">
                                        {{ Str::limit($lomba->bidang->nama_bidang, 15) }}
                                    </span>
                                @endif
                                <span
                                    class="bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 text-xs px-2 py-1 rounded-full font-medium">
                                    {{ $lomba->kategori_peserta }}
                                </span>
                                <span
                                    class="bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-800 text-xs px-2 py-1 rounded-full font-medium">
                                    {{ $lomba->lokasi }}
                                </span>
                            </div>

                            <!-- Description -->
                            <p class="text-gray-600 text-sm mb-4 card-description">
                                {{ Str::limit(strip_tags($lomba->deskripsi), 100) }}
                            </p>

                            <!-- Actions -->
                            <div class="mt-auto space-y-2">
                                <a href="{{ url('/lomba/' . $lomba->id_lomba) }}"
                                    class="block w-full bg-gradient-to-r from-sky-500 to-sky-600 text-white text-center py-2 px-4 rounded-xl hover:from-sky-600 hover:to-sky-700 transition-all text-sm font-bold shadow-lg transform hover:scale-105">
                                    <i class="fas fa-eye mr-2"></i>Detail Lomba
                                </a>
                                
                                <!-- Tombol Edit dan Delete (Admin Only) -->
                                @auth
                                    @if(Auth::user()->role == 'admin')
                                    <div class="grid grid-cols-2 gap-2">
                                        <a href="{{ url('/lomba/edit/' . $lomba->id_lomba) }}"
                                            class="block w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white text-center py-2 px-3 rounded-xl hover:from-amber-600 hover:to-amber-700 transition-all text-xs font-bold shadow-lg transform hover:scale-105">
                                            <i class="fas fa-edit mr-1"></i>Edit
                                        </a>
                                        <form action="{{ url('/lomba/' . $lomba->id_lomba) }}" method="POST" 
                                              onsubmit="return confirm('Yakin ingin menghapus lomba ini?')" class="w-full">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="block w-full bg-gradient-to-r from-red-500 to-red-600 text-white text-center py-2 px-3 rounded-xl hover:from-red-600 hover:to-red-700 transition-all text-xs font-bold shadow-lg transform hover:scale-105">
                                                <i class="fas fa-trash mr-1"></i>Hapus
                                            </button>
                                        </form>
                                    </div>
                                    @endif
                                @endauth
                                
                                @if($lomba->link_daftar)
                                <a href="{{ $lomba->link_daftar }}" target="_blank"
                                    class="block w-full bg-gradient-to-r from-emerald-500 to-emerald-600 text-white text-center py-2 px-4 rounded-xl hover:from-emerald-600 hover:to-emerald-700 transition-all text-sm font-bold shadow-lg transform hover:scale-105">
                                    <i class="fas fa-external-link-alt mr-2"></i>Daftar Sekarang
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                {{ $lombas->appends(request()->query())->links() }}
            </div>
        @endif

        <!-- Statistics -->
        <div class="mt-12 card-gradient p-8 rounded-2xl shadow-lg border border-sky-100">
            <h3 class="text-3xl font-bold mb-8 text-sky-900 text-center">
                <i class="fas fa-chart-bar mr-3 text-sky-600"></i>Statistik Lomba
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div
                    class="bg-gradient-to-br from-sky-50 to-sky-100 p-6 rounded-2xl border border-sky-200 transform hover:scale-105 transition-all">
                    <div class="text-4xl font-bold text-sky-600 mb-2">{{ $stats['total_lomba'] }}</div>
                    <div class="text-sky-800 font-semibold">Total Lomba</div>
                </div>
                <div
                    class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-6 rounded-2xl border border-emerald-200 transform hover:scale-105 transition-all">
                    <div class="text-4xl font-bold text-emerald-600 mb-2">{{ $stats['total_available'] ?? '0' }}</div>
                    <div class="text-emerald-800 font-semibold">Tersedia</div>
                </div>
                <div
                    class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-2xl border border-red-200 transform hover:scale-105 transition-all">
                    <div class="text-4xl font-bold text-red-600 mb-2">{{ $stats['total_unavailable'] ?? '0' }}</div>
                    <div class="text-red-800 font-semibold">Tidak Tersedia</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>