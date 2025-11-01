<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased overflow-x-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 min-h-screen">
        <!-- Main Container -->
        <div class="min-h-screen flex flex-col justify-center items-center px-4 py-8 sm:py-0">
            <!-- Background Animated Blobs -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-0 -left-40 w-80 h-80 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
                <div class="absolute top-0 -right-40 w-80 h-80 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob" style="animation-delay: 2s;"></div>
                <div class="absolute -bottom-40 left-1/2 w-80 h-80 bg-pink-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob" style="animation-delay: 4s;"></div>
            </div>

            <!-- Content Wrapper -->
            <div class="relative z-10 w-full max-w-md">
                <!-- Logo Section -->
                <div class="text-center mb-8 animate-fade-in">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-white shadow-2xl mb-4 hover:scale-110 transition-transform duration-300">
                        <x-application-logo class="w-12 h-12 fill-current text-indigo-600" />
                    </div>
                </div>

                <!-- Card Container -->
                <div class="relative animate-fade-in" style="animation-delay: 0.1s;">
                    <!-- Card Background -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 rounded-3xl blur-lg opacity-30 group-hover:opacity-50 transition duration-1000"></div>
                    
                    <!-- Main Card -->
                    <div class="relative w-full bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl overflow-hidden border border-white/40">
                        <!-- Top Gradient Bar -->
                        <div class="h-1 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600"></div>
                        
                        <!-- Card Content -->
                        <div class="px-6 sm:px-8 py-8 sm:py-10">
                            {{ $slot }}
                        </div>
                    </div>
                </div>

                <!-- Footer Text -->
                <div class="text-center mt-8 text-white/80 text-sm animate-fade-in" style="animation-delay: 0.2s;">
                    <p class="font-medium">Sistem Informasi Lomba</p>
                </div>
            </div>
        </div>

        <!-- Custom Animations -->
        <style>
            @keyframes blob {
                0%, 100% { transform: translate(0, 0) scale(1); }
                25% { transform: translate(20px, -50px) scale(1.1); }
                50% { transform: translate(-20px, 20px) scale(0.9); }
                75% { transform: translate(50px, 50px) scale(1.05); }
            }

            @keyframes fade-in {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-blob {
                animation: blob 7s infinite;
            }

            .animate-fade-in {
                animation: fade-in 0.7s ease-out forwards;
                opacity: 0;
            }
        </style>
    </body>
</html>
