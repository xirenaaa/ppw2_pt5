<x-guest-layout>
    <!-- Session Status Alert -->
    @if (session('status'))
        <div class="mb-6 p-4 bg-gradient-to-r from-green-400 to-emerald-500 text-white rounded-xl text-sm font-semibold shadow-lg">
            {{ session('status') }}
        </div>
    @endif

    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-3xl sm:text-4xl font-bold mb-2">
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                Selamat Datang
            </span>
        </h1>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
            Masuk ke akun Anda untuk mengikuti kompetisi
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-bold text-gray-800 mb-2">
                📧 Email Address
            </label>
            <input 
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}"
                required 
                autofocus 
                placeholder="nama@email.com"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400"
            />
            @error('email')
                <p class="mt-2 text-red-500 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Field -->
        <div>
            <label for="password" class="block text-sm font-bold text-gray-800 mb-2">
                🔐 Password
            </label>
            <input 
                id="password" 
                type="password"
                name="password"
                required 
                placeholder="••••••••"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400"
            />
            @error('password')
                <p class="mt-2 text-red-500 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember & Forgot Password -->
        <div class="flex items-center justify-between gap-2">
            <label class="flex items-center gap-2 cursor-pointer">
                <input 
                    type="checkbox" 
                    name="remember"
                    class="w-5 h-5 accent-blue-600 rounded border-gray-300 cursor-pointer"
                />
                <span class="text-sm text-gray-700 font-medium">Ingat saya</span>
            </label>
            
            @if (Route::has('password.request'))
                <a class="text-sm font-semibold text-blue-600 hover:text-blue-800 transition" href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <button 
            type="submit" 
            class="w-full mt-6 py-3 px-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold rounded-xl transition duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl"
        >
            Masuk
        </button>

        <!-- Divider -->
        <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t-2 border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="px-3 bg-white text-gray-600 text-sm font-medium">atau</span>
            </div>
        </div>

        <!-- Register Link -->
        <p class="text-center text-gray-700 text-sm">
            Belum punya akun?
            <a href="{{ route('register') }}" class="font-bold text-blue-600 hover:text-blue-800 transition">
                Daftar di sini
            </a>
        </p>
    </form>
</x-guest-layout>
