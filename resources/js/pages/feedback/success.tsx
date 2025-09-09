import React from 'react';
import { Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

export default function FeedbackSuccess() {
    return (
        <div className="min-h-screen bg-black text-white flex items-center justify-center">
            <div className="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                {/* Success Animation */}
                <div className="mb-8 animate-bounce">
                    <div className="w-32 h-32 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span className="text-6xl text-white">✅</span>
                    </div>
                </div>

                <h1 className="text-4xl md:text-5xl font-bold text-yellow-400 mb-6">
                    🎉 Saran Berhasil Dikirim!
                </h1>
                
                <div className="bg-gray-900 rounded-xl p-8 border border-green-400/50 mb-8">
                    <p className="text-xl text-gray-300 mb-6">
                        Terima kasih atas saran yang telah Anda berikan! Masukan Anda sangat berharga untuk kemajuan SMA Negeri 1.
                    </p>
                    
                    <div className="bg-green-900/50 border border-green-400/50 rounded-lg p-6 mb-6">
                        <h3 className="text-green-400 font-semibold text-lg mb-4">📋 Selanjutnya:</h3>
                        <ul className="text-green-100 space-y-2 text-left">
                            <li className="flex items-start">
                                <span className="text-green-400 mr-2">1.</span>
                                Tim kami akan meninjau saran Anda dalam 1-2 hari kerja
                            </li>
                            <li className="flex items-start">
                                <span className="text-green-400 mr-2">2.</span>
                                Saran akan diteruskan ke pihak yang berwenang
                            </li>
                            <li className="flex items-start">
                                <span className="text-green-400 mr-2">3.</span>
                                Kami akan merespons jika diperlukan tindak lanjut
                            </li>
                            <li className="flex items-start">
                                <span className="text-green-400 mr-2">4.</span>
                                Perbaikan akan diimplementasikan sesuai prioritas
                            </li>
                        </ul>
                    </div>

                    <div className="bg-blue-900/50 border border-blue-400/50 rounded-lg p-6">
                        <h3 className="text-blue-400 font-semibold text-lg mb-4">📞 Ada Pertanyaan?</h3>
                        <div className="text-blue-100 space-y-2">
                            <p>📱 WhatsApp: 0812-3456-7890</p>
                            <p>📧 Email: info@sman1.sch.id</p>
                            <p>📍 Alamat: Jl. Pendidikan No. 123, Jakarta</p>
                        </div>
                    </div>
                </div>

                <div className="flex flex-col sm:flex-row gap-4 justify-center">
                    <Link href="/">
                        <Button className="bg-yellow-400 text-black hover:bg-yellow-300 px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                            🏠 Kembali ke Beranda
                        </Button>
                    </Link>
                    <Link href="/feedback">
                        <Button variant="outline" className="border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                            💬 Kirim Saran Lagi
                        </Button>
                    </Link>
                </div>

                <div className="mt-12 text-gray-400">
                    <p>Terima kasih telah berkontribusi untuk kemajuan sekolah</p>
                    <p className="text-sm mt-2">ID Saran: FB-{new Date().getFullYear()}-{Math.random().toString(36).substr(2, 9).toUpperCase()}</p>
                </div>
            </div>
        </div>
    );
}