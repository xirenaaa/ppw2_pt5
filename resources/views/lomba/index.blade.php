<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Info Lomba</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-sky-100 text-gray-800">
    <div class="container mx-auto p-4 md:p-8">
        <h1 class="text-4xl font-bold text-center text-sky-800 mb-6">Info Lomba</h1>

        <div class="bg-white p-6 rounded-xl shadow-lg mb-8">
            <form action="{{ route('lomba.index') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                    <div class="md:col-span-4"><input type="text" name="search"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Cari judul lomba..."
                            value="{{ request('search') }}"></div>
                    <div class="md:col-span-3"><select name="penyelenggara"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="">Semua Penyelenggara</option>@foreach($penyelenggara as $p)<option
                                value="{{ $p }}" {{ request('penyelenggara') == $p ? 'selected' : '' }}>{{ $p }}</option>
                            @endforeach
                        </select></div>
                    <div class="md:col-span-2"><select name="bidang"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="">Semua Bidang</option>
                            @foreach($bidang_lombas as $bidang)
                                <option value="{{ $bidang->id_bidang }}" 
                                    {{ request('bidang') == $bidang->id_bidang ? 'selected' : '' }}>
                                    {{ $bidang->nama_bidang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-2"><select name="kategori"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                            <option value="">Semua Kategori</option>@foreach($kategori_peserta as $kategori)<option
                                value="{{ $kategori }}" {{ request('kategori') == $kategori ? 'selected' : '' }}>
                            {{ $kategori }}</option>@endforeach
                        </select></div>
                    <div class="md:col-span-1"><button type="submit"
                            class="w-full bg-sky-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-sky-700">Cari</button>
                    </div>
                </div>
            </form>
        </div>

        @if($lombas->isEmpty())
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg text-center">
                Lomba tidak ditemukan.
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($lombas as $lomba)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="{{ asset($lomba->gambar) }}" 
                             alt="{{ $lomba->nama_lomba }}" 
                             class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h2 class="text-xl font-bold text-gray-900 flex-1 line-clamp-2">
                                    {{ $lomba->nama_lomba }}
                                </h2>
                                <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full ml-2
                                    {{ $lomba->status === 'available' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $lomba->status }}
                                </span>
                            </div>
                            
                            <p class="text-sm text-gray-600 mb-2">{{ $lomba->penyelenggara_lomba }}</p>
                            
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">
                                    {{ $lomba->bidang->nama_bidang ?? 'Tidak ada bidang' }}
                                </span>
                                <span class="bg-sky-100 text-sky-800 text-xs px-2 py-1 rounded">
                                    {{ $lomba->kategori_peserta }}
                                </span>
                            </div>
                            
                            <div class="flex gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">
                                    {{ $lomba->lokasi }}
                                </span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">
                                    {{ \Carbon\Carbon::parse($lomba->tgl_lomba)->isoFormat('D MMM Y') }}
                                </span>
                            </div>
                            
                            <p class="text-gray-700 mb-4 line-clamp-3">
                                {{ $lomba->deskripsi }}
                            </p>
                            
                            <div class="flex justify-between items-center mt-4 pt-4 border-t border-gray-100">
                                <a href="{{ route('lomba.show', $lomba->id_lomba) }}" 
                                   class="text-sky-600 hover:text-sky-800 text-sm font-semibold">
                                    Lihat Detail →
                                </a>
                                <a href="{{ $lomba->link_daftar }}" 
                                   target="_blank"
                                   class="bg-sky-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-sky-700 transition">
                                    Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-8">
                {{ $lombas->appends(request()->query())->links() }}
            </div>
        @endif

        <div class="mt-12 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-sky-800">Statistik Lomba</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                        <div>
                            <p class="text-gray-500">Total Lomba</p>
                            <p class="text-2xl font-bold">{{ $stats['total_lomba'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Available</p>
                            <p class="text-2xl font-bold text-green-600">{{ $stats['total_available'] ?? '0' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Unavailable</p>
                            <p class="text-2xl font-bold text-red-600">{{ $stats['total_unavailable'] ?? '0' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-xl shadow-lg h-full">
                    <h3 class="text-2xl font-bold mb-4 text-sky-800">Lomba Terbaru</h3>
                    <ul class="space-y-3">@foreach($lombaTerbaru as $lomba)<li
                        class="flex justify-between items-center text-sm">
                        <div>
                            <p class="font-semibold">{{ $lomba->nama_lomba }}</p>
                            <p class="text-gray-500">{{ $lomba->penyelenggara_lomba }}</p>
                        </div><span class="text-gray-500">{{ $lomba->created_at->diffForHumans() }}</span>
                    </li>@endforeach</ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>