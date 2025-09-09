@extends('layouts.app')

@section('title', 'Pendaftaran PPDB Ditutup')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <!-- Main Card -->
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden">
                <div class="px-8 py-12 text-center">
                    <!-- Icon -->
                    <div class="text-8xl mb-6">
                        🚫
                    </div>
                    
                    <!-- Title -->
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                        Pendaftaran PPDB Sedang Ditutup
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                        Maaf, pendaftaran Peserta Didik Baru (PPDB) untuk tahun ajaran ini sedang tidak tersedia. 
                        Silakan hubungi sekolah atau pantau website ini secara berkala untuk informasi pembukaan pendaftaran selanjutnya.
                    </p>
                    
                    <!-- Contact Info -->
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6 mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                            📞 Informasi Kontak
                        </h3>
                        <div class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center justify-center space-x-2">
                                <span>📧</span>
                                <span>info@sekolah.local</span>
                            </div>
                            <div class="flex items-center justify-center space-x-2">
                                <span>📱</span>
                                <span>(021) 1234-5678</span>
                            </div>
                            <div class="flex items-center justify-center space-x-2">
                                <span>🏫</span>
                                <span>Senin - Jumat, 08:00 - 16:00 WIB</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
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
            </div>
            
            <!-- Additional Info -->
            <div class="mt-8 text-center">
                <div class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4">
                    <div class="flex items-center justify-center space-x-2 text-yellow-800 dark:text-yellow-200">
                        <span class="text-xl">⏰</span>
                        <p class="text-sm">
                            <strong>Tips:</strong> Bookmark halaman ini dan kunjungi secara berkala untuk mendapatkan informasi terbaru tentang pembukaan pendaftaran PPDB.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection