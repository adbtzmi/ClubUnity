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
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image: url('https://research.iium.edu.my/image/1661323797-[image]-login-bg.jpg.webp'); background-size: cover; background-repeat: no-repeat;">
            <div>
                <a href="/">
                    <h1 style="font-size: 2rem; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Club Unity</h1>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-10 bg-white shadow-md overflow-hidden sm:rounded-lg" style="opacity: 0.8;">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
