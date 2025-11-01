<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-sky-100">
    <div class="min-h-screen flex flex-col justify-center items-center px-4 py-8">

        <div class="relative z-10 w-full max-w-md">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-white shadow-lg">
                    <x-application-logo class="w-12 h-12 fill-current text-blue-600" />
                </div>
            </div>

            <div class="relative">
                <div class="relative w-full bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="px-6 sm:px-8 py-8 sm:py-10">
                        {{ $slot }}
                    </div>
                </div>
            </div>

            <div class="text-center mt-6 text-gray-600 text-sm">
                <p class="font-medium">Sistem Informasi Lomba</p>
            </div>
        </div>
    </div>
</body>

</html>