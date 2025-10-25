<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3">
            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800">
                    Dashboard
                </h2>
                <p class="text-sm text-gray-500 mt-1">Selamat datang, <span class="font-semibold text-gray-700">{{ Auth::user()->name }}</span></p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full sm:w-auto px-5 py-2 bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 hover:border-gray-300 rounded-lg font-medium transition-all duration-200 text-sm">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </button>
            </form>
        </div>
    </x-slot>

    <div class="py-6 sm:py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Welcome Card - Soft Colors -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 sm:p-8 lg:p-10 mb-6 sm:mb-8 border border-blue-100">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="flex-1 text-center md:text-left">
                        <div class="inline-flex items-center gap-2 mb-3">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-sm">
                                <i class="fas fa-user-circle text-blue-500 text-xl"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-gray-500 font-medium">Hello,</p>
                                <p class="text-sm font-bold text-gray-700">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-3">
                            Sistem Informasi Lomba
                        </h1>
                        <p class="text-sm sm:text-base text-gray-600 mb-5 max-w-2xl mx-auto md:mx-0">
                            Kelola dan jelajahi informasi lomba dengan mudah melalui dashboard yang intuitif
                        </p>
                        <div class="flex flex-wrap justify-center md:justify-start gap-2">
                            <span class="inline-flex items-center px-3 py-1.5 bg-white border border-blue-200 text-blue-700 rounded-full text-xs font-semibold">
                                <i class="fas fa-shield-alt mr-1.5 text-blue-500"></i>{{ ucfirst(Auth::user()->role) }}
                            </span>
                            <span class="inline-flex items-center px-3 py-1.5 bg-white border border-green-200 text-green-700 rounded-full text-xs font-semibold">
                                <i class="fas fa-circle mr-1.5 text-green-500 text-xs animate-pulse"></i>Active
                            </span>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center justify-center">
                        <div class="w-24 h-24 lg:w-32 lg:h-32 bg-white bg-opacity-60 rounded-2xl flex items-center justify-center shadow-sm">
                            <i class="fas fa-trophy text-yellow-500 text-5xl lg:text-6xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 lg:gap-6 mb-6 sm:mb-8">
                
                <!-- Card 1: Role -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-gray-100 hover:border-blue-200 hover:shadow-md transition-all duration-200">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-11 h-11 bg-blue-50 rounded-lg flex items-center justify-center">
                            <i class="fas fa-user-shield text-blue-500 text-lg"></i>
                        </div>
                        <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">Info</span>
                    </div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1">Your Role</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-800 mb-2">{{ ucfirst(Auth::user()->role) }}</p>
                    <p class="text-xs text-gray-500">
                        @if(Auth::user()->role === 'admin')
                        Full access to system
                        @else
                        View only access
                        @endif
                    </p>
                </div>

                <!-- Card 2: Email -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-gray-100 hover:border-purple-200 hover:shadow-md transition-all duration-200">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-11 h-11 bg-purple-50 rounded-lg flex items-center justify-center">
                            <i class="fas fa-envelope text-purple-500 text-lg"></i>
                        </div>
                        <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">Email</span>
                    </div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1">Account</p>
                    <p class="text-sm font-bold text-gray-800 mb-2 truncate" title="{{ Auth::user()->email }}">{{ Auth::user()->email }}</p>
                    <p class="text-xs text-gray-500">
                        <i class="fas fa-check-circle text-green-500 mr-1"></i>Verified
                    </p>
                </div>

                <!-- Card 3: Status -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-gray-100 hover:border-green-200 hover:shadow-md transition-all duration-200 sm:col-span-2 lg:col-span-1">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-11 h-11 bg-green-50 rounded-lg flex items-center justify-center">
                            <i class="fas fa-check-circle text-green-500 text-lg"></i>
                        </div>
                        <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">Status</span>
                    </div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1">System</p>
                    <p class="text-xl sm:text-2xl font-bold text-green-600 mb-2">Active</p>
                    <p class="text-xs text-gray-500">
                        <i class="fas fa-circle text-green-400 mr-1 animate-pulse"></i>Ready to use
                    </p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="grid grid-cols-1 @if(Auth::user()->role === 'admin') lg:grid-cols-2 @endif gap-4 sm:gap-5 lg:gap-6 mb-6 sm:mb-8">
                
                @if(Auth::user()->role === 'admin')
                <!-- Add Competition Button -->
                <a href="{{ url('/lomba/create/new') }}" class="group block bg-white rounded-xl border border-gray-100 hover:border-blue-200 hover:shadow-lg transition-all duration-200 overflow-hidden">
                    <div class="p-5 sm:p-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fas fa-plus-circle text-blue-500 text-xl sm:text-2xl"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                    Tambah Lomba Baru
                                </h3>
                                <p class="text-xs sm:text-sm text-gray-500 mb-3">
                                    Create new competition entry
                                </p>
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    Tambahkan informasi lomba terbaru ke dalam sistem dengan form yang lengkap
                                </p>
                            </div>
                            <div class="hidden sm:flex items-center justify-center">
                                <i class="fas fa-arrow-right text-gray-300 group-hover:text-blue-500 group-hover:translate-x-1 transition-all"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endif

                <!-- View Competitions Button -->
                <a href="{{ url('/') }}" class="group block bg-white rounded-xl border border-gray-100 hover:border-purple-200 hover:shadow-lg transition-all duration-200 overflow-hidden">
                    <div class="p-5 sm:p-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fas fa-list text-purple-500 text-xl sm:text-2xl"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-1 group-hover:text-purple-600 transition-colors">
                                    Lihat Daftar Lomba
                                </h3>
                                <p class="text-xs sm:text-sm text-gray-500 mb-3">
                                    Browse all competitions
                                </p>
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    Jelajahi semua lomba dengan fitur filter dan search yang powerful
                                </p>
                            </div>
                            <div class="hidden sm:flex items-center justify-center">
                                <i class="fas fa-arrow-right text-gray-300 group-hover:text-purple-500 group-hover:translate-x-1 transition-all"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Info Section -->
            <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-slate-50 to-gray-50 px-5 sm:px-6 py-4 border-b border-gray-100">
                    <h3 class="text-base sm:text-lg font-bold text-gray-800 flex items-center">
                        <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                        Informasi Akses
                    </h3>
                </div>
                <div class="p-5 sm:p-6 lg:p-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                        @if(Auth::user()->role === 'admin')
                        <div class="flex items-start gap-3 p-4 bg-blue-50 bg-opacity-50 rounded-lg border border-blue-100">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                <i class="fas fa-check text-blue-500 text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-800 text-sm mb-1">Admin Access</p>
                                <p class="text-xs text-gray-600 leading-relaxed">Kelola semua lomba (Create, Edit, Delete)</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 bg-purple-50 bg-opacity-50 rounded-lg border border-purple-100">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                <i class="fas fa-cog text-purple-500 text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-800 text-sm mb-1">Full Management</p>
                                <p class="text-xs text-gray-600 leading-relaxed">Kontrol sistem secara menyeluruh</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 bg-green-50 bg-opacity-50 rounded-lg border border-green-100">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                <i class="fas fa-upload text-green-500 text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-800 text-sm mb-1">Media Upload</p>
                                <p class="text-xs text-gray-600 leading-relaxed">Upload dan kelola gambar lomba</p>
                            </div>
                        </div>
                        @else
                        <div class="flex items-start gap-3 p-4 bg-blue-50 bg-opacity-50 rounded-lg border border-blue-100">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                <i class="fas fa-eye text-blue-500 text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-800 text-sm mb-1">View Access</p>
                                <p class="text-xs text-gray-600 leading-relaxed">Lihat informasi lomba yang tersedia</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 bg-purple-50 bg-opacity-50 rounded-lg border border-purple-100">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                <i class="fas fa-filter text-purple-500 text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-800 text-sm mb-1">Search & Filter</p>
                                <p class="text-xs text-gray-600 leading-relaxed">Temukan lomba sesuai minat</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 bg-green-50 bg-opacity-50 rounded-lg border border-green-100">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                <i class="fas fa-info-circle text-green-500 text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-800 text-sm mb-1">Detail Info</p>
                                <p class="text-xs text-gray-600 leading-relaxed">Akses detail lengkap lomba</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
