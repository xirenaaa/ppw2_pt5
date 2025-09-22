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
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="{{ asset($lomba->gambar) }}" alt="Gambar {{ $lomba->nama_lomba }}"
                class="w-full h-64 object-cover">

            <div class="p-8">
                <h1 class="text-3xl font-bold text-sky-800">{{ $lomba->nama_lomba }}</h1>
                <p class="text-md text-gray-600 mt-2">Diselenggarakan oleh:
                    <strong>{{ $lomba->penyelenggara_lomba }}</strong></p>

                <div class="flex flex-wrap gap-4 mt-4">
                    <span
                        class="inline-block bg-sky-200 text-sky-800 text-sm font-semibold px-3 py-1 rounded-full">{{ $lomba->kategori_peserta }}</span>
                    <span
                        class="inline-block bg-blue-200 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">{{ $lomba->lokasi }}</span>
                    @if($lomba->status == 'available')
                        <span
                            class="inline-block bg-green-200 text-green-800 text-sm font-semibold px-3 py-1 rounded-full">Pendaftaran
                            Dibuka</span>
                    @else
                        <span
                            class="inline-block bg-red-200 text-red-800 text-sm font-semibold px-3 py-1 rounded-full">Pendaftaran
                            Ditutup</span>
                    @endif
                </div>

                <hr class="my-6">

                <h2 class="text-xl font-bold text-gray-900 mb-2">Deskripsi Lomba</h2>
                <p class="text-gray-700 whitespace-pre-wrap">{{ $lomba->deskripsi }}</p>

                <hr class="my-6">

                <h2 class="text-xl font-bold text-gray-900 mb-4">Informasi Detail</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="font-semibold text-gray-600">Tanggal Lomba</p>
                        <p class="text-lg">{{ \Carbon\Carbon::parse($lomba->tgl_lomba)->translatedFormat('d F Y') }}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="font-semibold text-gray-600">Bidang Lomba</p>
                        <p class="text-lg">{{ $lomba->bidang->nama_bidang ?? 'Tidak ada kategori' }}</p>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <a href="{{ $lomba->link_daftar }}" target="_blank"
                        class="inline-block bg-sky-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-sky-700 transition duration-300 text-lg">
                        Daftar Sekarang
                    </a>
                    <a href="{{ route('lomba.index') }}" class="block mt-4 text-sky-600 hover:underline">
                        &larr; Kembali ke Daftar Lomba
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>