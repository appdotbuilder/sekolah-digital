@extends('layouts.app')

@section('title', 'Dashboard Admin - SMK Karya Pembangunan')

@section('content')
<!-- Dashboard Header -->
<section class="py-12 bg-gradient-to-r from-black via-gray-900 to-black border-b border-yellow-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="fade-in">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold text-gradient mb-2">📊 Dashboard Admin</h1>
                    <p class="text-xl text-gray-300">Selamat datang di panel administrasi SMK Karya Pembangunan</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm">Login sebagai:</p>
                    <p class="text-yellow-400 font-semibold">{{ Auth::user()->name ?? 'Administrator' }}</p>
                    <p class="text-gray-400 text-xs">{{ date('d F Y, H:i') }} WIB</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Cards -->
<section class="py-12 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Students -->
            <div class="card-elegant rounded-2xl p-6 slide-up">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">👨‍🎓 Total Siswa</p>
                        <p class="text-3xl font-bold text-yellow-400">1,245</p>
                        <p class="text-green-400 text-sm">+5% dari bulan lalu</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Teachers -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.1s;">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">👨‍🏫 Total Guru</p>
                        <p class="text-3xl font-bold text-yellow-400">85</p>
                        <p class="text-blue-400 text-sm">+2 guru baru</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- PPDB Applications -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.2s;">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">📝 Pendaftar PPDB</p>
                        <p class="text-3xl font-bold text-yellow-400">432</p>
                        <p class="text-red-400 text-sm">Batas: 500 siswa</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Feedback Count -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.3s;">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">💬 Feedback Baru</p>
                        <p class="text-3xl font-bold text-yellow-400">24</p>
                        <p class="text-yellow-400 text-sm">Perlu ditinjau</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="py-12 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 fade-in">
            <h2 class="text-3xl font-bold text-gradient mb-4">⚡ Aksi Cepat</h2>
            <p class="text-xl text-gray-300">Fungsi-fungsi yang paling sering digunakan</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <!-- Add News -->
            <button onclick="quickAction('news')" class="card-elegant rounded-2xl p-6 text-center hover:scale-105 transition-all duration-300 slide-up">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                    </svg>
                </div>
                <p class="text-yellow-400 font-semibold text-sm">📰 Tambah Berita</p>
            </button>

            <!-- Manage PPDB -->
            <button onclick="quickAction('ppdb')" class="card-elegant rounded-2xl p-6 text-center hover:scale-105 transition-all duration-300 slide-up" style="animation-delay: 0.1s;">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"/>
                    </svg>
                </div>
                <p class="text-yellow-400 font-semibold text-sm">📚 Kelola PPDB</p>
            </button>

            <!-- View Feedback -->
            <button onclick="quickAction('feedback')" class="card-elegant rounded-2xl p-6 text-center hover:scale-105 transition-all duration-300 slide-up" style="animation-delay: 0.2s;">
                <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <p class="text-yellow-400 font-semibold text-sm">💬 Lihat Feedback</p>
            </button>

            <!-- Manage Users -->
            <button onclick="quickAction('users')" class="card-elegant rounded-2xl p-6 text-center hover:scale-105 transition-all duration-300 slide-up" style="animation-delay: 0.3s;">
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                    </svg>
                </div>
                <p class="text-yellow-400 font-semibold text-sm">👥 Kelola User</p>
            </button>

            <!-- Settings -->
            <a href="{{ route('admin.settings.index') }}" class="card-elegant rounded-2xl p-6 text-center hover:scale-105 transition-all duration-300 slide-up" style="animation-delay: 0.4s;">
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <p class="text-yellow-400 font-semibold text-sm">⚙️ Pengaturan</p>
            </a>

            <!-- Reports -->
            <button onclick="quickAction('reports')" class="card-elegant rounded-2xl p-6 text-center hover:scale-105 transition-all duration-300 slide-up" style="animation-delay: 0.5s;">
                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM9 17H7V10H9V17ZM13 17H11V7H13V17ZM17 17H15V13H17V17Z"/>
                    </svg>
                </div>
                <p class="text-yellow-400 font-semibold text-sm">📊 Laporan</p>
            </button>
        </div>
    </div>
</section>

<!-- Recent Activities -->
<section class="py-12 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent PPDB Applications -->
            <div class="card-elegant rounded-2xl p-6 slide-up">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-yellow-400">📝 Pendaftar PPDB Terbaru</h3>
                    <a href="#" class="text-yellow-400 hover:text-yellow-300 text-sm">Lihat Semua →</a>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 bg-black/50 rounded-lg">
                        <div>
                            <p class="text-white font-medium">Ahmad Rizki Pratama</p>
                            <p class="text-gray-400 text-sm">Teknik Komputer dan Jaringan</p>
                        </div>
                        <span class="bg-green-500/20 text-green-400 px-2 py-1 rounded-lg text-xs">✅ Lengkap</span>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 bg-black/50 rounded-lg">
                        <div>
                            <p class="text-white font-medium">Siti Nurhaliza</p>
                            <p class="text-gray-400 text-sm">Akuntansi</p>
                        </div>
                        <span class="bg-yellow-500/20 text-yellow-400 px-2 py-1 rounded-lg text-xs">⏳ Review</span>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 bg-black/50 rounded-lg">
                        <div>
                            <p class="text-white font-medium">Budi Santoso</p>
                            <p class="text-gray-400 text-sm">Multimedia</p>
                        </div>
                        <span class="bg-red-500/20 text-red-400 px-2 py-1 rounded-lg text-xs">❌ Kurang Dokumen</span>
                    </div>
                </div>
            </div>

            <!-- Recent Feedback -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.2s;">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-yellow-400">💬 Feedback Terbaru</h3>
                    <a href="#" class="text-yellow-400 hover:text-yellow-300 text-sm">Lihat Semua →</a>
                </div>
                
                <div class="space-y-4">
                    <div class="p-3 bg-black/50 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-white font-medium">Dwi Handayani</p>
                            <div class="text-yellow-400">⭐⭐⭐⭐⭐</div>
                        </div>
                        <p class="text-gray-300 text-sm mb-2">"Fasilitas lab komputer sangat memadai dan guru-guru profesional."</p>
                        <span class="bg-blue-500/20 text-blue-400 px-2 py-1 rounded-lg text-xs">🏢 Fasilitas</span>
                    </div>
                    
                    <div class="p-3 bg-black/50 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-white font-medium">Anonim</p>
                            <div class="text-yellow-400">⭐⭐⭐⭐</div>
                        </div>
                        <p class="text-gray-300 text-sm mb-2">"Perlu ditambah ekstrakurikuler olahraga yang lebih beragam."</p>
                        <span class="bg-green-500/20 text-green-400 px-2 py-1 rounded-lg text-xs">🎭 Ekstrakurikuler</span>
                    </div>
                    
                    <div class="p-3 bg-black/50 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-white font-medium">Ratna Sari</p>
                            <div class="text-yellow-400">⭐⭐⭐⭐⭐</div>
                        </div>
                        <p class="text-gray-300 text-sm mb-2">"Terima kasih untuk program beasiswa yang membantu anak saya."</p>
                        <span class="bg-purple-500/20 text-purple-400 px-2 py-1 rounded-lg text-xs">💰 Administrasi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- System Status -->
<section class="py-12 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 fade-in">
            <h2 class="text-3xl font-bold text-gradient mb-4">🔧 Status Sistem</h2>
            <p class="text-xl text-gray-300">Monitoring kesehatan sistem dan layanan</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Website Status -->
            <div class="card-elegant rounded-2xl p-6 slide-up">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-lg font-semibold text-yellow-400">🌐 Website</h4>
                    <span class="bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-sm font-medium">✅ Online</span>
                </div>
                <div class="space-y-2 text-sm text-gray-300">
                    <div class="flex justify-between">
                        <span>Uptime:</span>
                        <span class="text-green-400">99.9%</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Response Time:</span>
                        <span class="text-green-400">124ms</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Last Check:</span>
                        <span class="text-gray-400">2 menit yang lalu</span>
                    </div>
                </div>
            </div>

            <!-- Database Status -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.2s;">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-lg font-semibold text-yellow-400">🗄️ Database</h4>
                    <span class="bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-sm font-medium">✅ Healthy</span>
                </div>
                <div class="space-y-2 text-sm text-gray-300">
                    <div class="flex justify-between">
                        <span>Connections:</span>
                        <span class="text-green-400">45/100</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Query Time:</span>
                        <span class="text-green-400">8ms avg</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Storage Used:</span>
                        <span class="text-yellow-400">2.3GB / 10GB</span>
                    </div>
                </div>
            </div>

            <!-- Email System -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.4s;">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-lg font-semibold text-yellow-400">📧 Email System</h4>
                    <span class="bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-sm font-medium">✅ Active</span>
                </div>
                <div class="space-y-2 text-sm text-gray-300">
                    <div class="flex justify-between">
                        <span>Queue:</span>
                        <span class="text-green-400">0 pending</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sent Today:</span>
                        <span class="text-blue-400">147 emails</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Success Rate:</span>
                        <span class="text-green-400">99.2%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="py-12 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-3xl font-bold text-black mb-4">🚀 Akses Cepat</h2>
            <p class="text-xl text-black/80 mb-8">Link-link penting untuk administrasi sekolah</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('home') }}" class="bg-black text-yellow-400 px-6 py-3 rounded-xl font-semibold hover:bg-gray-900 transition-colors">🏠 Website Utama</a>
                <a href="{{ route('news.index') }}" class="bg-white text-black px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors">📰 Kelola Berita</a>
                <a href="{{ route('contact') }}" class="border-2 border-black text-black px-6 py-3 rounded-xl font-semibold hover:bg-black hover:text-yellow-400 transition-colors">📞 Pusat Bantuan</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-red-700 transition-colors">🔐 Logout</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
// Quick action handlers
function quickAction(action) {
    const actions = {
        'news': '📰 Fitur kelola berita akan segera hadir!',
        'ppdb': '📚 Fitur kelola PPDB akan segera hadir!',
        'feedback': '💬 Fitur kelola feedback akan segera hadir!',
        'users': '👥 Fitur kelola user akan segera hadir!',
        'reports': '📊 Fitur laporan akan segera hadir!'
    };
    
    alert(actions[action] || '🔧 Fitur ini akan segera hadir!');
}

document.addEventListener('DOMContentLoaded', function() {
    // Auto-refresh statistics every 30 seconds
    setInterval(function() {
        // Simulate data refresh
        console.log('📊 Refreshing dashboard statistics...');
    }, 30000);
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.slide-up, .fade-in').forEach(el => {
        observer.observe(el);
    });
});
</script>
@endsection