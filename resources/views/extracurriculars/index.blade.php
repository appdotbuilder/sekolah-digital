@extends('layouts.app')

@section('title', 'Ekstrakurikuler - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">🎭 Ekstrakurikuler</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Kembangkan bakat dan minat Anda melalui berbagai kegiatan ekstrakurikuler yang menarik dan bermanfaat di SMK Karya Pembangunan
            </p>
        </div>
    </div>
</section>

<!-- Categories Filter -->
<section class="py-12 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4 mb-8" x-data="{ active: 'all' }">
            <button @click="active = 'all'; filterExtras('all')" 
                    :class="active === 'all' ? 'bg-yellow-500 text-black' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                    class="px-6 py-3 rounded-xl font-semibold transition-colors">
                🌟 Semua
            </button>
            <button @click="active = 'sports'; filterExtras('sports')" 
                    :class="active === 'sports' ? 'bg-yellow-500 text-black' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                    class="px-6 py-3 rounded-xl font-semibold transition-colors">
                ⚽ Olahraga
            </button>
            <button @click="active = 'arts'; filterExtras('arts')" 
                    :class="active === 'arts' ? 'bg-yellow-500 text-black' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                    class="px-6 py-3 rounded-xl font-semibold transition-colors">
                🎨 Seni
            </button>
            <button @click="active = 'tech'; filterExtras('tech')" 
                    :class="active === 'tech' ? 'bg-yellow-500 text-black' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                    class="px-6 py-3 rounded-xl font-semibold transition-colors">
                💻 Teknologi
            </button>
            <button @click="active = 'academic'; filterExtras('academic')" 
                    :class="active === 'academic' ? 'bg-yellow-500 text-black' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                    class="px-6 py-3 rounded-xl font-semibold transition-colors">
                📚 Akademik
            </button>
        </div>
    </div>
</section>

<!-- Extracurriculars Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($extracurriculars->count() > 0)
            <div id="extracurriculars-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($extracurriculars as $index => $extra)
                <div class="extra-card card-elegant rounded-2xl overflow-hidden slide-up" 
                     style="animation-delay: {{ $index * 0.1 }}s;"
                     data-category="{{ strtolower($extra->category ?? 'general') }}">
                     
                    <!-- Image -->
                    <div class="relative">
                        @if($extra->image)
                        <img src="{{ $extra->image }}" alt="{{ $extra->name }}" class="w-full h-48 object-cover">
                        @else
                        <div class="w-full h-48 bg-gradient-to-br from-yellow-600 to-yellow-800 flex items-center justify-center">
                            <svg class="w-16 h-16 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                            </svg>
                        </div>
                        @endif
                        
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-black/70 text-yellow-400 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-sm">
                                {{ $extra->getCategoryIcon() }} {{ $extra->getCategoryName() }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <!-- Title -->
                        <h3 class="text-2xl font-bold text-yellow-400 mb-3">{{ $extra->name }}</h3>
                        
                        <!-- Description -->
                        <p class="text-gray-300 leading-relaxed mb-4">
                            {{ Str::limit($extra->description, 120) }}
                        </p>
                        
                        <!-- Schedule & Info -->
                        <div class="space-y-2 mb-6">
                            @if($extra->schedule)
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12S17.52 2 12 2ZM17 13H11V7H13V11H17V13Z"/>
                                </svg>
                                {{ $extra->schedule }}
                            </div>
                            @endif
                            
                            @if($extra->coach)
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"/>
                                </svg>
                                {{ $extra->coach }}
                            </div>
                            @endif
                            
                            @if($extra->location)
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22S19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9S10.62 6.5 12 6.5S14.5 7.62 14.5 9S13.38 11.5 12 11.5Z"/>
                                </svg>
                                {{ $extra->location }}
                            </div>
                            @endif
                        </div>
                        
                        <!-- Achievements -->
                        @if($extra->achievements)
                        <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-4 mb-6">
                            <h4 class="text-yellow-400 font-semibold mb-2 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M5 16L3 5H1V3H4L6 14L7 18H19V16H5ZM7 22C5.9 22 5 21.1 5 20S5.9 18 7 18S9 18.9 9 20S8.1 22 7 22ZM17 22C15.9 22 15 21.1 15 20S15.9 18 17 18S19 18.9 19 20S18.1 22 17 22Z"/>
                                </svg>
                                🏆 Prestasi
                            </h4>
                            <p class="text-gray-300 text-sm">{{ $extra->achievements }}</p>
                        </div>
                        @endif
                        
                        <!-- Join Button -->
                        <button onclick="joinExtracurricular('{{ $extra->name }}')" 
                                class="w-full bg-yellow-500 text-black px-6 py-3 rounded-xl font-bold hover:bg-yellow-400 transform hover:scale-105 transition-all duration-300 shine-effect">
                            🚀 Daftar Sekarang
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-400 mb-4">🎭 Belum Ada Ekstrakurikuler</h3>
                <p class="text-gray-500 mb-8 max-w-md mx-auto">
                    Saat ini belum ada kegiatan ekstrakurikuler yang tersedia. Silakan kembali lagi nanti.
                </p>
                <a href="{{ route('home') }}" class="bg-yellow-500 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                    🏠 Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🌟 Manfaat Ekstrakurikuler</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Mengapa setiap siswa harus aktif dalam kegiatan ekstrakurikuler
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Benefit 1 -->
            <div class="text-center slide-up">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">🤝 Soft Skills</h3>
                <p class="text-gray-300 text-sm">Mengembangkan kemampuan komunikasi, kepemimpinan, dan kerja sama tim</p>
            </div>

            <!-- Benefit 2 -->
            <div class="text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">🏆 Prestasi</h3>
                <p class="text-gray-300 text-sm">Meraih berbagai penghargaan dan pengakuan di tingkat regional dan nasional</p>
            </div>

            <!-- Benefit 3 -->
            <div class="text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">🎓 Beasiswa</h3>
                <p class="text-gray-300 text-sm">Peluang mendapatkan beasiswa prestasi untuk melanjutkan pendidikan</p>
            </div>

            <!-- Benefit 4 -->
            <div class="text-center slide-up" style="animation-delay: 0.6s;">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">📋 Portfolio</h3>
                <p class="text-gray-300 text-sm">Memperkuat CV dan portofolio untuk dunia kerja atau pendidikan lanjutan</p>
            </div>
        </div>
    </div>
</section>

<!-- Registration CTA -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-4xl font-bold text-black mb-4">🎯 Siap Bergabung?</h2>
            <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
                Jangan lewatkan kesempatan emas untuk mengembangkan bakat dan meraih prestasi bersama kami!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" class="bg-black text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 shine-effect">
                    📝 Konsultasi Pendaftaran
                </a>
                <a href="{{ route('ppdb.create') }}" class="border-2 border-black text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-yellow-400 transition-all duration-300">
                    🏫 Info PPDB
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Filter functionality
function filterExtras(category) {
    const cards = document.querySelectorAll('.extra-card');
    
    cards.forEach((card, index) => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
            // Reset animation
            card.style.animation = 'none';
            card.offsetHeight; // Trigger reflow
            card.style.animation = `slideUp 0.8s ease-out ${index * 0.1}s`;
        } else {
            card.style.display = 'none';
        }
    });
}

// Join extracurricular
function joinExtracurricular(name) {
    alert(`🎉 Terima kasih atas minat Anda untuk bergabung dengan "${name}"!\n\n✅ Silakan hubungi kami melalui:\n📞 Telepon: (021) 1234-5678\n📱 WhatsApp: +62 812-3456-7890\n📧 Email: info@smkkaryapembangunan.sch.id\n\nTim kami akan segera menghubungi Anda dengan informasi lebih lanjut tentang jadwal dan persyaratan pendaftaran.`);
}

document.addEventListener('DOMContentLoaded', function() {
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

<style>
.extra-card {
    opacity: 1;
    transform: translateY(0);
}

@keyframes slideUp {
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