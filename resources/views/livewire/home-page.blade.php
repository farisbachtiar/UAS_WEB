<div class="bg-gradient-to-br from-amber-50 to-yellow-100 min-h-screen">
    {{-- Hero Section - Horizontal Layout --}}
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="relative">
                        <img src="https://th.bing.com/th/id/OIP.NVZzyq6Wn4iwVXMJdx885QAAAA?w=148&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" 
                             alt="Telor Asin Hikmah" 
                             class="rounded-2xl shadow-2xl w-full h-96 object-cover">
                        <div class="absolute -bottom-6 -right-6 bg-amber-500 text-white p-4 rounded-full shadow-lg">
                            <span class="text-sm font-semibold">100% Halal</span>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="inline-block bg-amber-100 text-amber-800 px-4 py-2 rounded-full text-sm font-medium mb-4">
                        Produk Lokal Terbaik
                    </span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                        Telor Asin <br>
                        <span class="text-amber-600">Hikmah</span>
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Nikmati kelezatan telor asin autentik dengan kuning yang berminyak dan putih telur yang gurih. 
                        Diproduksi dengan standar kualitas tinggi untuk kepuasan keluarga Indonesia.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm">✓ Tanpa Pengawet</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm">✓ Segar Setiap Hari</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm">✓ Kualitas Premium</span>
                    </div>
                    <button class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Products Section - Card Style --}}
    <section id="produk" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Pilihan Telor Asin Terbaik</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berbagai varian telor asin berkualitas tinggi untuk memenuhi kebutuhan kuliner Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Card 1 --}}
                <div class="group bg-gradient-to-br from-amber-50 to-orange-100 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 border-2 border-amber-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold">TERLARIS</span>
                        <span class="text-2xl">🥚</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Telor Asin Klasik</h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Telor asin tradisional dengan proses pengasinan sempurna. Kuning berminyak dan putih telur yang pas tingkat keasinannya.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-sm text-gray-500 ml-2">(4.9)</span>
                        </div>
                        <button class="text-amber-600 hover:text-amber-700 font-medium text-sm">Detail →</button>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="group bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 border-2 border-blue-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold">PREMIUM</span>
                        <span class="text-2xl">🥚</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Telor Asin Jumbo</h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Ukuran extra large dengan kualitas superior. Cocok untuk keluarga besar atau acara spesial dengan cita rasa yang memuaskan.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-sm text-gray-500 ml-2">(4.8)</span>
                        </div>
                        <button class="text-blue-600 hover:text-blue-700 font-medium text-sm">Detail →</button>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="group bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 border-2 border-green-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold">EKONOMIS</span>
                        <span class="text-2xl">🥚</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Paket Hemat</h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Kemasan ekonomis untuk konsumsi rutin keluarga. Kualitas tetap terjaga dengan harga yang lebih terjangkau.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★☆</span>
                            <span class="text-sm text-gray-500 ml-2">(4.6)</span>
                        </div>
                        <button class="text-green-600 hover:text-green-700 font-medium text-sm">Detail →</button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ url('/products') }}" class="bg-gray-900 hover:bg-gray-800 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    Lihat Semua Produk
                </a>
            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="py-20 bg-gradient-to-r from-amber-100 to-yellow-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h3>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-3xl">🏆</span>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Kualitas Terjamin</h4>
                    <p class="text-gray-600">Diproduksi dengan standar kualitas tinggi dan proses yang higienis</p>
                </div>
                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-3xl">⚡</span>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Produksi Segar</h4>
                    <p class="text-gray-600">Telor asin fresh setiap hari langsung dari proses pengasinan</p>
                </div>
                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-3xl">💰</span>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Harga Terjangkau</h4>
                    <p class="text-gray-600">Kualitas premium dengan harga yang bersahabat untuk semua kalangan</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="kontak" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Hubungi Kami</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-amber-100 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Alamat Toko</h4>
                                <p class="text-gray-600">Jl.sunan gunug jati 03<br>limbangan wetan<br>Kabupaten Brebes, Jawa Tengah</p>
                            </div>
                            <div class="w-full">
                            <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31689.304428131236!2d109.01944037431645!3d-6.871057300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb09d558b20c1%3A0x3281e6f4be3fbc79!2sTELOR%20ASIN%20HIKMAH!5e0!3m2!1sid!2sid!4v1752619032543!5m2!1sid!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-green-100 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Telepon</h4>
                                <p class="text-gray-600">+62 851-4131-9940</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Sabtu: 07:00 - 18:00<br>Minggu: 08:00 - 16:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-8">
                    <h4 class="text-xl font-semibold text-gray-900 mb-6">Kirim Pesan</h4>
                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                        </div>
                        <div>
                            <input type="tel" placeholder="Nomor WhatsApp" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                        </div>
                        <div>
                            <textarea placeholder="Pesan Anda" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-amber-600 hover:bg-amber-700 text-white py-3 rounded-lg font-semibold transition-colors">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>