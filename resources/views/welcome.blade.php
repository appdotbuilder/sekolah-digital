@extends('layouts.app')

@section('title', 'SMK Karya Pembangunan - Sekolah Menengah Kejuruan Unggulan')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
             alt="SMK Karya Pembangunan" 
             class="w-full h-full object-cover">
        <div class="hero-overlay absolute inset-0"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto fade-in">
        <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold mb-6 leading-tight">
            <span class="text-gradient">SMK Karya</span><br>
            <span class="text-white">Pembangunan</span>
        </h1>
        <p class="text-xl sm:text-2xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
            🎓 Sekolah Menengah Kejuruan unggulan yang mempersiapkan generasi kompeten dan berkarakter untuk masa depan yang cerah
        </p>
        
        <!-- PPDB Status Indicator -->
        @php
            $ppdbOpen = \App\Models\Setting::get('ppdb_status', 'true') === 'true';
        @endphp
        
        @if($ppdbOpen)
            <div class="bg-green-500/20 border border-green-400 text-green-300 px-6 py-3 rounded-xl mb-8 max-w-md mx-auto">
                <div class="flex items-center justify-center space-x-2">
                    <span class="text-2xl">🟢</span>
                    <span class="font-semibold">PPDB 2024/2025 DIBUKA!</span>
                </div>
            </div>
        @else
            <div class="bg-red-500/20 border border-red-400 text-red-300 px-6 py-3 rounded-xl mb-8 max-w-md mx-auto">
                <div class="flex items-center justify-center space-x-2">
                    <span class="text-2xl">🔴</span>
                    <span class="font-semibold">PPDB 2024/2025 DITUTUP</span>
                </div>
            </div>
        @endif
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            @if($ppdbOpen)
                <a href="{{ route('ppdb.create') }}" class="bg-yellow-500 text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-yellow-400 transform hover:scale-105 transition-all duration-300 shine-effect glow-effect">
                    📚 Daftar Sekarang
                </a>
            @else
                <a href="{{ route('ppdb.create') }}" class="bg-gray-600 text-gray-300 px-8 py-4 rounded-xl font-bold text-lg cursor-not-allowed opacity-75">
                    📚 Pendaftaran Ditutup
                </a>
            @endif
            <a href="{{ route('about') }}" class="border-2 border-yellow-500 text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-yellow-500 hover:text-black transition-all duration-300">
                ℹ️ Tentang Kami
            </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="slide-up" style="animation-delay: 0.2s;">
                <div class="text-3xl font-bold text-yellow-400">500+</div>
                <div class="text-gray-300">Siswa Aktif</div>
            </div>
            <div class="slide-up" style="animation-delay: 0.4s;">
                <div class="text-3xl font-bold text-yellow-400">50+</div>
                <div class="text-gray-300">Guru Profesional</div>
            </div>
            <div class="slide-up" style="animation-delay: 0.6s;">
                <div class="text-3xl font-bold text-yellow-400">10+</div>
                <div class="text-gray-300">Jurusan</div>
            </div>
            <div class="slide-up" style="animation-delay: 0.8s;">
                <div class="text-3xl font-bold text-yellow-400">95%</div>
                <div class="text-gray-300">Tingkat Kelulusan</div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="animate-bounce">
            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">✨ Keunggulan Sekolah</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Mengapa memilih SMK Karya Pembangunan sebagai tempat menimba ilmu dan mengembangkan potensi diri
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">🎯 Kurikulum Modern</h3>
                <p class="text-gray-300 leading-relaxed">
                    Kurikulum yang disesuaikan dengan kebutuhan industri dan perkembangan teknologi terkini untuk mempersiapkan siswa yang kompetitif.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM9 17H7V10H9V17ZM13 17H11V7H13V17ZM17 17H15V13H17V17Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">🏭 Fasilitas Lengkap</h3>
                <p class="text-gray-300 leading-relaxed">
                    Laboratorium modern, workshop praktek, perpustakaan digital, dan fasilitas olahraga untuk mendukung pembelajaran optimal.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.6s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">👨‍🏫 Guru Berkualitas</h3>
                <p class="text-gray-300 leading-relaxed">
                    Tenaga pengajar profesional dan berpengalaman yang siap membimbing siswa mencapai prestasi terbaik.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
@if($latestNews->count() > 0)
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">📰 Berita Terbaru</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Informasi terkini seputar kegiatan dan prestasi SMK Karya Pembangunan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($latestNews->take(6) as $index => $news)
            <article class="card-elegant rounded-2xl overflow-hidden slide-up" style="animation-delay: {{ $index * 0.1 }}s;">
                @if($news->image)
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                </div>
                @endif
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-400 mb-2">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                        </svg>
                        {{ $news->published_at->format('d M Y') }}
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 line-clamp-2">{{ $news->title }}</h3>
                    <p class="text-gray-300 text-sm leading-relaxed line-clamp-3 mb-4">{{ Str::limit($news->excerpt, 120) }}</p>
                    <a href="{{ route('news.show', $news->slug) }}" class="inline-flex items-center text-yellow-400 hover:text-yellow-300 font-medium transition-colors">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('news.index') }}" class="bg-yellow-500 text-black px-8 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                📖 Lihat Semua Berita
            </a>
        </div>
    </div>
</section>
@endif

<!-- Extracurricular Section -->
@if($extracurriculars->count() > 0)
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🎭 Ekstrakurikuler</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Berbagai kegiatan ekstrakurikuler untuk mengembangkan bakat dan minat siswa
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($extracurriculars->take(6) as $index => $extra)
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: {{ $index * 0.1 }}s;">
                @if($extra->image)
                <div class="w-20 h-20 mx-auto mb-4 rounded-2xl overflow-hidden">
                    <img src="{{ $extra->image }}" alt="{{ $extra->name }}" class="w-full h-full object-cover">
                </div>
                @else
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                @endif
                <h3 class="text-xl font-bold text-yellow-400 mb-2">{{ $extra->name }}</h3>
                <p class="text-gray-300 text-sm leading-relaxed">{{ Str::limit($extra->description, 100) }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('extracurriculars.index') }}" class="bg-yellow-500 text-black px-8 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                🎨 Lihat Semua Ekstrakurikuler
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-4xl font-bold text-black mb-4">🚀 Siap Memulai Masa Depan Cerah?</h2>
            <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan siswa yang telah merasakan pendidikan berkualitas di SMK Karya Pembangunan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                @php
                    $ppdbOpen = \App\Models\Setting::get('ppdb_status', 'true') === 'true';
                @endphp
                @if($ppdbOpen)
                    <a href="{{ route('ppdb.create') }}" class="bg-black text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 shine-effect">
                        📋 Daftar PPDB
                    </a>
                @else
                    <span class="bg-gray-700 text-gray-400 px-8 py-4 rounded-xl font-bold text-lg cursor-not-allowed opacity-75">
                        📋 PPDB Ditutup
                    </span>
                @endif
                <a href="{{ route('contact') }}" class="border-2 border-black text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-yellow-400 transition-all duration-300">
                    📞 Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Add smooth scroll behavior -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add scroll animations
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

    // Observe all elements with slide-up class
    document.querySelectorAll('.slide-up, .fade-in').forEach(el => {
        observer.observe(el);
    });
});
</script>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.animate-fade-in {
    animation: fadeInUp 0.6s ease-out forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection