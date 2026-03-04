<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Indago Constructora') }}</title>

    {{-- Google Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    {{-- Material Symbols --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">

    {{-- Vite: base + public-specific CSS & JS --}}
    @vite([
        'resources/css/app.css',
        'resources/css/constructora.css',
        'resources/js/app.js',
        'resources/js/constructora.js',
    ])
</head>
<body class="bg-background-light text-neutral-900 font-body antialiased">

    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">

        {{-- Reusable Header --}}
        <x-public.header />

        {{-- Page Content --}}
        <main class="pt-20">
            {{ $slot }}
        </main>

        {{-- Reusable Footer --}}
        <x-public.footer />

    </div>

    {{-- Scroll-to-Top Button --}}
    <button id="scroll-to-top"
            aria-label="Volver arriba"
            title="Volver arriba"
            class="scroll-to-top-btn">
        <span class="material-symbols-outlined">arrow_upward</span>
    </button>

</body>
</html>
