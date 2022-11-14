<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        @include('layouts.navigation')

        @if (session()->has('success'))
            <div class="container mt-2">
                <x-common.alert type="success" :message="session('success')" />
            </div>
        @endif

        <main>
            {{ $slot }}
        </main>
        <p class="mt-3 text-center">
            &copy; {{ config('app.name') }} - {{ Date('Y') }}
        </p>

    </div>
</body>

</html>
