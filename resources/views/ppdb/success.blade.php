@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil - SMK Karya Pembangunan')

@section('content')
<!-- Success Hero Section -->
<section class="py-32 bg-gradient-to-b from-green-900 via-black to-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <!-- Success Icon -->
            <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-8 glow-effect">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            
            <h1 class="text-5xl font-bold text-gradient mb-6">🎉 Pendaftaran Berhasil!</h1>
            <p class="text-2xl text-gray-300 mb-8 leading-relaxed">
                Selamat! Pendaftaran PPDB Anda telah berhasil dikirim. Terima kasih telah memilih SMK Karya Pembangunan sebagai tempat menuntut ilmu.
            </p>
            
            <!-- Registration Number -->
            <div class="bg-yellow-500/20 border-2 border-yellow-500/50 rounded-2xl p-8 mb-8 backdrop-blur-sm">
                <h2 class="text-xl font-bold text-yellow-400 mb-4">📋 Nomor Pendaftaran Anda</h2>
                <div class="text-4xl font-bold text-white bg-black/50 rounded-xl py-4 px-8 inline-block">
                    PPDB{{ date('Y') }}-{{ str_pad(random_int(1, 9999), 4, '0', STR_PAD_LEFT) }}
                </div>
                <p class="text-gray-300 text-sm mt-4">
                    * Simpan nomor ini dengan baik untuk keperluan verifikasi dan komunikasi selanjutnya
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Next Steps -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">📝 Langkah Selanjutnya</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Berikut adalah tahapan yang perlu Anda lakukan setelah mendaftar
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">📧 Cek Email</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Konfirmasi pendaftaran akan dikirim ke email Anda dalam 1x24 jam. Cek folder spam jika tidak ditemukan.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-black">2</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">📄 Siapkan Berkas</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Siapkan semua dokumen persyaratan yang telah dilegalisir untuk proses verifikasi.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">📚 Ikuti Tes</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Ikuti tes seleksi sesuai jadwal yang akan diberitahukan melalui email dan SMS.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.6s;">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">🎊 Pengumuman</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Pantau pengumuman hasil seleksi dan lakukan daftar ulang jika dinyatakan lulus.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Important Information -->
<section class="py-20 bg-black">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Important Notes -->
            <div class="card-elegant rounded-2xl p-8 slide-up">
                <h3 class="text-2xl font-bold text-yellow-400 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 14H11V9H13M13 18H11V16H13M1 21H23L12 2L1 21Z"/>
                    </svg>
                    ⚠️ Catatan Penting
                </h3>
                <div class="space-y-4 text-gray-300">
                    <div class="flex items-start space-x-3">
                        <span class="text-yellow-400 mt-1">•</span>
                        <p>Simpan nomor pendaftaran dengan baik untuk keperluan komunikasi</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <span class="text-yellow-400 mt-1">•</span>
                        <p>Pastikan nomor telepon dan email selalu aktif selama proses seleksi</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <span class="text-yellow-400 mt-1">•</span>
                        <p>Datang tepat waktu saat tes seleksi dengan membawa kartu pendaftaran</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <span class="text-yellow-400 mt-1">•</span>
                        <p>Hubungi kami jika ada perubahan data atau informasi tambahan</p>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="card-elegant rounded-2xl p-8 slide-up" style="animation-delay: 0.2s;">
                <h3 class="text-2xl font-bold text-yellow-400 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.69 14.9 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 15.5 21 15.95 21 16.5V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"/>
                    </svg>
                    📞 Informasi Kontak
                </h3>
                <div class="space-y-4 text-gray-300">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.69 14.9 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 15.5 21 15.95 21 16.5V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"/>
                        </svg>
                        <div>
                            <p><strong>Telepon PPDB:</strong></p>
                            <p>(021) 1234-5679</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"/>
                        </svg>
                        <div>
                            <p><strong>Email PPDB:</strong></p>
                            <p>ppdb@smkkaryapembangunan.sch.id</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382C17.367 14.382 17.264 14.332 17.186 14.238L15.138 12.19C14.982 12.034 14.982 11.786 15.138 11.63C15.294 11.474 15.542 11.474 15.698 11.63L17.746 13.678C17.902 13.834 17.902 14.082 17.746 14.238C17.668 14.332 17.565 14.382 17.472 14.382Z"/>
                        </svg>
                        <div>
                            <p><strong>WhatsApp:</strong></p>
                            <p>+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12S17.52 2 12 2ZM17 13H11V7H13V11H17V13Z"/>
                        </svg>
                        <div>
                            <p><strong>Jam Layanan:</strong></p>
                            <p>Senin - Sabtu: 08:00 - 15:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Action Buttons -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-4xl font-bold text-black mb-4">🚀 Selangkah Lagi Menuju Sukses!</h2>
            <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
                Pendaftaran adalah langkah pertama menuju masa depan cerah. Mari bersama-sama kita wujudkan impian Anda!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('home') }}" class="bg-black text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 shine-effect">
                    🏠 Kembali ke Beranda
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-black text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-yellow-400 transition-all duration-300">
                    💬 Hubungi Kami
                </a>
                <button onclick="printRegistration()" class="bg-white text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all duration-300">
                    🖨️ Cetak Bukti
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Celebration Animation -->
<div id="confetti-container" class="fixed inset-0 pointer-events-none z-50"></div>

<script>
// Print registration confirmation
function printRegistration() {
    const registrationNumber = document.querySelector('.text-4xl.font-bold.text-white').textContent;
    const printContent = `
        <div style="text-align: center; font-family: Arial, sans-serif; padding: 40px;">
            <h1 style="color: #000; margin-bottom: 20px;">SMK Karya Pembangunan</h1>
            <h2 style="color: #FFD700; margin-bottom: 30px;">Bukti Pendaftaran PPDB</h2>
            <div style="border: 2px solid #FFD700; padding: 20px; margin: 20px 0; background: #f9f9f9;">
                <p><strong>Nomor Pendaftaran:</strong></p>
                <h3 style="color: #000; font-size: 24px; margin: 10px 0;">${registrationNumber}</h3>
                <p>Tanggal: ${new Date().toLocaleDateString('id-ID')}</p>
                <p>Simpan bukti ini dengan baik</p>
            </div>
            <p style="margin-top: 30px; color: #666;">
                Untuk informasi lebih lanjut hubungi:<br>
                Telepon: (021) 1234-5679<br>
                WhatsApp: +62 812-3456-7890
            </p>
        </div>
    `;
    
    const printWindow = window.open('', '_blank');
    printWindow.document.write(printContent);
    printWindow.document.close();
    printWindow.print();
}

// Confetti animation
function createConfetti() {
    const colors = ['#FFD700', '#FFA500', '#FF6B6B', '#4ECDC4', '#45B7D1'];
    const container = document.getElementById('confetti-container');
    
    for (let i = 0; i < 100; i++) {
        const confetti = document.createElement('div');
        confetti.style.position = 'absolute';
        confetti.style.width = '10px';
        confetti.style.height = '10px';
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.left = Math.random() * 100 + '%';
        confetti.style.animationDuration = Math.random() * 3 + 2 + 's';
        confetti.style.animationDelay = Math.random() * 2 + 's';
        confetti.style.animationName = 'fall';
        confetti.style.animationTimingFunction = 'linear';
        confetti.style.animationIterationCount = 'infinite';
        
        container.appendChild(confetti);
        
        // Remove confetti after animation
        setTimeout(() => {
            if (confetti.parentNode) {
                confetti.parentNode.removeChild(confetti);
            }
        }, 5000);
    }
}

// CSS for confetti animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fall {
        0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
        100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
    }
`;
document.head.appendChild(style);

document.addEventListener('DOMContentLoaded', function() {
    // Start confetti animation
    createConfetti();
    
    // Repeat confetti every few seconds
    setInterval(createConfetti, 3000);
    
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