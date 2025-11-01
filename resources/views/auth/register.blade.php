<x-guest-layout>
    <div class="text-center mb-8">
        <h1 class="text-3xl sm:text-4xl font-bold mb-2 text-gray-900">
            Buat Akun Baru
        </h1>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
            Daftarkan diri Anda untuk mengikuti kompetisi
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <div>
            <label for="name" class="block text-sm font-bold text-gray-800 mb-2">
                Nama Lengkap
            </label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                placeholder="Nama Anda"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" />
            @error('name')
                <p class="mt-2 text-red-500 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-bold text-gray-800 mb-2">
                Email Address
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" />
            @error('email')
                <p class="mt-2 text-red-500 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-bold text-gray-800 mb-2">
                Password
            </label>
            <input id="password" type="password" name="password" required placeholder="••••••••"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" />
            @error('password')
                <p class="mt-2 text-red-500 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-bold text-gray-800 mb-2">
                Konfirmasi Password
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                placeholder="••••••••"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" />
            @error('password_confirmation')
                <p class="mt-2 text-red-500 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full mt-4 py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition duration-200 shadow-lg hover:shadow-xl">
            Daftar Sekarang
        </button>

        <div class="relative pt-4">
            <div class="absolute inset-0 flex items-center pt-4">
                <div class="w-full border-t-2 border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="px-3 bg-white text-gray-600 text-sm font-medium">atau</span>
            </div>
        </div>

        <p class="text-center text-gray-700 text-sm !mt-6">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-bold text-blue-600 hover:text-blue-800 transition">
                Masuk di sini
            </a>
        </p>
    </form>
</x-guest-layout>