@extends('layouts.app')

@section('title', 'Pengaturan PPDB')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">⚙️ Pengaturan PPDB</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-2">
                Kelola pengaturan Pendaftaran Peserta Didik Baru
            </p>
        </div>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="bg-green-100 dark:bg-green-800 border border-green-400 dark:border-green-600 text-green-700 dark:text-green-200 px-4 py-3 rounded mb-6">
                <div class="flex items-center">
                    <span class="text-xl mr-2">✅</span>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 dark:bg-red-800 border border-red-400 dark:border-red-600 text-red-700 dark:text-red-200 px-4 py-3 rounded mb-6">
                <div class="flex items-center">
                    <span class="text-xl mr-2">❌</span>
                    {{ session('error') }}
                </div>
            </div>
        @endif

        <!-- Settings Card -->
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                    📋 Status Pendaftaran PPDB
                </h2>
            </div>
            
            <div class="p-6">
                <form action="{{ route('admin.settings.update') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    
                    <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div class="flex-1">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Status Pendaftaran
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                                @if(isset($settings['ppdb_status']) && $settings['ppdb_status']->value === 'true')
                                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-200 rounded-full">
                                        🟢 DIBUKA - Peserta dapat mendaftar
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-red-100 dark:bg-red-800 text-red-800 dark:text-red-200 rounded-full">
                                        🔴 DITUTUP - Pendaftaran tidak tersedia
                                    </span>
                                @endif
                            </p>
                        </div>
                        
                        <div class="ml-4">
                            <div class="flex items-center space-x-4">
                                <!-- Toggle Switch -->
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="hidden" name="ppdb_status" value="false">
                                    <input 
                                        type="checkbox" 
                                        name="ppdb_status" 
                                        value="true"
                                        class="sr-only peer"
                                        {{ isset($settings['ppdb_status']) && $settings['ppdb_status']->value === 'true' ? 'checked' : '' }}
                                        onchange="this.form.submit()"
                                    >
                                    <div class="w-14 h-7 bg-gray-200 dark:bg-gray-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-green-500"></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        {{ isset($settings['ppdb_status']) && $settings['ppdb_status']->value === 'true' ? 'Buka' : 'Tutup' }}
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
                
                <!-- Info Box -->
                <div class="mt-6 p-4 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg">
                    <div class="flex items-start">
                        <span class="text-blue-500 text-xl mr-3">💡</span>
                        <div>
                            <h4 class="text-sm font-medium text-blue-900 dark:text-blue-100">Informasi</h4>
                            <div class="text-sm text-blue-700 dark:text-blue-300 mt-1">
                                <ul class="list-disc list-inside space-y-1">
                                    <li>Ketika status <strong>DIBUKA</strong>, calon peserta didik dapat mengakses dan mengisi formulir pendaftaran</li>
                                    <li>Ketika status <strong>DITUTUP</strong>, halaman pendaftaran akan menampilkan pesan bahwa pendaftaran sedang ditutup</li>
                                    <li>Perubahan status akan berlaku secara langsung</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Card -->
        <div class="mt-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                    📊 Statistik Pendaftaran
                </h2>
            </div>
            
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">
                            {{ \App\Models\Ppdb::count() }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            Total Pendaftar
                        </div>
                    </div>
                    
                    <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div class="text-2xl font-bold text-green-600 dark:text-green-400">
                            {{ \App\Models\Ppdb::whereDate('created_at', today())->count() }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            Pendaftar Hari Ini
                        </div>
                    </div>
                    
                    <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">
                            {{ \App\Models\Ppdb::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count() }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            Pendaftar Minggu Ini
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection