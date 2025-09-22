<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lomba: {{ $lomba->judul }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-sky-100">
    <div class="container mx-auto p-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            <h1 class="text-2xl font-bold text-sky-800 mb-6">Edit Lomba</h1>

            <form action="{{ route('lomba.update', $lomba) }}" method="POST">
                @csrf
                @method('PUT') {{-- method uptde --}}

                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul Lomba</label>
                    <input type="text" id="judul" name="judul" value="{{ $lomba->judul }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="penyelenggara" class="block text-gray-700 font-semibold mb-2">Penyelenggara</label>
                    <input type="text" id="penyelenggara" name="penyelenggara" value="{{ $lomba->penyelenggara }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg">{{ $lomba->deskripsi }}</textarea>
                </div>

                <div class="mb-6">
                    <label for="harga" class="block text-gray-700 font-semibold mb-2">Harga</label>
                    <input type="number" id="harga" name="harga" value="{{ $lomba->harga }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('lomba.index') }}"
                        class="bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg hover:bg-gray-400">Batal</a>
                    <button type="submit"
                        class="bg-sky-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-sky-700">Simpan
                        Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>