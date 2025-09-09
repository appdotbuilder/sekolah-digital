@extends('layouts.app')

@section('title', 'Pendaftaran PPDB - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">📚 Pendaftaran PPDB</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Bergabunglah dengan SMK Karya Pembangunan dan wujudkan impian masa depan cerahmu. Daftar sekarang dan rasakan pendidikan berkualitas tinggi!
            </p>
        </div>
    </div>
</section>

<!-- Registration Info -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Important Dates -->
            <div class="card-elegant rounded-2xl p-8 slide-up">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19Z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">📅 Jadwal Penting</h3>
                    <div class="text-gray-300 space-y-2">
                        <p><strong>Pendaftaran:</strong><br>1 Januari - 31 Maret 2024</p>
                        <p><strong>Tes Seleksi:</strong><br>15-20 April 2024</p>
                        <p><strong>Pengumuman:</strong><br>1 Mei 2024</p>
                        <p><strong>Daftar Ulang:</strong><br>15-30 Mei 2024</p>
                    </div>
                </div>
            </div>

            <!-- Requirements -->
            <div class="card-elegant rounded-2xl p-8 slide-up" style="animation-delay: 0.2s;">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V8H19V19ZM7 10H17V12H7V10ZM7 14H17V16H7V14Z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">📋 Persyaratan</h3>
                    <div class="text-gray-300 text-left space-y-2">
                        <p>• Lulusan SMP/MTs/sederajat</p>
                        <p>• Fotokopi ijazah (dilegalisir)</p>
                        <p>• Fotokopi SKHUN (dilegalisir)</p>
                        <p>• Pas foto 3x4 (6 lembar)</p>
                        <p>• Fotokopi KTP orang tua</p>
                        <p>• Fotokopi KK</p>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="card-elegant rounded-2xl p-8 slide-up" style="animation-delay: 0.4s;">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.69 14.9 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 15.5 21 15.95 21 16.5V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">📞 Info PPDB</h3>
                    <div class="text-gray-300 space-y-2">
                        <p><strong>Telepon:</strong><br>(021) 1234-5679</p>
                        <p><strong>WhatsApp:</strong><br>+62 812-3456-7890</p>
                        <p><strong>Email:</strong><br>ppdb@smkkaryapembangunan.sch.id</p>
                        <p><strong>Jam Layanan:</strong><br>08:00 - 15:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-20 bg-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">📝 Form Pendaftaran</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Lengkapi data diri Anda dengan benar dan akurat untuk proses pendaftaran
            </p>
        </div>

        @if(session('error'))
            <div class="bg-red-100 dark:bg-red-800 border border-red-400 dark:border-red-600 text-red-700 dark:text-red-200 px-4 py-3 rounded mb-6">
                <div class="flex items-center">
                    <span class="text-xl mr-2">❌</span>
                    {{ session('error') }}
                </div>
            </div>
        @endif

        @if(isset($is_ppdb_open) && !$is_ppdb_open)
            <div class="card-elegant rounded-2xl p-8 md:p-12 slide-up text-center">
                <div class="text-8xl mb-6">🚫</div>
                <h3 class="text-3xl font-bold text-red-400 mb-4">Pendaftaran PPDB Sedang Ditutup</h3>
                <p class="text-lg text-gray-300 mb-8">
                    Maaf, pendaftaran Peserta Didik Baru (PPDB) untuk tahun ajaran ini sedang tidak tersedia. 
                    Silakan hubungi sekolah atau pantau website ini secara berkala untuk informasi pembukaan pendaftaran selanjutnya.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('home') }}" 
                       class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">
                        <span class="mr-2">🏠</span>
                        Kembali ke Beranda
                    </a>
                    
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white font-medium rounded-lg transition-colors duration-200">
                        <span class="mr-2">📞</span>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        @else

        <div class="card-elegant rounded-2xl p-8 md:p-12 slide-up">
            <form class="space-y-8" x-data="ppdbForm()" @submit.prevent="submitForm">
                <!-- Personal Information -->
                <div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"/>
                        </svg>
                        👤 Data Pribadi
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Full Name -->
                        <div class="md:col-span-2">
                            <label for="full_name" class="block text-sm font-medium text-yellow-400 mb-2">Nama Lengkap *</label>
                            <input 
                                type="text" 
                                id="full_name" 
                                name="full_name"
                                x-model="form.full_name"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="Masukkan nama lengkap sesuai ijazah"
                            >
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-yellow-400 mb-2">Email *</label>
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

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-yellow-400 mb-2">Nomor Telepon *</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone"
                                x-model="form.phone"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="+62 812-3456-7890"
                            >
                        </div>

                        <!-- Birth Date -->
                        <div>
                            <label for="birth_date" class="block text-sm font-medium text-yellow-400 mb-2">Tanggal Lahir *</label>
                            <input 
                                type="date" 
                                id="birth_date" 
                                name="birth_date"
                                x-model="form.birth_date"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                            >
                        </div>

                        <!-- Birth Place -->
                        <div>
                            <label for="birth_place" class="block text-sm font-medium text-yellow-400 mb-2">Tempat Lahir *</label>
                            <input 
                                type="text" 
                                id="birth_place" 
                                name="birth_place"
                                x-model="form.birth_place"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="Kota kelahiran"
                            >
                        </div>

                        <!-- Gender -->
                        <div>
                            <label for="gender" class="block text-sm font-medium text-yellow-400 mb-2">Jenis Kelamin *</label>
                            <select 
                                id="gender" 
                                name="gender"
                                x-model="form.gender"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                            >
                                <option value="">Pilih jenis kelamin</option>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>

                        <!-- Religion -->
                        <div>
                            <label for="religion" class="block text-sm font-medium text-yellow-400 mb-2">Agama *</label>
                            <select 
                                id="religion" 
                                name="religion"
                                x-model="form.religion"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                            >
                                <option value="">Pilih agama</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="buddha">Buddha</option>
                                <option value="konghuchu">Konghuchu</option>
                            </select>
                        </div>

                        <!-- Address -->
                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm font-medium text-yellow-400 mb-2">Alamat Lengkap *</label>
                            <textarea 
                                id="address" 
                                name="address" 
                                rows="3"
                                x-model="form.address"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors resize-none" 
                                placeholder="Masukkan alamat lengkap tempat tinggal"
                            ></textarea>
                        </div>
                    </div>
                </div>

                <!-- Educational Background -->
                <div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z"/>
                        </svg>
                        🎓 Riwayat Pendidikan
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Previous School -->
                        <div>
                            <label for="previous_school" class="block text-sm font-medium text-yellow-400 mb-2">Asal Sekolah *</label>
                            <input 
                                type="text" 
                                id="previous_school" 
                                name="previous_school"
                                x-model="form.previous_school"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="Nama SMP/MTs asal"
                            >
                        </div>

                        <!-- Graduation Year -->
                        <div>
                            <label for="graduation_year" class="block text-sm font-medium text-yellow-400 mb-2">Tahun Lulus *</label>
                            <select 
                                id="graduation_year" 
                                name="graduation_year"
                                x-model="form.graduation_year"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                            >
                                <option value="">Pilih tahun lulus</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>

                        <!-- Average Score -->
                        <div>
                            <label for="average_score" class="block text-sm font-medium text-yellow-400 mb-2">Rata-rata Nilai Ujian</label>
                            <input 
                                type="number" 
                                id="average_score" 
                                name="average_score"
                                x-model="form.average_score"
                                step="0.01"
                                min="0" 
                                max="100"
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="0.00"
                            >
                        </div>

                        <!-- Major Choice -->
                        <div>
                            <label for="major_choice" class="block text-sm font-medium text-yellow-400 mb-2">Pilihan Jurusan *</label>
                            <select 
                                id="major_choice" 
                                name="major_choice"
                                x-model="form.major_choice"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors"
                            >
                                <option value="">Pilih jurusan</option>
                                <option value="tkj">💻 Teknik Komputer dan Jaringan</option>
                                <option value="rpl">📱 Rekayasa Perangkat Lunak</option>
                                <option value="mm">🎨 Multimedia</option>
                                <option value="ak">💰 Akuntansi</option>
                                <option value="pm">📊 Pemasaran</option>
                                <option value="tbsm">🔧 Teknik Bisnis Sepeda Motor</option>
                                <option value="tkr">🚗 Teknik Kendaraan Ringan</option>
                                <option value="tl">⚡ Teknik Listrik</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Parent Information -->
                <div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                        </svg>
                        👨‍👩‍👧‍👦 Data Orang Tua/Wali
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Father's Name -->
                        <div>
                            <label for="father_name" class="block text-sm font-medium text-yellow-400 mb-2">Nama Ayah *</label>
                            <input 
                                type="text" 
                                id="father_name" 
                                name="father_name"
                                x-model="form.father_name"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="Nama lengkap ayah"
                            >
                        </div>

                        <!-- Mother's Name -->
                        <div>
                            <label for="mother_name" class="block text-sm font-medium text-yellow-400 mb-2">Nama Ibu *</label>
                            <input 
                                type="text" 
                                id="mother_name" 
                                name="mother_name"
                                x-model="form.mother_name"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="Nama lengkap ibu"
                            >
                        </div>

                        <!-- Parent Phone -->
                        <div>
                            <label for="parent_phone" class="block text-sm font-medium text-yellow-400 mb-2">Nomor Telepon Orang Tua *</label>
                            <input 
                                type="tel" 
                                id="parent_phone" 
                                name="parent_phone"
                                x-model="form.parent_phone"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="+62 812-3456-7890"
                            >
                        </div>

                        <!-- Parent Occupation -->
                        <div>
                            <label for="parent_occupation" class="block text-sm font-medium text-yellow-400 mb-2">Pekerjaan Orang Tua *</label>
                            <input 
                                type="text" 
                                id="parent_occupation" 
                                name="parent_occupation"
                                x-model="form.parent_occupation"
                                required 
                                class="w-full px-4 py-3 bg-gray-800 border border-yellow-500/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-colors" 
                                placeholder="Pekerjaan orang tua/wali"
                            >
                        </div>
                    </div>
                </div>

                <!-- Agreement -->
                <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-6">
                    <div class="flex items-start space-x-3">
                        <input 
                            type="checkbox" 
                            id="agreement" 
                            name="agreement"
                            x-model="form.agreement"
                            required 
                            class="mt-1 w-4 h-4 text-yellow-500 bg-gray-800 border-yellow-500/30 rounded focus:ring-yellow-500 focus:ring-2"
                        >
                        <label for="agreement" class="text-sm text-gray-300">
                            <strong class="text-yellow-400">Pernyataan:</strong> Saya menyatakan bahwa data yang saya isi adalah benar dan dapat dipertanggungjawabkan. Saya bersedia mengikuti seluruh rangkaian seleksi PPDB dan mematuhi peraturan yang berlaku di SMK Karya Pembangunan. *
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-8">
                    <button 
                        type="submit" 
                        :disabled="loading"
                        class="bg-yellow-500 text-black px-12 py-4 rounded-xl font-bold text-lg hover:bg-yellow-400 disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105 transition-all duration-300 shine-effect glow-effect"
                        :class="{ 'opacity-50 cursor-not-allowed': loading }"
                    >
                        <span x-show="!loading">🚀 Daftar Sekarang</span>
                        <span x-show="loading">⏳ Mengirim...</span>
                    </button>
                    <p class="text-gray-400 text-sm mt-4">
                        Setelah mendaftar, Anda akan menerima konfirmasi melalui email dan SMS
                    </p>
                </div>
            </form>
        </div>
        @endif
    </div>
</section>

<script>
function ppdbForm() {
    return {
        loading: false,
        form: {
            full_name: '',
            email: '',
            phone: '',
            birth_date: '',
            birth_place: '',
            gender: '',
            religion: '',
            address: '',
            previous_school: '',
            graduation_year: '',
            average_score: '',
            major_choice: '',
            father_name: '',
            mother_name: '',
            parent_phone: '',
            parent_occupation: '',
            agreement: false
        },
        
        async submitForm() {
            this.loading = true;
            
            try {
                // Simulate form submission
                await new Promise(resolve => setTimeout(resolve, 3000));
                
                // Redirect to success page
                window.location.href = '{{ route("ppdb.success") }}';
                
            } catch (error) {
                alert('❌ Terjadi kesalahan saat mendaftar. Silakan coba lagi atau hubungi kami langsung.');
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