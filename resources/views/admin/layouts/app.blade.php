<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Indago') }} - Panel de Administración</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-neutral-800 bg-neutral-100 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-secondary text-white hidden md:flex flex-col flex-shrink-0 transition-all duration-300">
        <!-- Logo -->
        <div class="h-20 flex items-center justify-center border-b border-neutral-700 px-6">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-neutral-800 text-primary">
                    <span class="material-symbols-outlined text-3xl">apartment</span>
                </div>
                <span class="text-xl font-black tracking-tight text-white">
                    INDAGO<span class="text-primary">ADMIN</span>
                </span>
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 overflow-y-auto py-6 px-4 flex flex-col gap-2">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-secondary font-bold' : 'text-neutral-300 hover:bg-neutral-800 hover:text-white font-medium' }}">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            
            <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->routeIs('admin.users.*') ? 'bg-primary text-secondary font-bold' : 'text-neutral-300 hover:bg-neutral-800 hover:text-white font-medium' }}">
                <span class="material-symbols-outlined">group</span>
                Usuarios
            </a>
            
            <!-- Ejemplo de futuros enlaces -->
            <!-- 
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-neutral-300 hover:bg-neutral-800 hover:text-white transition-colors font-medium">
                <span class="material-symbols-outlined">work</span>
                Proyectos
            </a>
            -->
        </nav>

        <!-- User Info / Logout -->
        <div class="p-4 border-t border-neutral-700">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex w-full items-center gap-3 px-4 py-3 text-left rounded-lg text-neutral-300 hover:bg-red-500 hover:text-white transition-colors font-medium">
                    <span class="material-symbols-outlined">logout</span>
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </aside>

    <!-- Main ContentWrapper -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
        
        <!-- Header (Mobile Menu & Profile) -->
        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-6 lg:px-10 z-10 flex-shrink-0">
            <div class="flex items-center gap-4">
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-neutral-500 hover:text-primary transition-colors focus:outline-none">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
                
                <h2 class="text-xl font-semibold text-secondary">
                    @yield('header', 'Panel de Control')
                </h2>
            </div>

            <!-- Profile Dropdown -->
            <div class="flex items-center gap-4">
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 text-sm font-medium text-neutral-600 hover:text-primary transition-colors">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <span class="hidden sm:block">{{ Auth::user()->name }}</span>
                </a>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-neutral-50 p-6 lg:p-10">
            @yield('content')
        </main>
    </div>

</body>
</html>
