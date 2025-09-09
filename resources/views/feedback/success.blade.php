@extends('layouts.app')

@section('title', 'Feedback Terkirim - SMK Karya Pembangunan')

@section('content')
<!-- Success Hero Section -->
<section class="py-32 bg-gradient-to-b from-blue-900 via-black to-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <!-- Success Icon -->
            <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-8 glow-effect">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
            </div>
            
            <h1 class="text-5xl font-bold text-gradient mb-6">💬 Feedback Berhasil Dikirim!</h1>
            <p class="text-2xl text-gray-300 mb-8 leading-relaxed">
                Terima kasih atas feedback yang Anda berikan! Pendapat Anda sangat berharga untuk kemajuan SMK Karya Pembangunan.
            </p>
            
            <!-- Feedback ID -->
            <div class="bg-yellow-500/20 border-2 border-yellow-500/50 rounded-2xl p-8 mb-8 backdrop-blur-sm">
                <h2 class="text-xl font-bold text-yellow-400 mb-4">🆔 ID Feedback Anda</h2>
                <div class="text-4xl font-bold text-white bg-black/50 rounded-xl py-4 px-8 inline-block">
                    FB{{ date('Y') }}-{{ str_pad(random_int(1, 9999), 4, '0', STR_PAD_LEFT) }}
                </div>
                <p class="text-gray-300 text-sm mt-4">
                    * Simpan ID ini untuk referensi jika ada follow-up dari tim manajemen sekolah
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What Happens Next -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🔄 Proses Selanjutnya</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Berikut adalah tahapan bagaimana kami menindaklanjuti feedback Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">📥 Review</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Feedback Anda akan direview oleh tim manajemen dalam waktu 1-2 hari kerja.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-black">2</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">🔍 Analisis</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Tim akan menganalisis dan mengevaluasi feedback untuk menentukan langkah perbaikan.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">⚡ Tindakan</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Implementasi perbaikan atau perubahan berdasarkan feedback yang konstruktif.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.6s;">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">📢 Follow-up</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Komunikasi hasil tindakan melalui email atau pengumuman resmi sekolah.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Impact Statistics -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">📊 Dampak Feedback</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Statistik implementasi feedback dari komunitas sekolah
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="slide-up">
                <div class="text-4xl font-bold text-yellow-400 mb-2">150+</div>
                <div class="text-gray-300">Feedback Diterima</div>
                <div class="text-gray-500 text-sm">Tahun ini</div>
            </div>
            <div class="slide-up" style="animation-delay: 0.2s;">
                <div class="text-4xl font-bold text-yellow-400 mb-2">85%</div>
                <div class="text-gray-300">Ditindaklanjuti</div>
                <div class="text-gray-500 text-sm">Tingkat respon</div>
            </div>
            <div class="slide-up" style="animation-delay: 0.4s;">
                <div class="text-4xl font-bold text-yellow-400 mb-2">45</div>
                <div class="text-gray-300">Perbaikan</div>
                <div class="text-gray-500 text-sm">Implemented</div>
            </div>
            <div class="slide-up" style="animation-delay: 0.6s;">
                <div class="text-4xl font-bold text-yellow-400 mb-2">4.8/5</div>
                <div class="text-gray-300">Rating Kepuasan</div>
                <div class="text-gray-500 text-sm">Rata-rata</div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Improvements -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🔧 Perbaikan Terbaru</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Beberapa perbaikan yang telah diimplementasikan berdasarkan feedback komunitas
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Improvement 1 -->
            <div class="card-elegant rounded-2xl p-6 slide-up">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12L11 14L15 10M21 12C21 16.97 16.97 21 12 21C7.03 21 3 16.97 3 12C3 7.03 7.03 3 12 3C16.97 3 21 7.03 21 12Z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-yellow-400">Wi-Fi Upgrade</h4>
                        <p class="text-gray-400 text-xs">Desember 2023</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Meningkatkan kapasitas dan kecepatan internet di seluruh area sekolah berdasarkan keluhan koneksi lambat.
                </p>
            </div>

            <!-- Improvement 2 -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.2s;">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19Z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-yellow-400">Renovasi Kantin</h4>
                        <p class="text-gray-400 text-xs">Januari 2024</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Merenovasi area kantin dengan menambah tempat duduk dan memperbaiki ventilasi udara.
                </p>
            </div>

            <!-- Improvement 3 -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.4s;">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-yellow-400">Program Bimbingan</h4>
                        <p class="text-gray-400 text-xs">Februari 2024</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Menambah jam bimbingan konseling dan career guidance berdasarkan request siswa dan orang tua.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Appreciation Message -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-4xl font-bold text-black mb-4">🙏 Terima Kasih Atas Partisipasinya!</h2>
            <p class="text-xl text-black/80 mb-8 max-w-3xl mx-auto">
                Setiap feedback yang Anda berikan adalah investasi untuk masa depan pendidikan yang lebih baik. Mari terus bersama-sama membangun SMK Karya Pembangunan menjadi lebih unggul!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('home') }}" class="bg-black text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 shine-effect">
                    🏠 Kembali ke Beranda
                </a>
                <a href="{{ route('feedback.create') }}" class="border-2 border-black text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-yellow-400 transition-all duration-300">
                    💬 Kirim Feedback Lagi
                </a>
                <a href="{{ route('news.index') }}" class="bg-white text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all duration-300">
                    📰 Baca Berita Terbaru
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Floating Hearts Animation -->
<div id="hearts-container" class="fixed inset-0 pointer-events-none z-50"></div>

<script>
// Create floating hearts animation
function createHearts() {
    const colors = ['❤️', '💛', '💙', '💚', '💜'];
    const container = document.getElementById('hearts-container');
    
    for (let i = 0; i < 50; i++) {
        const heart = document.createElement('div');
        heart.textContent = colors[Math.floor(Math.random() * colors.length)];
        heart.style.position = 'absolute';
        heart.style.fontSize = '20px';
        heart.style.left = Math.random() * 100 + '%';
        heart.style.animationDuration = Math.random() * 3 + 2 + 's';
        heart.style.animationDelay = Math.random() * 2 + 's';
        heart.style.animationName = 'float';
        heart.style.animationTimingFunction = 'ease-out';
        heart.style.animationIterationCount = 'infinite';
        
        container.appendChild(heart);
        
        // Remove hearts after animation
        setTimeout(() => {
            if (heart.parentNode) {
                heart.parentNode.removeChild(heart);
            }
        }, 5000);
    }
}

// CSS for hearts animation
const style = document.createElement('style');
style.textContent = `
    @keyframes float {
        0% { 
            transform: translateY(100vh) scale(0) rotate(0deg); 
            opacity: 1; 
        }
        50% {
            transform: translateY(50vh) scale(1) rotate(180deg);
            opacity: 0.8;
        }
        100% { 
            transform: translateY(-10vh) scale(0) rotate(360deg); 
            opacity: 0; 
        }
    }
`;
document.head.appendChild(style);

document.addEventListener('DOMContentLoaded', function() {
    // Start hearts animation
    createHearts();
    
    // Repeat hearts every few seconds
    setInterval(createHearts, 4000);
    
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