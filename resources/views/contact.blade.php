@extends('layouts.app')

@section('title', 'Hubungi Kami - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">📞 Hubungi Kami</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Kami siap membantu dan menjawab semua pertanyaan Anda tentang SMK Karya Pembangunan. Jangan ragu untuk menghubungi kami!
            </p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Address -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22S19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9S10.62 6.5 12 6.5S14.5 7.62 14.5 9S13.38 11.5 12 11.5Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">📍 Alamat Sekolah</h3>
                <p class="text-gray-300 leading-relaxed">
                    Jl. Pendidikan Raya No. 123<br>
                    Kelurahan Maju Jaya<br>
                    Kecamatan Pendidikan<br>
                    Jakarta Selatan 12345
                </p>
            </div>

            <!-- Phone -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.69 14.9 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 15.5 21 15.95 21 16.5V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">📞 Telepon</h3>
                <div class="text-gray-300 space-y-2">
                    <p><strong>Kantor Utama:</strong><br>(021) 1234-5678</p>
                    <p><strong>PPDB:</strong><br>(021) 1234-5679</p>
                    <p><strong>WhatsApp:</strong><br>+62 812-3456-7890</p>
                </div>
            </div>

            <!-- Email -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">✉️ Email</h3>
                <div class="text-gray-300 space-y-2">
                    <p><strong>Umum:</strong><br>info@smkkaryapembangunan.sch.id</p>
                    <p><strong>PPDB:</strong><br>ppdb@smkkaryapembangunan.sch.id</p>
                    <p><strong>Kerjasama:</strong><br>partnership@smkkaryapembangunan.sch.id</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="py-20 bg-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">💬 Kirim Pesan</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Punya pertanyaan atau ingin mendapatkan informasi lebih lanjut? Kirim pesan kepada kami dan kami akan merespon dengan cepat.
            </p>
        </div>

        <div class="card-elegant rounded-2xl p-8 md:p-12 slide-up">
            <form class="space-y-6" x-data="contactForm()" @submit.prevent="submitForm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-yellow-400 mb-2">👤 Nama Lengkap *</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name"
                            x-model="form.name"
                            required 
                            class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                            placeholder="Masukkan nama lengkap Anda"
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-yellow-400 mb-2">📧 Email *</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            x-model="form.email"
                            required 
                            class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                            placeholder="alamat@email.com"
                        >
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-yellow-400 mb-2">📱 Nomor Telepon</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            x-model="form.phone"
                            class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                            placeholder="+62 812-3456-7890"
                        >
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-yellow-400 mb-2">📋 Subjek *</label>
                        <select 
                            id="subject" 
                            name="subject"
                            x-model="form.subject"
                            required 
                            class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                        >
                            <option value="">Pilih subjek pesan</option>
                            <option value="ppdb">📚 Informasi PPDB</option>
                            <option value="kurikulum">🎓 Kurikulum & Program</option>
                            <option value="fasilitas">🏢 Fasilitas Sekolah</option>
                            <option value="ekstrakurikuler">🎭 Ekstrakurikuler</option>
                            <option value="kerjasama">🤝 Kerjasama & Partnership</option>
                            <option value="lainnya">❓ Lainnya</option>
                        </select>
                    </div>
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-yellow-400 mb-2">💭 Pesan *</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="6"
                        x-model="form.message"
                        required 
                        class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors resize-none" 
                        placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."
                    ></textarea>
                </div>

                <!-- Privacy Policy -->
                <div class="flex items-start space-x-3">
                    <input 
                        type="checkbox" 
                        id="privacy" 
                        name="privacy"
                        x-model="form.privacy"
                        required 
                        class="mt-1 w-4 h-4 text-yellow-500 bg-gray-800 border-yellow-500/30 rounded focus:ring-yellow-500 focus:ring-2"
                    >
                    <label for="privacy" class="text-sm text-gray-300">
                        Saya setuju dengan <a href="#" class="text-yellow-400 hover:text-yellow-300 underline">kebijakan privasi</a> dan memberikan izin untuk dihubungi terkait pesan ini. *
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button 
                        type="submit" 
                        :disabled="loading"
                        class="bg-yellow-500 text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-yellow-400 disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105 transition-all duration-300 shine-effect glow-effect"
                        :class="{ 'opacity-50 cursor-not-allowed': loading }"
                    >
                        <span x-show="!loading">🚀 Kirim Pesan</span>
                        <span x-show="loading">⏳ Mengirim...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Office Hours -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🕐 Jam Operasional</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Waktu terbaik untuk menghubungi dan mengunjungi kami
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Weekdays -->
            <div class="card-elegant rounded-2xl p-8 slide-up">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12S17.52 2 12 2ZM17 13H11V7H13V11H17V13Z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">📅 Senin - Jumat</h3>
                    <div class="text-gray-300 space-y-2">
                        <p><strong>Jam Sekolah:</strong><br>07:00 - 16:00 WIB</p>
                        <p><strong>Kantor Administrasi:</strong><br>07:30 - 15:30 WIB</p>
                        <p><strong>Konsultasi PPDB:</strong><br>08:00 - 14:00 WIB</p>
                    </div>
                </div>
            </div>

            <!-- Weekend -->
            <div class="card-elegant rounded-2xl p-8 slide-up" style="animation-delay: 0.2s;">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19Z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">🏖️ Sabtu - Minggu</h3>
                    <div class="text-gray-300 space-y-2">
                        <p><strong>Sabtu:</strong><br>08:00 - 12:00 WIB<br><small>(Konsultasi PPDB saja)</small></p>
                        <p><strong>Minggu:</strong><br>Tutup</p>
                        <p><strong>WhatsApp 24/7:</strong><br>Respon dalam 1-24 jam</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Holiday Notice -->
        <div class="mt-12 text-center">
            <div class="inline-block bg-yellow-500/20 border border-yellow-500/30 rounded-2xl px-6 py-4">
                <p class="text-yellow-400 font-medium">
                    ⚠️ <strong>Catatan:</strong> Pada hari libur nasional dan cuti bersama, kantor tutup. 
                    Untuk keperluan mendesak, silakan hubungi melalui WhatsApp.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🗺️ Lokasi Sekolah</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Temukan kami dengan mudah menggunakan peta interaktif di bawah ini
            </p>
        </div>

        <div class="card-elegant rounded-2xl p-4 slide-up">
            <!-- Placeholder for Google Maps -->
            <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-16 h-16 text-yellow-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22S19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9S10.62 6.5 12 6.5S14.5 7.62 14.5 9S13.38 11.5 12 11.5Z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-yellow-400 mb-2">🏫 SMK Karya Pembangunan</h3>
                    <p class="text-gray-300 mb-4">Jl. Pendidikan Raya No. 123, Jakarta Selatan</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://maps.google.com" target="_blank" class="bg-yellow-500 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-colors shine-effect">
                            🧭 Buka di Google Maps
                        </a>
                        <a href="https://waze.com" target="_blank" class="border-2 border-yellow-500 text-yellow-400 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 hover:text-black transition-colors">
                            🚗 Navigasi dengan Waze
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transportation Info -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="text-center slide-up">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5H6.5C5.84 5 5.28 5.42 5.08 6.01L3 12V20C3 20.55 3.45 21 4 21H5C5.55 21 6 20.55 6 20V19H18V20C18 20.55 18.45 21 19 21H20C20.55 21 21 20.55 21 20V12L18.92 6.01ZM6.5 16C5.67 16 5 15.33 5 14.5S5.67 13 6.5 13S8 13.67 8 14.5S7.33 16 6.5 16ZM17.5 16C16.67 16 16 15.33 16 14.5S16.67 13 17.5 13S19 13.67 19 14.5S18.33 16 17.5 16ZM5 11L6.5 6.5H17.5L19 11H5Z"/>
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-yellow-400 mb-2">🚗 Kendaraan Pribadi</h4>
                <p class="text-gray-300 text-sm">Parkir luas dan aman tersedia untuk mobil dan motor</p>
            </div>

            <div class="text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-yellow-400 mb-2">🚌 Transportasi Umum</h4>
                <p class="text-gray-300 text-sm">Akses mudah dengan busway, angkot, dan ojek online</p>
            </div>

            <div class="text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22S19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9S10.62 6.5 12 6.5S14.5 7.62 14.5 9S13.38 11.5 12 11.5Z"/>
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-yellow-400 mb-2">📍 Lokasi Strategis</h4>
                <p class="text-gray-300 text-sm">Di pusat kota dengan akses ke berbagai fasilitas umum</p>
            </div>
        </div>
    </div>
</section>

<script>
function contactForm() {
    return {
        loading: false,
        form: {
            name: '',
            email: '',
            phone: '',
            subject: '',
            message: '',
            privacy: false
        },
        
        async submitForm() {
            this.loading = true;
            
            // Simulate form submission
            try {
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Show success message
                alert('✅ Pesan Anda berhasil dikirim! Kami akan merespon dalam 1x24 jam.');
                
                // Reset form
                this.form = {
                    name: '',
                    email: '',
                    phone: '',
                    subject: '',
                    message: '',
                    privacy: false
                };
                
            } catch (error) {
                alert('❌ Terjadi kesalahan. Silakan coba lagi atau hubungi kami langsung via WhatsApp.');
            } finally {
                this.loading = false;
            }
        }
    }
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
@endsection