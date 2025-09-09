<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SMK Karya Pembangunan - Sekolah Unggulan')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <script src="https://unpkg.com/@heroicons/react@2.0.18/24/outline/index.js" type="module"></script>
    
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .glow-effect {
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        }
        
        .glow-effect:hover {
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.6);
            transform: translateY(-2px);
        }
        
        .shine-effect {
            position: relative;
            overflow: hidden;
        }
        
        .shine-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s;
        }
        
        .shine-effect:hover::before {
            left: 100%;
        }
        
        .card-elegant {
            background: rgba(0, 0, 0, 0.8);
            border: 1px solid rgba(255, 215, 0, 0.2);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .card-elegant:hover {
            border-color: rgba(255, 215, 0, 0.5);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        
        .slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-overlay {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(30, 64, 175, 0.3));
        }
    </style>
</head>
<body class="h-full bg-black text-white font-inter antialiased">
    <!-- Navigation -->
    <nav class="bg-black/95 backdrop-blur-md border-b border-yellow-500/20 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gradient">SMK Karya</h2>
                            <p class="text-xs text-gray-400">Pembangunan</p>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'text-yellow-400' : '' }}">Beranda</a>
                        <a href="{{ route('about') }}" class="nav-link {{ Request::routeIs('about') ? 'text-yellow-400' : '' }}">Tentang</a>
                        <a href="{{ route('news.index') }}" class="nav-link {{ Request::routeIs('news.*') ? 'text-yellow-400' : '' }}">Berita</a>
                        <a href="{{ route('extracurriculars.index') }}" class="nav-link {{ Request::routeIs('extracurriculars.*') ? 'text-yellow-400' : '' }}">Ekstrakurikuler</a>
                        <a href="{{ route('facilities.index') }}" class="nav-link {{ Request::routeIs('facilities.*') ? 'text-yellow-400' : '' }}">Fasilitas</a>
                        <a href="{{ route('ppdb.create') }}" class="nav-link {{ Request::routeIs('ppdb.*') ? 'text-yellow-400' : '' }}">PPDB</a>
                        <a href="{{ route('contact') }}" class="nav-link {{ Request::routeIs('contact') ? 'text-yellow-400' : '' }}">Kontak</a>
                        
                        @auth
                            <a href="{{ route('dashboard') }}" class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition-colors shine-effect">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition-colors shine-effect">Login</a>
                        @endauth
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-300 hover:text-yellow-400 focus:outline-none focus:text-yellow-400 transition-colors" x-data x-on:click="$dispatch('toggle-mobile-menu')">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden" x-data="{ open: false }" x-on:toggle-mobile-menu.window="open = !open" x-show="open" x-transition>
            <div class="px-2 pt-2 pb-3 space-y-1 bg-black/95 border-t border-yellow-500/20">
                <a href="{{ route('home') }}" class="mobile-nav-link {{ Request::routeIs('home') ? 'text-yellow-400 bg-yellow-400/10' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="mobile-nav-link {{ Request::routeIs('about') ? 'text-yellow-400 bg-yellow-400/10' : '' }}">Tentang</a>
                <a href="{{ route('news.index') }}" class="mobile-nav-link {{ Request::routeIs('news.*') ? 'text-yellow-400 bg-yellow-400/10' : '' }}">Berita</a>
                <a href="{{ route('extracurriculars.index') }}" class="mobile-nav-link {{ Request::routeIs('extracurriculars.*') ? 'text-yellow-400 bg-yellow-400/10' : '' }}">Ekstrakurikuler</a>
                <a href="{{ route('facilities.index') }}" class="mobile-nav-link {{ Request::routeIs('facilities.*') ? 'text-yellow-400 bg-yellow-400/10' : '' }}">Fasilitas</a>
                <a href="{{ route('ppdb.create') }}" class="mobile-nav-link {{ Request::routeIs('ppdb.*') ? 'text-yellow-400 bg-yellow-400/10' : '' }}">PPDB</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link {{ Request::routeIs('contact') ? 'text-yellow-400 bg-yellow-400/10' : '' }}">Kontak</a>
                
                @auth
                    <a href="{{ route('dashboard') }}" class="block bg-yellow-500 text-black px-3 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition-colors mx-2 mt-4">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="block bg-yellow-500 text-black px-3 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition-colors mx-2 mt-4">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-yellow-500/20 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo & Description -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gradient">SMK Karya Pembangunan</h3>
                            <p class="text-sm text-gray-400">Sekolah Menengah Kejuruan Unggulan</p>
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Membentuk generasi muda yang kompeten, berkarakter, dan siap menghadapi tantangan dunia kerja dengan keahlian teknologi terdepan.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-yellow-400 mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('news.index') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Berita Terbaru</a></li>
                        <li><a href="{{ route('extracurriculars.index') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Ekstrakurikuler</a></li>
                        <li><a href="{{ route('ppdb.create') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Pendaftaran</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-yellow-400 mb-4">Kontak</h4>
                    <div class="space-y-2 text-gray-300">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22S19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9S10.62 6.5 12 6.5S14.5 7.62 14.5 9S13.38 11.5 12 11.5Z"/>
                            </svg>
                            <span class="text-sm">Jl. Pendidikan No. 123, Jakarta</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.69 14.9 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 15.5 21 15.95 21 16.5V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"/>
                            </svg>
                            <span class="text-sm">+62 21 1234 5678</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"/>
                            </svg>
                            <span class="text-sm">info@smkkaryapembangunan.sch.id</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-yellow-500/20 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} SMK Karya Pembangunan. Hak Cipta Dilindungi.
                </p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557C23.117 4.949 22.168 5.213 21.172 5.332C22.189 4.723 22.97 3.758 23.337 2.608C22.386 3.172 21.332 3.582 20.21 3.803C19.313 2.846 18.032 2.248 16.616 2.248C13.437 2.248 11.101 5.214 11.819 8.293C7.728 8.088 4.1 6.128 1.671 3.149C0.381 5.362 1.002 8.257 3.194 9.723C2.388 9.697 1.628 9.476 0.965 9.107C0.911 11.388 2.546 13.522 4.914 13.997C4.221 14.185 3.462 14.229 2.69 14.081C3.316 16.037 5.134 17.46 7.29 17.5C5.22 19.123 2.612 19.848 0 19.54C2.179 20.937 4.768 21.752 7.548 21.752C16.69 21.752 21.855 14.031 21.543 7.106C22.505 6.411 23.34 5.544 24 4.557Z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6C21.69 6.35 20.86 6.58 20 6.69C20.88 6.16 21.56 5.32 21.88 4.31C21.05 4.81 20.13 5.16 19.16 5.36C18.37 4.5 17.26 4 16 4C13.65 4 11.73 5.92 11.73 8.29C11.73 8.63 11.77 8.96 11.84 9.27C8.28 9.09 5.11 7.38 3 4.79C2.63 5.42 2.42 6.16 2.42 6.94C2.42 8.43 3.17 9.75 4.33 10.5C3.62 10.5 2.96 10.3 2.38 10C2.38 10 2.38 10 2.38 10.03C2.38 12.11 3.86 13.85 5.82 14.24C5.46 14.34 5.08 14.39 4.69 14.39C4.42 14.39 4.15 14.36 3.89 14.31C4.43 16 6 17.26 7.89 17.29C6.43 18.45 4.58 19.13 2.56 19.13C2.22 19.13 1.88 19.11 1.54 19.07C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79C20.33 8.6 20.33 8.42 20.32 8.23C21.16 7.63 21.88 6.87 22.46 6Z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987C.029 17.396 3.808 21.983 8.873 23.279V15.121H6.295V11.987H8.873V9.348C8.873 6.798 10.568 5.219 12.906 5.219C14.017 5.219 15.174 5.417 15.174 5.417V7.917H13.901C12.649 7.917 12.017 8.665 12.017 9.435V11.987H15.057L14.369 15.121H12.017V23.279C17.082 21.983 20.861 17.396 20.861 11.987C20.861 5.367 15.494.001 12.017.001Z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163C15.204 2.163 15.584 2.175 16.85 2.233C20.102 2.381 21.621 3.924 21.769 7.152C21.827 8.417 21.838 8.797 21.838 12.001C21.838 15.206 21.826 15.585 21.769 16.85C21.62 20.075 20.105 21.621 16.85 21.769C15.584 21.827 15.206 21.839 12 21.839C8.796 21.839 8.416 21.827 7.151 21.769C3.891 21.62 2.38 20.07 2.232 16.849C2.174 15.584 2.162 15.205 2.162 12C2.162 8.796 2.175 8.417 2.232 7.151C2.381 3.924 3.896 2.38 7.151 2.232C8.417 2.175 8.796 2.163 12 2.163ZM12 5.838C8.597 5.838 5.838 8.597 5.838 12S8.597 18.163 12 18.163S18.162 15.404 18.162 12S15.403 5.838 12 5.838ZM12 15.162C9.946 15.162 8.838 14.046 8.838 12S9.946 8.838 12 8.838S15.162 9.946 15.162 12S14.046 15.162 12 15.162ZM16.965 5.595C16.965 4.8 16.317 4.162 15.524 4.162S14.083 4.8 14.083 5.595S14.731 6.028 15.524 6.028S16.965 6.39 16.965 5.595Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Styles -->
    <style>
        .nav-link {
            @apply px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-yellow-400 hover:bg-yellow-400/10 transition-all duration-200;
        }
        
        .mobile-nav-link {
            @apply block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-yellow-400 hover:bg-yellow-400/10 transition-colors;
        }
    </style>
</body>
</html>