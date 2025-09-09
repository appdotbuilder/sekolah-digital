@extends('layouts.app')

@section('title', 'Fasilitas - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">🏢 Fasilitas Sekolah</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Nikmati fasilitas lengkap dan modern yang mendukung proses pembelajaran dan pengembangan potensi siswa di SMK Karya Pembangunan
            </p>
        </div>
    </div>
</section>

<!-- Facilities Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($facilities->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($facilities as $index => $facility)
                <div class="card-elegant rounded-2xl overflow-hidden slide-up" style="animation-delay: {{ $index * 0.1 }}s;">
                    <!-- Image -->
                    <div class="relative">
                        @if($facility->image)
                        <img src="{{ $facility->image }}" alt="{{ $facility->name }}" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        @else
                        <div class="w-full h-48 bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19Z"/>
                            </svg>
                        </div>
                        @endif
                        
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="bg-green-500/90 text-white px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-sm">
                                ✅ Aktif
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <!-- Title -->
                        <h3 class="text-2xl font-bold text-yellow-400 mb-3">{{ $facility->getFacilityIcon() }} {{ $facility->name }}</h3>
                        
                        <!-- Description -->
                        <p class="text-gray-300 leading-relaxed mb-4">
                            {{ Str::limit($facility->description, 120) }}
                        </p>
                        
                        <!-- Specifications -->
                        @if($facility->specifications)
                        <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-4 mb-4">
                            <h4 class="text-yellow-400 font-semibold mb-2 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM9 17H7V10H9V17ZM13 17H11V7H13V17ZM17 17H15V13H17V17Z"/>
                                </svg>
                                📊 Spesifikasi
                            </h4>
                            <p class="text-gray-300 text-sm">{{ $facility->specifications }}</p>
                        </div>
                        @endif
                        
                        <!-- Details -->
                        <div class="space-y-2 mb-4">
                            @if($facility->capacity)
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                                </svg>
                                Kapasitas: {{ $facility->capacity }} orang
                            </div>
                            @endif
                            
                            @if($facility->location)
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22S19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9S10.62 6.5 12 6.5S14.5 7.62 14.5 9S13.38 11.5 12 11.5Z"/>
                                </svg>
                                {{ $facility->location }}
                            </div>
                            @endif
                            
                            @if($facility->operating_hours)
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12S17.52 2 12 2ZM17 13H11V7H13V11H17V13Z"/>
                                </svg>
                                {{ $facility->operating_hours }}
                            </div>
                            @endif
                        </div>
                        
                        <!-- View Details Button -->
                        <button onclick="showFacilityDetails('{{ $facility->name }}', '{{ $facility->description }}')" 
                                class="w-full bg-yellow-500 text-black px-6 py-3 rounded-xl font-bold hover:bg-yellow-400 transform hover:scale-105 transition-all duration-300 shine-effect">
                            👁️ Lihat Detail
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
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-400 mb-4">🏢 Belum Ada Fasilitas</h3>
                <p class="text-gray-500 mb-8 max-w-md mx-auto">
                    Saat ini belum ada informasi fasilitas yang tersedia. Silakan kembali lagi nanti.
                </p>
                <a href="{{ route('home') }}" class="bg-yellow-500 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                    🏠 Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Featured Facilities -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">⭐ Fasilitas Unggulan</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Fasilitas modern yang menjadi kebanggaan SMK Karya Pembangunan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Featured Facility 1 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">🔬 Lab Modern</h3>
                <p class="text-gray-300 text-sm">Laboratorium dengan peralatan terdepan untuk praktik dan penelitian</p>
            </div>

            <!-- Featured Facility 2 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 6H2V20C2 21.1 2.9 22 4 22H18V20H4V6ZM20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2ZM20 16H8V4H20V16Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">💻 Lab Komputer</h3>
                <p class="text-gray-300 text-sm">Ruang komputer dengan spesifikasi tinggi dan akses internet cepat</p>
            </div>

            <!-- Featured Facility 3 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">🏃‍♂️ Fasilitas Olahraga</h3>
                <p class="text-gray-300 text-sm">Lapangan dan peralatan olahraga lengkap untuk berbagai aktivitas</p>
            </div>

            <!-- Featured Facility 4 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.6s;">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">📚 Perpustakaan Digital</h3>
                <p class="text-gray-300 text-sm">Koleksi buku dan referensi digital yang dapat diakses kapan saja</p>
            </div>
        </div>
    </div>
</section>

<!-- Facility Standards -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🏆 Standar Fasilitas</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Komitmen kami terhadap kualitas fasilitas pendidikan terbaik
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Standard 1 -->
            <div class="card-elegant rounded-2xl p-8 slide-up">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12L11 14L15 10M21 12C21 16.97 16.97 21 12 21C7.03 21 3 16.97 3 12C3 7.03 7.03 3 12 3C16.97 3 21 7.03 21 12Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-400">✅ Standar Nasional</h3>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    Semua fasilitas memenuhi standar nasional pendidikan dan terakreditasi oleh lembaga yang berwenang.
                </p>
            </div>

            <!-- Standard 2 -->
            <div class="card-elegant rounded-2xl p-8 slide-up" style="animation-delay: 0.2s;">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12S17.52 2 12 2ZM17 13H11V7H13V11H17V13Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-400">🔄 Update Berkala</h3>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    Peralatan dan teknologi diperbarui secara berkala untuk mengikuti perkembangan industri terkini.
                </p>
            </div>

            <!-- Standard 3 -->
            <div class="card-elegant rounded-2xl p-8 slide-up" style="animation-delay: 0.4s;">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1ZM12 7C13.4 7 14.8 8.6 14.8 10V11.5C14.8 11.8 14.5 12.1 14.2 12.1H9.8C9.5 12.1 9.2 11.8 9.2 11.5V10C9.2 8.6 10.6 7 12 7Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-400">🛡️ Keamanan Terjamin</h3>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    Sistem keamanan 24/7 dengan CCTV dan petugas keamanan profesional untuk menjamin keselamatan siswa.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Virtual Tour CTA -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-4xl font-bold text-black mb-4">🎥 Ingin Melihat Langsung?</h2>
            <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
                Kunjungi sekolah kami atau ikuti virtual tour untuk melihat fasilitas modern yang tersedia
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" class="bg-black text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 shine-effect">
                    📅 Jadwalkan Kunjungan
                </a>
                <button onclick="startVirtualTour()" class="border-2 border-black text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-yellow-400 transition-all duration-300">
                    🎮 Virtual Tour
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Facility Details -->
<div id="facilityModal" class="fixed inset-0 z-50 hidden">
    <div class="fixed inset-0 bg-black/75 backdrop-blur-sm" onclick="closeFacilityModal()"></div>
    <div class="fixed inset-0 flex items-center justify-center p-4">
        <div class="bg-gray-900 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-700">
                <div class="flex justify-between items-center">
                    <h3 id="modalTitle" class="text-2xl font-bold text-yellow-400"></h3>
                    <button onclick="closeFacilityModal()" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <p id="modalDescription" class="text-gray-300 leading-relaxed mb-6"></p>
                <div class="text-center">
                    <button onclick="closeFacilityModal()" class="bg-yellow-500 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 transition-colors">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Show facility details modal
function showFacilityDetails(name, description) {
    document.getElementById('modalTitle').textContent = name;
    document.getElementById('modalDescription').textContent = description;
    document.getElementById('facilityModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

// Close facility details modal
function closeFacilityModal() {
    document.getElementById('facilityModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Start virtual tour
function startVirtualTour() {
    alert('🎮 Fitur Virtual Tour akan segera hadir!\n\n📞 Untuk sementara, silakan hubungi kami untuk menjadwalkan kunjungan langsung:\n\n📱 WhatsApp: +62 812-3456-7890\n📧 Email: info@smkkaryapembangunan.sch.id');
}

// Close modal when pressing Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeFacilityModal();
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