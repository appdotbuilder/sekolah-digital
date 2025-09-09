@extends('layouts.app')

@section('title', 'Galeri Foto - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">📸 Galeri Foto</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Dokumentasi kegiatan, fasilitas, dan momen berharga di SMK Karya Pembangunan
            </p>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($galleries->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($galleries as $index => $gallery)
                <div class="card-elegant rounded-2xl overflow-hidden slide-up group cursor-pointer" 
                     style="animation-delay: {{ ($index % 12) * 0.1 }}s;"
                     onclick="openLightbox('{{ $gallery->image }}', '{{ $gallery->title }}')">
                     
                    <div class="relative aspect-square overflow-hidden">
                        @if($gallery->image)
                        <img src="{{ $gallery->image }}" alt="{{ $gallery->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M21 19V5C21 3.9 20.1 3 19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19ZM8.5 13.5L11 16.51L14.5 12L19 18H5L8.5 13.5Z"/>
                            </svg>
                        </div>
                        @endif
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                            </svg>
                        </div>
                    </div>
                    
                    @if($gallery->title || $gallery->description)
                    <div class="p-4">
                        @if($gallery->title)
                        <h3 class="font-semibold text-yellow-400 mb-2">{{ $gallery->title }}</h3>
                        @endif
                        @if($gallery->description)
                        <p class="text-gray-300 text-sm line-clamp-2">{{ $gallery->description }}</p>
                        @endif
                    </div>
                    @endif
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($galleries->hasPages())
            <div class="mt-12 flex justify-center">
                <div class="bg-black/50 rounded-2xl p-4">
                    {{ $galleries->links() }}
                </div>
            </div>
            @endif
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-600 to-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 19V5C21 3.9 20.1 3 19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19ZM8.5 13.5L11 16.51L14.5 12L19 18H5L8.5 13.5Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-400 mb-4">📸 Belum Ada Foto</h3>
                <p class="text-gray-500 mb-8 max-w-md mx-auto">
                    Saat ini belum ada foto yang tersedia di galeri. Silakan kembali lagi nanti untuk melihat dokumentasi kegiatan sekolah.
                </p>
                <a href="{{ route('home') }}" class="bg-yellow-500 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                    🏠 Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 z-50 hidden">
    <div class="fixed inset-0 bg-black/90 backdrop-blur-sm" onclick="closeLightbox()"></div>
    <div class="fixed inset-0 flex items-center justify-center p-4">
        <div class="relative max-w-4xl max-h-full">
            <img id="lightbox-image" src="" alt="" class="max-w-full max-h-full rounded-xl">
            <button onclick="closeLightbox()" 
                    class="absolute top-4 right-4 w-10 h-10 bg-black/50 hover:bg-black/70 rounded-full flex items-center justify-center text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div id="lightbox-title" class="absolute bottom-4 left-4 right-4 bg-black/70 text-white p-4 rounded-xl backdrop-blur-sm hidden">
                <h3 class="font-semibold"></h3>
            </div>
        </div>
    </div>
</div>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<script>
// Lightbox functionality
function openLightbox(imageSrc, title) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    
    lightboxImage.src = imageSrc;
    lightboxImage.alt = title;
    
    if (title && title.trim() !== '') {
        lightboxTitle.querySelector('h3').textContent = title;
        lightboxTitle.classList.remove('hidden');
    } else {
        lightboxTitle.classList.add('hidden');
    }
    
    lightbox.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close lightbox with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeLightbox();
    }
});

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
@endsection