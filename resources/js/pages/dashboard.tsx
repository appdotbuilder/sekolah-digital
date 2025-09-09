import React from 'react';
import { usePage } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';

interface User {
    id: number;
    name: string;
    email: string;
    role: string;
}

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

export default function Dashboard() {
    const { auth } = usePage<{ auth: { user: User } }>().props;

    const stats = [
        { name: 'Total Siswa', value: '1,234', icon: '👨‍🎓', color: 'bg-blue-500' },
        { name: 'Tenaga Pengajar', value: '89', icon: '👨‍🏫', color: 'bg-green-500' },
        { name: 'Berita Aktif', value: '45', icon: '📰', color: 'bg-purple-500' },
        { name: 'Pendaftar PPDB', value: '156', icon: '📝', color: 'bg-yellow-500' },
        { name: 'Saran Masuk', value: '12', icon: '💬', color: 'bg-red-500' },
        { name: 'Ekstrakurikuler', value: '24', icon: '🎯', color: 'bg-indigo-500' },
    ];

    const recentActivities = [
        { type: 'PPDB', message: 'Pendaftaran baru dari Ahmad Rizki', time: '2 menit yang lalu' },
        { type: 'Berita', message: 'Berita "Lomba Matematika" dipublikasi', time: '15 menit yang lalu' },
        { type: 'Saran', message: 'Saran baru dari orang tua siswa', time: '1 jam yang lalu' },
        { type: 'Galeri', message: 'Foto kegiatan pramuka ditambahkan', time: '2 jam yang lalu' },
    ];

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard SMA Negeri 1" />
            <div className="p-6 space-y-8 bg-black min-h-screen">
                <div className="flex items-center justify-between">
                    <div>
                        <h1 className="text-3xl font-bold text-yellow-400">
                            🏫 Dashboard SMA Negeri 1
                        </h1>
                        <p className="mt-2 text-sm text-gray-300">
                            Selamat datang kembali, <span className="font-semibold text-white">{auth.user.name}</span> 
                            <span className="text-yellow-400 ml-1">({auth.user.role})</span>
                        </p>
                    </div>
                    <div className="text-sm text-gray-400 bg-gray-900 px-4 py-2 rounded-lg border border-yellow-500/20">
                        📅 {new Date().toLocaleDateString('id-ID', {
                            weekday: 'long',
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        })}
                    </div>
                </div>

                {/* Stats Grid */}
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {stats.map((stat) => (
                        <div key={stat.name} className="bg-gray-900 overflow-hidden shadow-lg rounded-xl border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-yellow-400/20">
                            <div className="p-6">
                                <div className="flex items-center">
                                    <div className="flex-shrink-0">
                                        <div className={`w-12 h-12 ${stat.color} rounded-lg flex items-center justify-center text-white text-xl shadow-lg`}>
                                            {stat.icon}
                                        </div>
                                    </div>
                                    <div className="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt className="text-sm font-medium text-gray-400 truncate">
                                                {stat.name}
                                            </dt>
                                            <dd className="text-3xl font-bold text-white mt-1">
                                                {stat.value}
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>

                {/* Main Content Grid */}
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    {/* Recent Activity */}
                    <div className="bg-gray-900 shadow-xl rounded-xl border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                        <div className="px-6 py-6">
                            <h3 className="text-xl font-bold text-yellow-400 mb-6">
                                📈 Aktivitas Terbaru
                            </h3>
                            <div className="space-y-4">
                                {recentActivities.map((activity, index) => (
                                    <div key={index} className="flex items-start space-x-4 p-3 rounded-lg bg-black/50 hover:bg-black/70 transition-colors">
                                        <div className="flex-shrink-0">
                                            <span className={`inline-flex items-center px-3 py-1 rounded-full text-xs font-bold ${
                                                activity.type === 'PPDB' ? 'bg-blue-600/20 text-blue-400 border border-blue-500/30' :
                                                activity.type === 'Berita' ? 'bg-green-600/20 text-green-400 border border-green-500/30' :
                                                activity.type === 'Saran' ? 'bg-yellow-600/20 text-yellow-400 border border-yellow-500/30' :
                                                'bg-purple-600/20 text-purple-400 border border-purple-500/30'
                                            }`}>
                                                {activity.type}
                                            </span>
                                        </div>
                                        <div className="flex-1 min-w-0">
                                            <p className="text-sm text-white font-medium">
                                                {activity.message}
                                            </p>
                                            <p className="text-xs text-gray-400 mt-1">
                                                {activity.time}
                                            </p>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>

                    {/* Quick Actions */}
                    <div className="bg-gray-900 shadow-xl rounded-xl border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                        <div className="px-6 py-6">
                            <h3 className="text-xl font-bold text-yellow-400 mb-6">
                                ⚡ Aksi Cepat
                            </h3>
                            <div className="grid grid-cols-2 gap-4">
                                <button className="flex flex-col items-center p-4 bg-blue-600/20 rounded-lg hover:bg-blue-600/30 border border-blue-500/30 hover:border-blue-400/50 transition-all duration-300 group">
                                    <span className="text-2xl mb-2 group-hover:scale-110 transition-transform">📝</span>
                                    <span className="text-sm font-medium text-blue-400 group-hover:text-blue-300">Kelola PPDB</span>
                                </button>
                                <button className="flex flex-col items-center p-4 bg-green-600/20 rounded-lg hover:bg-green-600/30 border border-green-500/30 hover:border-green-400/50 transition-all duration-300 group">
                                    <span className="text-2xl mb-2 group-hover:scale-110 transition-transform">📰</span>
                                    <span className="text-sm font-medium text-green-400 group-hover:text-green-300">Posting Berita</span>
                                </button>
                                <button className="flex flex-col items-center p-4 bg-purple-600/20 rounded-lg hover:bg-purple-600/30 border border-purple-500/30 hover:border-purple-400/50 transition-all duration-300 group">
                                    <span className="text-2xl mb-2 group-hover:scale-110 transition-transform">💬</span>
                                    <span className="text-sm font-medium text-purple-400 group-hover:text-purple-300">Lihat Saran</span>
                                </button>
                                <button className="flex flex-col items-center p-4 bg-yellow-600/20 rounded-lg hover:bg-yellow-600/30 border border-yellow-500/30 hover:border-yellow-400/50 transition-all duration-300 group">
                                    <span className="text-2xl mb-2 group-hover:scale-110 transition-transform">📸</span>
                                    <span className="text-sm font-medium text-yellow-400 group-hover:text-yellow-300">Upload Galeri</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Website Status */}
                <div className="bg-gray-900 shadow-xl rounded-xl border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                    <div className="px-6 py-6">
                        <h3 className="text-xl font-bold text-yellow-400 mb-6">
                            🌐 Status Website
                        </h3>
                        <div className="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div className="text-center p-4 bg-green-600/20 rounded-lg border border-green-500/30">
                                <div className="text-3xl text-green-400 mb-2">✅</div>
                                <div className="text-sm text-green-300 font-medium">Website Online</div>
                            </div>
                            <div className="text-center p-4 bg-blue-600/20 rounded-lg border border-blue-500/30">
                                <div className="text-3xl text-blue-400 mb-2">👥</div>
                                <div className="text-sm text-blue-300 font-medium">245 Pengunjung Hari Ini</div>
                            </div>
                            <div className="text-center p-4 bg-purple-600/20 rounded-lg border border-purple-500/30">
                                <div className="text-3xl text-purple-400 mb-2">📱</div>
                                <div className="text-sm text-purple-300 font-medium">Mobile Responsive</div>
                            </div>
                            <div className="text-center p-4 bg-yellow-600/20 rounded-lg border border-yellow-500/30">
                                <div className="text-3xl text-yellow-400 mb-2">⚡</div>
                                <div className="text-sm text-yellow-300 font-medium">Loading: 1.2s</div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Footer Info */}
                <div className="text-center bg-gray-900/50 rounded-lg p-6 border border-yellow-500/10">
                    <p className="text-gray-300">Dashboard SMA Negeri 1 - Sistem Informasi Sekolah Terintegrasi</p>
                    <p className="mt-2 text-yellow-400 text-sm">Terakhir diperbarui: {new Date().toLocaleString('id-ID')}</p>
                </div>
            </div>
        </AppLayout>
    );
}