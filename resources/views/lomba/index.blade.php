<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Info Lomba</title>
    {{-- css compile vite --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-sky-100 text-gray-800"> {{-- bg --}}
    <div class="container mx-auto p-4 md:p-8">
        <h1 class="text-4xl font-bold text-center text-sky-800 mb-6">Info Lomba</h1>

        <div class="bg-white p-6 rounded-xl shadow-lg mb-8">
            <form action="{{ route('lomba.index') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                    <div class="md:col-span-6">
                        <input type="text" name="search"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-sky-500 focus:border-sky-500"
                            placeholder="Cari judul lomba..." value="{{ request('search') }}">
                    </div>
                    <div class="md:col-span-4">
                        <select name="penyelenggara"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-sky-500 focus:border-sky-500">
                            <option value="">Semua Penyelenggara</option>
                            @foreach($penyelenggara as $p)
                                <option value="{{ $p }}" {{ request('penyelenggara') == $p ? 'selected' : '' }}>{{ $p }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit"
                            class="w-full bg-sky-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-sky-700 transition duration-300">
                            Cari
                        </button>
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
                    <a href="{{ route('lomba.show', $lomba) }}"
                        class="block bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 truncate">{{ $lomba->nama_lomba }}</h2>
                            <p class="text-sm text-gray-600 mt-1">{{ $lomba->penyelenggara_lomba }}</p>
                            <p class="text-gray-700 mt-4 h-20 overflow-hidden">
                                {{ Str::limit($lomba->deskripsi, 120) }}
                            </p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 text-right">
                            <span class="text-sm font-semibold text-sky-600">Lihat Detail &rarr;</span>
                        </div>
                    </a>
                        {{-- Card --}}
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="p-6">
                                <h2 class="text-xl font-bold text-gray-900">{{ $lomba->judul }}</h2>
                                <p class="text-sm text-gray-600 mt-1">{{ $lomba->penyelenggara }}</p>
                                <p class="text-gray-700 mt-4">{{ Str::limit($lomba->deskripsi, 100) }}</p>
                            </div>
                            <div class="bg-gray-50 px-6 py-3 flex justify-between items-center">
                                <span
                                    class="inline-block bg-sky-200 text-sky-800 text-xs font-semibold px-2.5 py-1 rounded-full">{{ $lomba->kategori }}</span>
                                <span class="text-lg font-bold text-gray-900">Rp
                                    {{ number_format($lomba->harga, 0, ',', '.') }}</span>
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
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                        <div>
                            <p class="text-gray-500">Total Lomba</p>
                            <p class="text-2xl font-bold">{{ $stats['total_lomba'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Total Biaya</p>
                            <p class="text-2xl font-bold">Rp
                                {{ number_format($stats['total_harga'] / 1000000, 1, ',', '.') }} Jt</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Tertinggi</p>
                            <p class="text-2xl font-bold">Rp
                                {{ number_format($stats['harga_tertinggi'] / 1000, 0, ',', '.') }} K</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Terendah</p>
                            <p class="text-2xl font-bold">Rp
                                {{ number_format($stats['harga_terendah'] / 1000, 0, ',', '.') }} K</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-xl shadow-lg h-full">
                    <h3 class="text-2xl font-bold mb-4 text-sky-800">Lomba Terbaru</h3>
                    <ul class="space-y-3">
                        @foreach($lombaTerbaru as $lomba)
                            <li class="flex justify-between items-center text-sm">
                                <div>
                                    <p class="font-semibold">{{ $lomba->judul }}</p>
                                    <p class="text-gray-500">{{ $lomba->penyelenggara }}</p>
                                </div>
                                <span class="text-gray-500">{{ $lomba->created_at->diffForHumans() }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>