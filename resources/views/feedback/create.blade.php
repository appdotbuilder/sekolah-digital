@extends('layouts.app')

@section('title', 'Feedback & Saran - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">💬 Feedback & Saran</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Pendapat Anda sangat berharga bagi kami. Berikan feedback, saran, atau kritik yang membangun untuk kemajuan SMK Karya Pembangunan
            </p>
        </div>
    </div>
</section>

<!-- Why Feedback Matters -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🌟 Mengapa Feedback Penting?</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Feedback Anda membantu kami terus berkembang dan memberikan pelayanan terbaik
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Reason 1 -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">📈 Peningkatan Kualitas</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Membantu kami mengidentifikasi area yang perlu diperbaiki dan ditingkatkan untuk memberikan pendidikan berkualitas.
                </p>
            </div>

            <!-- Reason 2 -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">🤝 Hubungan yang Baik</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Menciptakan komunikasi dua arah yang sehat antara sekolah dengan siswa, orang tua, dan masyarakat.
                </p>
            </div>

            <!-- Reason 3 -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM9 17H7V10H9V17ZM13 17H11V7H13V17ZM17 17H15V13H17V17Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-3">🎯 Inovasi Berkelanjutan</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Mendorong implementasi ide-ide baru dan inovatif untuk kemajuan sistem pendidikan di sekolah.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Feedback Form -->
<section class="py-20 bg-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">📝 Berikan Feedback Anda</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Suara Anda sangat berarti bagi kami. Sampaikan pendapat, saran, atau kritik yang konstruktif.
            </p>
        </div>

        <div class="card-elegant rounded-2xl p-8 md:p-12 slide-up">
            <form class="space-y-6" x-data="feedbackForm()" @submit.prevent="submitForm">
                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-yellow-400 mb-2">📂 Kategori Feedback *</label>
                    <select 
                        id="category" 
                        name="category"
                        x-model="form.category"
                        required 
                        class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                    >
                        <option value="">Pilih kategori feedback</option>
                        <option value="academic">🎓 Akademik & Kurikulum</option>
                        <option value="facilities">🏢 Fasilitas Sekolah</option>
                        <option value="teachers">👨‍🏫 Kualitas Pengajar</option>
                        <option value="extracurricular">🎭 Ekstrakurikuler</option>
                        <option value="administration">📋 Administrasi</option>
                        <option value="technology">💻 Sistem & Teknologi</option>
                        <option value="environment">🌱 Lingkungan Sekolah</option>
                        <option value="other">❓ Lainnya</option>
                    </select>
                </div>

                <!-- Rating -->
                <div>
                    <label class="block text-sm font-medium text-yellow-400 mb-2">⭐ Berikan Rating Keseluruhan *</label>
                    <div class="flex items-center space-x-4">
                        <div class="flex space-x-1">
                            <template x-for="i in 5" :key="i">
                                <button 
                                    type="button"
                                    @click="form.rating = i"
                                    :class="i <= form.rating ? 'text-yellow-400' : 'text-gray-600'"
                                    class="text-3xl hover:text-yellow-400 transition-colors"
                                >
                                    ⭐
                                </button>
                            </template>
                        </div>
                        <span x-show="form.rating > 0" class="text-gray-300 text-sm">
                            (<span x-text="form.rating"></span>/5 - <span x-text="getRatingText(form.rating)"></span>)
                        </span>
                    </div>
                </div>

                <!-- Name (Optional) -->
                <div>
                    <label for="name" class="block text-sm font-medium text-yellow-400 mb-2">👤 Nama (Opsional)</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name"
                        x-model="form.name"
                        class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                        placeholder="Masukkan nama Anda (boleh dikosongkan)"
                    >
                    <p class="text-gray-400 text-xs mt-1">* Bisa diisi anonim jika Anda tidak ingin mencantumkan nama</p>
                </div>

                <!-- Email (Optional) -->
                <div>
                    <label for="email" class="block text-sm font-medium text-yellow-400 mb-2">📧 Email (Opsional)</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        x-model="form.email"
                        class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                        placeholder="alamat@email.com"
                    >
                    <p class="text-gray-400 text-xs mt-1">* Email akan digunakan untuk followup jika diperlukan</p>
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-yellow-400 mb-2">👥 Status Anda *</label>
                    <select 
                        id="status" 
                        name="status"
                        x-model="form.status"
                        required 
                        class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                    >
                        <option value="">Pilih status Anda</option>
                        <option value="student">👨‍🎓 Siswa</option>
                        <option value="parent">👨‍👩‍👧‍👦 Orang Tua/Wali</option>
                        <option value="alumni">🎓 Alumni</option>
                        <option value="teacher">👨‍🏫 Guru/Staff</option>
                        <option value="community">🏘️ Masyarakat</option>
                        <option value="prospective">📚 Calon Siswa</option>
                        <option value="other">❓ Lainnya</option>
                    </select>
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-yellow-400 mb-2">💭 Pesan Feedback *</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="8"
                        x-model="form.message"
                        required 
                        class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors resize-none" 
                        placeholder="Sampaikan feedback, saran, kritik, atau apresiasi Anda secara detail di sini..."
                        maxlength="1000"
                    ></textarea>
                    <div class="flex justify-between items-center mt-2 text-xs text-gray-400">
                        <span>* Maksimal 1000 karakter</span>
                        <span x-text="form.message.length + '/1000'"></span>
                    </div>
                </div>

                <!-- Suggestions for Improvement -->
                <div>
                    <label for="suggestions" class="block text-sm font-medium text-yellow-400 mb-2">💡 Saran Perbaikan (Opsional)</label>
                    <textarea 
                        id="suggestions" 
                        name="suggestions" 
                        rows="4"
                        x-model="form.suggestions"
                        class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors resize-none" 
                        placeholder="Berikan saran konkret untuk perbaikan yang bisa diterapkan..."
                        maxlength="500"
                    ></textarea>
                    <div class="text-xs text-gray-400 mt-1 text-right" x-text="form.suggestions.length + '/500'"></div>
                </div>

                <!-- Anonymous Option -->
                <div class="flex items-center space-x-3 bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-4">
                    <input 
                        type="checkbox" 
                        id="anonymous" 
                        name="anonymous"
                        x-model="form.anonymous"
                        class="w-4 h-4 text-yellow-500 bg-gray-800 border-yellow-500/30 rounded focus:ring-yellow-500 focus:ring-2"
                    >
                    <label for="anonymous" class="text-sm text-gray-300">
                        <strong class="text-yellow-400">🕶️ Kirim Anonim:</strong> Centang jika Anda ingin mengirim feedback secara anonim (nama dan email tidak akan ditampilkan)
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-4">
                    <button 
                        type="submit" 
                        :disabled="loading || !form.category || !form.rating || !form.message || !form.status"
                        class="bg-yellow-500 text-black px-12 py-4 rounded-xl font-bold text-lg hover:bg-yellow-400 disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105 transition-all duration-300 shine-effect glow-effect"
                        :class="{ 'opacity-50 cursor-not-allowed': loading || !form.category || !form.rating || !form.message || !form.status }"
                    >
                        <span x-show="!loading">🚀 Kirim Feedback</span>
                        <span x-show="loading">⏳ Mengirim...</span>
                    </button>
                    <p class="text-gray-400 text-sm mt-4">
                        Feedback Anda akan ditinjau oleh tim manajemen sekolah
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Recent Feedback (Testimonials) -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">💬 Apa Kata Mereka</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Beberapa testimoni dan feedback positif dari komunitas SMK Karya Pembangunan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="card-elegant rounded-2xl p-6 slide-up">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mr-4">
                        <span class="text-black font-bold">AS</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-yellow-400">Ahmad Sutrisno</h4>
                        <p class="text-gray-400 text-xs">Alumni 2020</p>
                    </div>
                    <div class="ml-auto text-yellow-400">⭐⭐⭐⭐⭐</div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed italic">
                    "Fasilitas lab komputer sangat memadai dan guru-guru sangat profesional. Berkat pendidikan di sini, saya bisa langsung kerja di perusahaan IT ternama."
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.2s;">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">SR</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-yellow-400">Siti Rahayu</h4>
                        <p class="text-gray-400 text-xs">Orang Tua Siswa</p>
                    </div>
                    <div class="ml-auto text-yellow-400">⭐⭐⭐⭐⭐</div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed italic">
                    "Komunikasi sekolah dengan orang tua sangat baik. Anak saya jadi lebih percaya diri dan mandiri setelah sekolah di sini."
                </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="card-elegant rounded-2xl p-6 slide-up" style="animation-delay: 0.4s;">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">DP</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-yellow-400">Dedi Prasetyo</h4>
                        <p class="text-gray-400 text-xs">Siswa Kelas XII</p>
                    </div>
                    <div class="ml-auto text-yellow-400">⭐⭐⭐⭐⭐</div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed italic">
                    "Ekstrakurikuler robotik di sini keren banget! Banyak lomba yang diikuti dan sering menang. Gurunya juga asik dan sabar."
                </p>
            </div>
        </div>
    </div>
</section>

<script>
function feedbackForm() {
    return {
        loading: false,
        form: {
            category: '',
            rating: 0,
            name: '',
            email: '',
            status: '',
            message: '',
            suggestions: '',
            anonymous: false
        },
        
        getRatingText(rating) {
            const texts = {
                1: 'Sangat Tidak Puas',
                2: 'Tidak Puas',
                3: 'Cukup',
                4: 'Puas',
                5: 'Sangat Puas'
            };
            return texts[rating] || '';
        },
        
        async submitForm() {
            this.loading = true;
            
            try {
                // Simulate form submission
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Redirect to success page
                window.location.href = '{{ route("feedback.success") }}';
                
            } catch (error) {
                alert('❌ Terjadi kesalahan saat mengirim feedback. Silakan coba lagi atau hubungi kami langsung.');
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