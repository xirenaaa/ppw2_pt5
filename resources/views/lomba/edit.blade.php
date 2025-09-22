<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lomba: {{ $lomba->nama_lomba }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-sky-100">
    <div class="container mx-auto p-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            <h1 class="text-2xl font-bold text-sky-800 mb-6">Edit Lomba</h1>
            <form action="{{ route('lomba.update', $lomba) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4"><label for="nama_lomba" class="block text-gray-700 font-semibold mb-2">Judul
                        Lomba</label><input type="text" id="nama_lomba" name="nama_lomba"
                        value="{{ old('nama_lomba', $lomba->nama_lomba) }}" class="w-full px-4 py-2 border rounded-lg">
                </div>
                <div class="mb-4"><label for="penyelenggara_lomba"
                        class="block text-gray-700 font-semibold mb-2">Penyelenggara</label><input type="text"
                        id="penyelenggara_lomba" name="penyelenggara_lomba"
                        value="{{ old('penyelenggara_lomba', $lomba->penyelenggara_lomba) }}"
                        class="w-full px-4 py-2 border rounded-lg"></div>
                <div class="mb-4"><label for="deskripsi"
                        class="block text-gray-700 font-semibold mb-2">Deskripsi</label><textarea id="deskripsi"
                        name="deskripsi" rows="4"
                        class="w-full px-4 py-2 border rounded-lg">{{ old('deskripsi', $lomba->deskripsi) }}</textarea>
                </div>
                <div class="flex justify-end gap-4">
                    <a href="{{ route('lomba.index') }}"
                        class="bg-gray-200 text-gray-800 font-semibold py-2 px-4 rounded-lg">Batal</a>
                    <button type="submit" class="bg-sky-600 text-white font-semibold py-2 px-4 rounded-lg">Simpan
                        Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>