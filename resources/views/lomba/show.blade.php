<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lomba->nama_lomba }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-sky-100 text-gray-800">
    <div class="container mx-auto p-4 md:p-8">
        <div class="max-w-4xl mx-auto">
            <a href="{{ route('lomba.index') }}" class="text-sky-600 hover:text-sky-800 mb-4 inline-block">&larr;
                Kembali ke Daftar Lomba</a>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset($lomba->gambar) }}" alt="{{ $lomba->nama_lomba }}" class="w-full h-64 object-cover">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h1 class="text-3xl font-bold text-gray-900 flex-1">{{ $lomba->nama_lomba }}</h1>
                        <span
                            class="inline-block px-3 py-1 text-sm font-semibold rounded-full ml-4
                            {{ $lomba->status === 'available' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ ucfirst($lomba->status) }}
                        </span>
                    </div>

                    <p class="text-md text-gray-600 mb-4">Diselenggarakan oleh:
                        <strong>{{ $lomba->penyelenggara_lomba }}</strong></p>

                    <div class="mt-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Deskripsi Lomba</h2>
                        <div class="prose max-w-none text-gray-700">
                            <p>{{ $lomba->deskripsi }}</p>
                        </div>
                    </div>

                    @if($lomba->hadiah->isNotEmpty())
                        <div class="mt-6">
                            <h2 class="text-2xl font-bold text-gray-800 mb-3">Hadiah</h2>
                            <ul class="list-disc list-inside text-gray-700">
                                @foreach($lomba->hadiah as $item)
                                    <li><strong>{{ $item->posisi }}:</strong> {{ $item->deskripsi }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <a href="{{ $lomba->link_daftar }}" target="_blank"
                            class="bg-sky-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-sky-700 transition-colors">
                            Kunjungi Laman Pendaftaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>