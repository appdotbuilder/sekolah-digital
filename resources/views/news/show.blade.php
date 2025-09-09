@extends('layouts.app')

@section('title', $news->title . ' - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section with News Image -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    @if($news->image)
    <div class="absolute inset-0 z-0">
        <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/60 to-black/80"></div>
    </div>
    @endif
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-sm text-gray-400 mb-8 fade-in">
            <a href="{{ route('home') }}" class="hover:text-yellow-400 transition-colors">🏠 Beranda</a>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 5L16 12L9 19"></path>
            </svg>
            <a href="{{ route('news.index') }}" class="hover:text-yellow-400 transition-colors">📰 Berita</a>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 5L16 12L9 19"></path>
            </svg>
            <span class="text-yellow-400">{{ Str::limit($news->title, 50) }}</span>
        </nav>

        <div class="text-center fade-in">
            <!-- Meta Info -->
            <div class="flex flex-wrap items-center justify-center gap-4 text-sm text-gray-400 mb-6">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                    </svg>
                    {{ $news->published_at->format('d F Y') }}
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12S17.52 2 12 2ZM17 13H11V7H13V11H17V13Z"/>
                    </svg>
                    {{ $news->created_at->diffForHumans() }}
                </div>
                <span class="bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-xs">
                    📢 Berita Sekolah
                </span>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $news->title }}
            </h1>
            
            <!-- Excerpt -->
            @if($news->excerpt)
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                {{ $news->excerpt }}
            </p>
            @endif
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-20 bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="card-elegant rounded-2xl p-8 md:p-12 slide-up">
            <!-- Featured Image -->
            @if($news->image)
            <div class="mb-8">
                <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full rounded-xl shadow-2xl">
            </div>
            @endif

            <!-- Article Body -->
            <div class="prose prose-lg prose-invert max-w-none">
                <div class="text-gray-300 leading-relaxed">
                    {!! nl2br(e($news->content)) !!}
                </div>
            </div>

            <!-- Share Buttons -->
            <div class="mt-12 pt-8 border-t border-yellow-500/20">
                <h3 class="text-lg font-semibold text-yellow-400 mb-4">📤 Bagikan Artikel</h3>
                <div class="flex flex-wrap gap-3">
                    <a href="#" onclick="shareToFacebook()" class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557C23.117 4.949 22.168 5.213 21.172 5.332C22.189 4.723 22.97 3.758 23.337 2.608C22.386 3.172 21.332 3.582 20.21 3.803C19.313 2.846 18.032 2.248 16.616 2.248C13.437 2.248 11.101 5.214 11.819 8.293C7.728 8.088 4.1 6.128 1.671 3.149C0.381 5.362 1.002 8.257 3.194 9.723C2.388 9.697 1.628 9.476 0.965 9.107C0.911 11.388 2.546 13.522 4.914 13.997C4.221 14.185 3.462 14.229 2.69 14.081C3.316 16.037 5.134 17.46 7.29 17.5C5.22 19.123 2.612 19.848 0 19.54C2.179 20.937 4.768 21.752 7.548 21.752C16.69 21.752 21.855 14.031 21.543 7.106C22.505 6.411 23.34 5.544 24 4.557Z"/>
                        </svg>
                        <span>Facebook</span>
                    </a>
                    <a href="#" onclick="shareToTwitter()" class="flex items-center space-x-2 bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6C21.69 6.35 20.86 6.58 20 6.69C20.88 6.16 21.56 5.32 21.88 4.31C21.05 4.81 20.13 5.16 19.16 5.36C18.37 4.5 17.26 4 16 4C13.65 4 11.73 5.92 11.73 8.29C11.73 8.63 11.77 8.96 11.84 9.27C8.28 9.09 5.11 7.38 3 4.79C2.63 5.42 2.42 6.16 2.42 6.94C2.42 8.43 3.17 9.75 4.33 10.5C3.62 10.5 2.96 10.3 2.38 10C2.38 10 2.38 10 2.38 10.03C2.38 12.11 3.86 13.85 5.82 14.24C5.46 14.34 5.08 14.39 4.69 14.39C4.42 14.39 4.15 14.36 3.89 14.31C4.43 16 6 17.26 7.89 17.29C6.43 18.45 4.58 19.13 2.56 19.13C2.22 19.13 1.88 19.11 1.54 19.07C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79C20.33 8.6 20.33 8.42 20.32 8.23C21.16 7.63 21.88 6.87 22.46 6Z"/>
                        </svg>
                        <span>Twitter</span>
                    </a>
                    <a href="#" onclick="shareToWhatsApp()" class="flex items-center space-x-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382C17.367 14.382 17.264 14.332 17.186 14.238L15.138 12.19C14.982 12.034 14.982 11.786 15.138 11.63C15.294 11.474 15.542 11.474 15.698 11.63L17.746 13.678C17.902 13.834 17.902 14.082 17.746 14.238C17.668 14.332 17.565 14.382 17.472 14.382ZM8.528 14.382C8.435 14.382 8.332 14.332 8.254 14.238C8.098 14.082 8.098 13.834 8.254 13.678L10.302 11.63C10.458 11.474 10.706 11.474 10.862 11.63C11.018 11.786 11.018 12.034 10.862 12.19L8.814 14.238C8.736 14.332 8.633 14.382 8.528 14.382Z"/>
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                    <button onclick="copyLink()" class="flex items-center space-x-2 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                        </svg>
                        <span>Salin Link</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related News -->
@if($relatedNews->count() > 0)
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">📖 Berita Terkait</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Artikel lainnya yang mungkin menarik untuk Anda baca
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($relatedNews as $index => $related)
            <article class="card-elegant rounded-2xl overflow-hidden slide-up" style="animation-delay: {{ $index * 0.1 }}s;">
                @if($related->image)
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ $related->image }}" alt="{{ $related->title }}" class="w-full h-32 object-cover">
                </div>
                @else
                <div class="h-32 bg-gradient-to-br from-yellow-600 to-yellow-800 flex items-center justify-center">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                    </svg>
                </div>
                @endif
                
                <div class="p-4">
                    <div class="text-xs text-gray-400 mb-2">
                        {{ $related->published_at->format('d M Y') }}
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-2 line-clamp-2 hover:text-yellow-400 transition-colors">
                        <a href="{{ route('news.show', $related->slug) }}">{{ $related->title }}</a>
                    </h3>
                    <p class="text-gray-300 text-xs line-clamp-2 mb-3">{{ Str::limit($related->excerpt, 80) }}</p>
                    <a href="{{ route('news.show', $related->slug) }}" class="text-yellow-400 hover:text-yellow-300 text-xs font-medium transition-colors">
                        Baca →
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('news.index') }}" class="bg-yellow-500 text-black px-8 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                📰 Lihat Semua Berita
            </a>
        </div>
    </div>
</section>
@endif

<!-- Back to News -->
<section class="py-16 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-3xl font-bold text-black mb-4">📚 Jelajahi Berita Lainnya</h2>
            <p class="text-black/80 text-lg mb-8 max-w-2xl mx-auto">
                Temukan informasi dan berita terbaru lainnya dari SMK Karya Pembangunan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('news.index') }}" class="bg-black text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 shine-effect">
                    📰 Semua Berita
                </a>
                <a href="{{ route('home') }}" class="border-2 border-black text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-yellow-400 transition-all duration-300">
                    🏠 Kembali ke Beranda
                </a>
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

.prose-invert {
    color: #D1D5DB;
}

.prose-invert h1, .prose-invert h2, .prose-invert h3, .prose-invert h4, .prose-invert h5, .prose-invert h6 {
    color: #FFD700;
    font-weight: bold;
}

.prose-invert p {
    margin-bottom: 1.25rem;
    line-height: 1.75;
}

.prose-invert strong {
    color: #FFFFFF;
    font-weight: 600;
}

.prose-invert a {
    color: #FFD700;
    text-decoration: underline;
}

.prose-invert a:hover {
    color: #FFC107;
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
});

// Share functions
function shareToFacebook() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent('{{ $news->title }}');
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${title}`, '_blank', 'width=600,height=400');
}

function shareToTwitter() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent('{{ $news->title }}');
    window.open(`https://twitter.com/intent/tweet?url=${url}&text=${title}`, '_blank', 'width=600,height=400');
}

function shareToWhatsApp() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent('{{ $news->title }}');
    window.open(`https://wa.me/?text=${title} ${url}`, '_blank');
}

function copyLink() {
    navigator.clipboard.writeText(window.location.href).then(function() {
        alert('✅ Link berhasil disalin ke clipboard!');
    }, function(err) {
        console.error('Could not copy text: ', err);
        alert('❌ Gagal menyalin link. Silakan coba lagi.');
    });
}
</script>
@endsection