<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Mahasiswa')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brown: {
                            50: '#FAF6F0',
                            100: '#F5EDE4',
                            200: '#E8D5C4',
                            300: '#D4B896',
                            400: '#C4A882',
                            500: '#A0785A',
                            600: '#8B6F47',
                            700: '#6B4F3A',
                            800: '#5C4033',
                            900: '#3D2B1F',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .nav-gradient {
            background: linear-gradient(135deg, #6B4F3A 0%, #8B6F47 50%, #A0785A 100%);
        }
        .menu-item {
            transition: all 0.2s ease;
        }
        .menu-item:hover {
            transform: translateX(4px);
        }
        .dropdown-enter {
            animation: slideDown 0.2s ease-out;
        }
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-brown-50 text-brown-900 min-h-screen flex flex-col">

    <!-- Navigation -->
    <nav class="nav-gradient text-white shadow-xl sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <!-- Hamburger Menu Button -->
                    <button id="menuBtn" class="p-2.5 hover:bg-white/10 rounded-xl transition-all duration-200 hover:scale-105 active:scale-95">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <a href="{{ route('home') }}" class="text-xl font-bold tracking-wide flex items-center gap-2 hover:opacity-90 transition-opacity">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        Data Mahasiswa
                    </a>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-brown-100 text-sm font-medium">{{ date('d F Y') }}</span>
                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center text-sm font-bold">
                        D
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Dropdown Menu -->
    <div id="dropdownMenu" class="hidden fixed top-20 left-6 bg-white rounded-2xl shadow-2xl border border-brown-200 py-5 z-50 w-80 dropdown-enter">
        <div class="px-6 py-4 border-b border-brown-100 mb-4 flex items-center gap-3">
            <div class="w-8 h-8 bg-brown-100 rounded-lg flex items-center justify-center">
                <svg class="w-4 h-4 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <p class="text-sm text-brown-400 uppercase tracking-wider font-semibold">Data Mahasiswa</p>
        </div>
        <a href="{{ route('home') }}" class="menu-item flex items-center gap-4 px-6 py-5 text-brown-700 hover:bg-brown-50 transition-all duration-200 font-semibold text-lg">
            <div class="w-12 h-12 bg-brown-100 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
            </div>
            Home
        </a>
        <a href="{{ route('mahasiswa.index') }}" class="menu-item flex items-center gap-4 px-6 py-5 text-brown-700 hover:bg-brown-50 transition-all duration-200 font-semibold text-lg">
            <div class="w-12 h-12 bg-brown-100 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            Data Mahasiswa
        </a>
        <a href="{{ route('mahasiswa.create') }}" class="menu-item flex items-center gap-4 px-6 py-5 text-brown-700 hover:bg-brown-50 transition-all duration-200 font-semibold text-lg">
            <div class="w-12 h-12 bg-brown-100 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
            Tambah Mahasiswa
        </a>
        <hr class="my-4 border-brown-100">
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="menu-item w-full text-left flex items-center gap-4 px-6 py-5 text-red-600 hover:bg-red-50 transition-all duration-200 font-semibold text-lg">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                    </div>
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="menu-item flex items-center gap-4 px-6 py-5 text-brown-700 hover:bg-brown-50 transition-all duration-200 font-semibold text-lg">
                <div class="w-12 h-12 bg-brown-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                </div>
                Login
            </a>
        @endauth
    </div>

    <!-- Overlay -->
    <div id="overlay" class="hidden fixed inset-0 bg-black/30 z-40 backdrop-blur-sm transition-opacity duration-200"></div>

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const overlay = document.getElementById('overlay');

        menuBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            dropdownMenu.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    </script>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-8 flex-grow w-full">

        @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-3 shadow-sm">
            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        @yield('content')

    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-brown-800 to-brown-700 text-brown-200 mt-auto">
        <div class="max-w-6xl mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span class="font-semibold">Data Mahasiswa</span>
                </div>
                <p class="text-sm">
                    &copy; {{ date('Y') }} Sistem Informasi Mahasiswa &mdash; Dibuat dengan Laravel 12
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
