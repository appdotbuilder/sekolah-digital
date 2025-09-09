@extends('layouts.app')

@section('title', 'Berita Terbaru - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">📰 Berita Terbaru</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Tetap terkini dengan berbagai informasi, kegiatan, dan prestasi terbaru dari SMK Karya Pembangunan
            </p>
        </div>
    </div>
</section>

<!-- News Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($news->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($news as $index => $article)
                <article class="card-elegant rounded-2xl overflow-hidden slide-up" style="animation-delay: {{ $index * 0.1 }}s;">
                    @if($article->image)
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    @else
                    <div class="h-48 bg-gradient-to-br from-yellow-600 to-yellow-800 flex items-center justify-center">
                        <svg class="w-16 h-16 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                        </svg>
                    </div>
                    @endif
                    
                    <div class="p-6">
                        <!-- Meta Info -->
                        <div class="flex items-center justify-between text-sm text-gray-400 mb-3">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                                </svg>
                                {{ $article->published_at->format('d M Y') }}
                            </div>
                            <span class="bg-yellow-500/20 text-yellow-400 px-2 py-1 rounded-lg text-xs">
                                📢 Berita
                            </span>
                        </div>
                        
                        <!-- Title -->
                        <h2 class="text-xl font-bold text-white mb-3 line-clamp-2 hover:text-yellow-400 transition-colors">
                            <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                        </h2>
                        
                        <!-- Excerpt -->
                        <p class="text-gray-300 text-sm leading-relaxed line-clamp-3 mb-4">
                            {{ Str::limit($article->excerpt, 150) }}
                        </p>
                        
                        <!-- Read More -->
                        <a href="{{ route('news.show', $article->slug) }}" class="inline-flex items-center text-yellow-400 hover:text-yellow-300 font-medium transition-colors group">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($news->hasPages())
            <div class="mt-12 flex justify-center">
                <div class="bg-black/50 rounded-2xl p-4">
                    {{ $news->links('pagination::bootstrap-4') }}
                </div>
            </div>
            @endif
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-400 mb-4">📰 Belum Ada Berita</h3>
                <p class="text-gray-500 mb-8 max-w-md mx-auto">
                    Saat ini belum ada berita yang tersedia. Silakan kembali lagi nanti untuk mendapatkan informasi terbaru.
                </p>
                <a href="{{ route('home') }}" class="bg-yellow-500 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                    🏠 Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Newsletter Signup -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-black/20 rounded-3xl p-8 md:p-12 text-center backdrop-blur-sm">
            <h2 class="text-3xl font-bold text-black mb-4">📬 Dapatkan Update Terbaru</h2>
            <p class="text-black/80 text-lg mb-8 max-w-2xl mx-auto">
                Jangan lewatkan berita dan informasi penting dari SMK Karya Pembangunan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center max-w-md mx-auto">
                <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-4 py-3 rounded-xl bg-white/90 text-black placeholder-gray-600 border border-black/20 focus:outline-none focus:ring-2 focus:ring-black">
                <button class="bg-black text-yellow-400 px-6 py-3 rounded-xl font-semibold hover:bg-gray-900 transition-colors shine-effect whitespace-nowrap">
                    ✉️ Berlangganan
                </button>
            </div>
        </div>
    </div>
</section>

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

/* Custom pagination styles */
.pagination {
    display: flex;
    padding: 0;
    margin: 0;
    list-style: none;
    gap: 8px;
}

.page-item .page-link {
    color: #D1D5DB;
    background-color: transparent;
    border: 1px solid rgba(255, 215, 0, 0.3);
    padding: 8px 12px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.page-item .page-link:hover,
.page-item.active .page-link {
    color: #000;
    background-color: #FFD700;
    border-color: #FFD700;
}

.page-item.disabled .page-link {
    color: #6B7280;
    pointer-events: none;
}
</style>

<script>
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

    // Newsletter form handling
    document.querySelector('button').addEventListener('click', function(e) {
        e.preventDefault();
        const email = document.querySelector('input[type="email"]').value;
        if (email) {
            alert('Terima kasih! Anda akan menerima update berita terbaru di email: ' + email);
            document.querySelector('input[type="email"]').value = '';
        } else {
            alert('Silakan masukkan alamat email yang valid.');
        }
    });
});
</script>
@endsection