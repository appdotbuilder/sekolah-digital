@extends('layouts.app')

@section('title', 'Tentang Kami - SMK Karya Pembangunan')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center fade-in">
            <h1 class="text-5xl font-bold text-gradient mb-6">ℹ️ Tentang Kami</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                SMK Karya Pembangunan adalah sekolah menengah kejuruan yang berkomitmen untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap menghadapi tantangan dunia kerja modern.
            </p>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Vision -->
            <div class="card-elegant rounded-2xl p-8 slide-up">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 4.5C7 4.5 2.73 7.61 1 12C2.73 16.39 7 19.5 12 19.5S21.27 16.39 23 12C21.27 7.61 17 4.5 12 4.5ZM12 17C9.24 17 7 14.76 7 12S9.24 7 12 7S17 9.24 17 12S14.76 17 12 17ZM12 9C10.34 9 9 10.34 9 12S10.34 15 12 15S15 13.66 15 12S13.66 9 12 9Z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gradient">🎯 Visi</h2>
                </div>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Menjadi sekolah menengah kejuruan yang unggul dalam menghasilkan lulusan yang kompeten, berkarakter mulia, dan mampu bersaing di era global dengan dukungan teknologi terdepan dan nilai-nilai Pancasila.
                </p>
            </div>

            <!-- Mission -->
            <div class="card-elegant rounded-2xl p-8 slide-up" style="animation-delay: 0.2s;">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12L11 14L15 10M21 12C21 16.97 16.97 21 12 21C7.03 21 3 16.97 3 12C3 7.03 7.03 3 12 3C16.97 3 21 7.03 21 12Z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gradient">🚀 Misi</h2>
                </div>
                <ul class="text-gray-300 text-lg space-y-3">
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Menyelenggarakan pendidikan kejuruan yang berkualitas dengan kurikulum yang relevan dengan kebutuhan industri
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Mengembangkan karakter siswa yang berakhlak mulia dan berjiwa entrepreneur
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Membekali siswa dengan keterampilan teknologi terkini dan kemampuan adaptasi
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Membangun kemitraan strategis dengan dunia usaha dan industri
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- History -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">📜 Sejarah Sekolah</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Perjalanan panjang SMK Karya Pembangunan dalam mencerdaskan bangsa
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="card-elegant rounded-2xl p-8 slide-up">
                <div class="prose prose-lg text-gray-300 max-w-none">
                    <p class="text-lg leading-relaxed mb-6">
                        SMK Karya Pembangunan didirikan pada tahun 1995 dengan visi menjadi lembaga pendidikan kejuruan yang mampu menghasilkan tenaga kerja terampil dan siap pakai. Berawal dari sebuah gedung sederhana dengan 50 siswa, sekolah ini kini telah berkembang menjadi salah satu SMK terdepan di daerah.
                    </p>
                    
                    <p class="text-lg leading-relaxed mb-6">
                        Sepanjang perjalanannya, SMK Karya Pembangunan telah meluluskan lebih dari 5.000 siswa yang kini tersebar di berbagai sektor industri, baik di dalam maupun luar negeri. Banyak alumni yang berhasil mendirikan usaha sendiri dan memberikan kontribusi positif bagi masyarakat.
                    </p>
                    
                    <p class="text-lg leading-relaxed">
                        Komitmen terhadap kualitas pendidikan tercermin dari berbagai prestasi yang diraih, baik di tingkat regional maupun nasional. Sekolah terus berinovasi dalam metode pembelajaran dan pembaruan fasilitas untuk memastikan siswa mendapatkan pendidikan terbaik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">💎 Nilai-Nilai Sekolah</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Prinsip dan nilai yang menjadi fondasi dalam setiap kegiatan pendidikan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1 -->
            <div class="text-center slide-up">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-10 h-10 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-2">⭐ Integritas</h3>
                <p class="text-gray-300 text-sm">Kejujuran dan konsistensi dalam setiap tindakan</p>
            </div>

            <!-- Value 2 -->
            <div class="text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12S17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12S7.59 4 12 4S20 7.59 20 12S16.41 20 12 20ZM15.88 8.29L10 14.17L8.12 12.29C7.73 11.9 7.1 11.9 6.71 12.29C6.32 12.68 6.32 13.31 6.71 13.7L9.3 16.29C9.69 16.68 10.32 16.68 10.71 16.29L17.3 9.7C17.69 9.31 17.69 8.68 17.3 8.29C16.91 7.9 16.28 7.9 15.88 8.29Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-2">✅ Komitmen</h3>
                <p class="text-gray-300 text-sm">Dedikasi penuh terhadap pendidikan berkualitas</p>
            </div>

            <!-- Value 3 -->
            <div class="text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 14H11V9H13M13 18H11V16H13M1 21H23L12 2L1 21Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-2">🔥 Inovasi</h3>
                <p class="text-gray-300 text-sm">Terus berinovasi dalam metode pembelajaran</p>
            </div>

            <!-- Value 4 -->
            <div class="text-center slide-up" style="animation-delay: 0.6s;">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4 glow-effect">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-2">🤝 Kolaborasi</h3>
                <p class="text-gray-300 text-sm">Kerjasama yang harmonis dengan semua pihak</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">👥 Pimpinan Sekolah</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Tim kepemimpinan yang berpengalaman dan berdedikasi tinggi
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Principal -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up">
                <div class="w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-2">Drs. Ahmad Sutanto, M.Pd</h3>
                <p class="text-gray-400 text-sm mb-3">Kepala Sekolah</p>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Memimpin SMK Karya Pembangunan sejak 2010 dengan fokus pada peningkatan kualitas pendidikan dan kemitraan industri.
                </p>
            </div>

            <!-- Vice Principal Academic -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9L12 15L21 9V16H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-2">Dr. Siti Nurhaliza, S.Pd</h3>
                <p class="text-gray-400 text-sm mb-3">Wakil Kepala Bidang Kurikulum</p>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Bertanggung jawab atas pengembangan kurikulum yang selaras dengan kebutuhan industri modern.
                </p>
            </div>

            <!-- Vice Principal Student Affairs -->
            <div class="card-elegant rounded-2xl p-8 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-24 h-24 bg-gradient-to-br from-red-500 to-red-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4C18.2 4 20 5.8 20 8C20 10.2 18.2 12 16 12C13.8 12 12 10.2 12 8C12 5.8 13.8 4 16 4ZM16 14C18.39 14 22 15.21 22 17.5V20H10V17.5C10 15.21 13.61 14 16 14ZM8 12C10.21 12 12 10.21 12 8C12 5.79 10.21 4 8 4C5.79 4 4 5.79 4 8C4 10.21 5.79 12 8 12ZM8 14C5.33 14 0 15.34 0 18V20H8V17.5C8 16.5 8.7 15.6 9.6 15.1C9.1 14.8 8.6 14.6 8 14.6V14Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-400 mb-2">Ir. Budi Santoso, M.T</h3>
                <p class="text-gray-400 text-sm mb-3">Wakil Kepala Bidang Kesiswaan</p>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Mengelola pengembangan karakter dan prestasi siswa melalui berbagai kegiatan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Achievements -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gradient mb-4">🏆 Prestasi Sekolah</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Berbagai pencapaian yang membanggakan di tingkat regional dan nasional
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Achievement 1 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 16L3 5H1V3H4L6 14L7 18H19V16H5ZM7 22C5.9 22 5 21.1 5 20S5.9 18 7 18S9 18.9 9 20S8.1 22 7 22ZM17 22C15.9 22 15 21.1 15 20S15.9 18 17 18S19 18.9 19 20S18.1 22 17 22Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">Akreditasi A</h3>
                <p class="text-gray-300 text-sm">Terakreditasi A dari BAN-SM sejak 2018</p>
            </div>

            <!-- Achievement 2 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 6L18.29 8.29L13.41 13.17L9.41 9.17L2 16.59L3.41 18L9.41 12L13.41 16L20.29 9.12L22 10.83V6H16Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">Top 10 SMK</h3>
                <p class="text-gray-300 text-sm">Masuk 10 besar SMK terbaik se-Provinsi</p>
            </div>

            <!-- Achievement 3 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">Juara LKS</h3>
                <p class="text-gray-300 text-sm">Juara berbagai kompetisi keterampilan siswa</p>
            </div>

            <!-- Achievement 4 -->
            <div class="card-elegant rounded-2xl p-6 text-center slide-up" style="animation-delay: 0.6s;">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM9 17H7V10H9V17ZM13 17H11V7H13V17ZM17 17H15V13H17V17Z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-yellow-400 mb-2">95% Lulusan Kerja</h3>
                <p class="text-gray-300 text-sm">Tingkat penyerapan lulusan di dunia kerja</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-4xl font-bold text-black mb-4">🚀 Bergabunglah dengan Kami!</h2>
            <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
                Jadilah bagian dari keluarga besar SMK Karya Pembangunan dan wujudkan impian masa depan cerahmu
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('ppdb.create') }}" class="bg-black text-yellow-400 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 shine-effect">
                    📝 Daftar Sekarang
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-black text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-yellow-400 transition-all duration-300">
                    💬 Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

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
</script>
@endsection