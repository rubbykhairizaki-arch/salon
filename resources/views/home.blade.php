@extends('layouts.app')

@section('content')

<!-- NOTIFIKASI BERHASIL -->
@if(session('success'))
<div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0" class="fixed bottom-8 left-8 z-[70] bg-salon-card text-white p-6 shadow-2xl border border-salon-gold/40 flex items-center justify-between gap-6 max-w-md backdrop-blur-xl">
    <div class="flex items-start gap-4">
        <span class="text-salon-gold text-2xl">✦</span>
        <div>
            <h4 class="font-serif text-salon-gold text-base mb-1">Reservasi Terkirim</h4>
            <p class="text-xs text-gray-300 leading-relaxed font-light">{{ session('success') }}</p>
        </div>
    </div>
    <button @click="show = false" class="text-gray-400 hover:text-white text-xl">&times;</button>
</div>
@endif

<!-- 1. HERO SECTION SINEMATIK -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
    <!-- Visual Ambient Glow Orbs -->
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-salon-gold/10 rounded-full filter blur-[120px] animate-pulse-slow pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-amber-600/10 rounded-full filter blur-[100px] animate-pulse-slow pointer-events-none" style="animation-delay: 2s;"></div>

    <!-- Background Media -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=1920&q=80" alt="Salon Luxury" class="w-full h-full object-cover opacity-30 scale-105 animate-pulse-slow">
        <div class="absolute inset-0 bg-gradient-to-t from-salon-dark via-salon-dark/70 to-salon-dark/90"></div>
    </div>
    
    <div class="relative z-10 text-center px-6 max-w-5xl mx-auto py-20" data-aos="fade-up" data-aos-duration="1200">
        <!-- Floating Mini Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-salon-gold/30 bg-salon-gold/5 backdrop-blur-md mb-8 animate-float">
            <span class="w-2 h-2 rounded-full bg-salon-gold animate-ping"></span>
            <span class="text-[11px] uppercase tracking-[0.3em] text-salon-gold font-medium">HAUT COIFFURE & SPA</span>
        </div>

        <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-serif text-white leading-tight mb-8 font-normal tracking-wide">
            Seni Merawat <br> 
            <span class="italic font-light gold-shimmer-text">Kecantikan Anda</span>
        </h1>
        
        <p class="text-gray-300 text-sm sm:text-base md:text-lg mb-12 font-light max-w-2xl mx-auto leading-relaxed tracking-wide">
            Transformasi estetika berkelas tinggi dalam suasana privat yang tenang. Nikmati sentuhan magis ahli kecantikan terbaik kami.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <button @click="openBooking = true; selectedService = 'Layanan Utama'" class="w-full sm:w-auto relative group overflow-hidden px-10 py-4 bg-salon-gold text-black text-xs uppercase tracking-[0.25em] font-semibold transition-all duration-500 shadow-[0_0_30px_rgba(212,175,55,0.3)] hover:shadow-[0_0_50px_rgba(212,175,55,0.6)]">
                <span class="relative z-10">Jadwalkan Perawatan</span>
            </button>
            <a href="#services" class="w-full sm:w-auto px-10 py-4 border border-gray-700 hover:border-salon-gold text-gray-300 hover:text-white text-xs uppercase tracking-[0.25em] transition-all duration-300 backdrop-blur-sm">
                Jelajahi Menu
            </a>
        </div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 opacity-60 hover:opacity-100 transition-opacity">
        <span class="text-[10px] uppercase tracking-[0.3em] text-salon-gold">Scroll</span>
        <div class="w-5 h-9 border border-salon-gold/50 rounded-full flex justify-center p-1">
            <div class="w-1 h-2 bg-salon-gold rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<!-- MARQUEE TEXT BERJALAN -->
<div class="bg-salon-gold text-black py-4 border-y border-amber-300/30 overflow-hidden">
    <div class="marquee-container">
        <div class="marquee-content text-xs uppercase tracking-[0.35em] font-semibold">
            <span class="mx-10">✦ LUXURY HAIR STYLING</span>
            <span class="mx-10">✦ GLOW HYDRA-FACIAL</span>
            <span class="mx-10">✦ HIGH-END NAIL ART</span>
            <span class="mx-10">✦ AROMATHERAPY SPA</span>
            <span class="mx-10">✦ LUXURY HAIR STYLING</span>
            <span class="mx-10">✦ GLOW HYDRA-FACIAL</span>
            <span class="mx-10">✦ HIGH-END NAIL ART</span>
            <span class="mx-10">✦ AROMATHERAPY SPA</span>
        </div>
    </div>
</div>

<!-- 2. ABOUT SECTION (BERI SCROLL-MT & PADDING BESAR) -->
<section id="about" class="scroll-mt-20 py-36 bg-salon-dark relative overflow-hidden min-h-[90vh] flex items-center">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Gambar Lengkung Arch -->
            <div class="lg:col-span-5 relative" data-aos="fade-right">
                <div class="absolute -inset-4 border border-salon-gold/30 arch-image translate-x-4 translate-y-4"></div>
                <div class="relative z-10 overflow-hidden arch-image shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1522337660859-02fbefca4702?auto=format&fit=crop&w=800&q=80" alt="Lumiere Atmosphere" class="w-full h-[580px] object-cover hover:scale-105 transition duration-1000">
                </div>
                <!-- Experience Badge Floating -->
                <div class="absolute -bottom-8 -right-4 z-20 glass-panel p-6 shadow-2xl border border-salon-gold/30 rounded-none hidden sm:block animate-float">
                    <p class="font-serif text-3xl text-salon-gold font-bold">100%</p>
                    <p class="text-[10px] uppercase tracking-widest text-gray-300">Kepuasan Klien</p>
                </div>
            </div>

            <!-- Teks Penjelasan -->
            <div class="lg:col-span-7" data-aos="fade-left">
                <span class="text-salon-gold text-xs uppercase tracking-[0.4em] block mb-3 font-medium">Filosofi Lumière</span>
                <h2 class="text-4xl sm:text-5xl font-serif text-white mb-8 leading-tight">
                    Harmoni Antara <span class="italic text-salon-gold font-light">Kemewahan</span> & <span class="italic font-light">Seni Relaksasi</span>
                </h2>
                <p class="text-gray-400 text-sm sm:text-base font-light leading-relaxed mb-10">
                    Di Lumière, kami memahami bahwa perawatan diri bukan sekadar rutinitas, melainkan sebuah ritual apresiasi diri. Setiap helai rambut, sentuhan kulit, dan momen relaksasi dirancang secara kustom sesuai karakter unik Anda.
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-8 border-t border-gray-800 pt-8">
                    <div>
                        <p class="text-3xl font-serif text-salon-gold mb-1">5+</p>
                        <p class="text-[11px] uppercase tracking-widest text-gray-500">Tahun Pengalaman</p>
                    </div>
                    <div>
                        <p class="text-3xl font-serif text-salon-gold mb-1">12k+</p>
                        <p class="text-[11px] uppercase tracking-widest text-gray-500">Klien Puas</p>
                    </div>
                    <div>
                        <p class="text-3xl font-serif text-salon-gold mb-1">15+</p>
                        <p class="text-[11px] uppercase tracking-widest text-gray-500">Stylist Master</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. SERVICES SECTION (SCROLL-MT-20 + KONTEN PRESISI 3 KOLOM) -->
<section id="services" class="scroll-mt-20 py-36 bg-black relative min-h-screen">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="text-salon-gold text-xs uppercase tracking-[0.4em] block mb-3 font-medium">Eksklusivitas Layanan</span>
            <h2 class="text-4xl sm:text-5xl font-serif text-white mb-4">Menu Perawatan Utama</h2>
            <p class="text-gray-400 text-xs sm:text-sm font-light max-w-xl mx-auto">Pilih perawatan premium yang disesuaikan dengan kebutuhan estetika Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($services as $index => $service)
            <div class="group glass-panel border border-gray-800 hover:border-salon-gold/60 transition-all duration-500 flex flex-col justify-between overflow-hidden relative" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                <!-- Glow Line Hover Effect -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-salon-gold to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div>
                    <!-- Container Gambar Lengkung Arch -->
                    <div class="relative overflow-hidden h-[360px] p-4">
                        <div class="w-full h-full arch-image overflow-hidden relative">
                            <img src="{{ $service->image_url }}" alt="{{ $service->name }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-salon-dark via-transparent to-transparent opacity-60"></div>
                            <span class="absolute top-4 right-4 bg-black/70 backdrop-blur-md text-salon-gold text-[10px] uppercase tracking-widest px-3 py-1.5 border border-salon-gold/30">
                                {{ $service->category ?? 'Luxury' }}
                            </span>
                        </div>
                    </div>

                    <!-- Konten Teks -->
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-serif text-white mb-3 group-hover:text-salon-gold transition-colors duration-300">{{ $service->name }}</h3>
                        <p class="text-xs text-gray-400 font-light leading-relaxed mb-6 h-12 overflow-hidden line-clamp-2">
                            {{ $service->description }}
                        </p>
                    </div>
                </div>

                <!-- Footer Kartu & Tombol -->
                <div class="p-6 pt-0 text-center border-t border-gray-900/80">
                    <p class="text-salon-gold font-serif text-xl mb-4">Rp {{ number_format($service->price, 0, ',', '.') }}</p>
                    <button @click="openBooking = true; selectedService = '{{ $service->name }}'" class="w-full py-3.5 bg-salon-dark group-hover:bg-salon-gold text-salon-gold group-hover:text-black border border-salon-gold/40 group-hover:border-salon-gold text-xs uppercase tracking-[0.2em] font-medium transition-all duration-500">
                        Pesan Layanan
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 4. REVIEWS / ULASAN SECTION (DIPERLUAS MENJADI LOUNGE REVIEWS LENGKAP) -->
<section id="reviews" class="scroll-mt-20 py-36 bg-salon-dark relative overflow-hidden min-h-screen flex items-center">
    <!-- Visual Ambient Glow Background -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-salon-gold/5 rounded-full filter blur-[150px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10" data-aos="fade-up">
        
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="text-salon-gold text-xs uppercase tracking-[0.4em] block mb-3 font-medium">Reputasi & Kepercayaan</span>
            <h2 class="text-4xl sm:text-5xl font-serif text-white mb-4">Pengalaman Pengunjung</h2>
            <p class="text-gray-400 text-xs sm:text-sm font-light max-w-lg mx-auto">Kepuasan dan kenyamanan Anda adalah prioritas utama dari setiap perawatan kami.</p>
        </div>

        <!-- Summary Rating Banner -->
        <div class="glass-panel p-8 mb-16 border border-salon-gold/20 flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
            <div class="flex items-center gap-6">
                <span class="text-5xl font-serif text-salon-gold font-bold">4.9</span>
                <div>
                    <div class="text-salon-gold text-lg tracking-widest mb-1">★★★★★</div>
                    <p class="text-xs text-gray-400 uppercase tracking-wider">Berdasarkan 500+ Ulasan Terverifikasi</p>
                </div>
            </div>
            <div class="h-8 w-[1px] bg-gray-800 hidden md:block"></div>
            <div class="flex gap-8 text-center">
                <div>
                    <p class="text-xl font-serif text-white font-semibold">98%</p>
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest">Kunjungan Ulang</p>
                </div>
                <div>
                    <p class="text-xl font-serif text-white font-semibold">100%</p>
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest">Produk Original</p>
                </div>
            </div>
        </div>

        <!-- Testimonial Grid (3 Kolom Ulasan Nyata) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Review Card 1 -->
            <div class="glass-panel p-8 border border-gray-800 relative flex flex-col justify-between hover:border-salon-gold/40 transition duration-500">
                <span class="text-salon-gold text-4xl font-serif absolute top-6 right-6 opacity-30">“</span>
                <div>
                    <div class="text-salon-gold text-xs tracking-widest mb-4">★★★★★</div>
                    <p class="text-gray-300 text-sm font-light leading-relaxed mb-8 italic">
                        "Atmosfer yang sangat tenang dan mewah. Hasil Balayage rambut saya sangat halus dan tidak merusak tekstur asli. Pelayanan terbaik di kota!"
                    </p>
                </div>
                <div class="flex items-center gap-4 border-t border-gray-900 pt-4">
                    <div class="w-10 h-10 rounded-full bg-salon-gold/20 border border-salon-gold/40 flex items-center justify-center text-salon-gold font-serif font-bold text-sm">AS</div>
                    <div>
                        <h4 class="text-white font-medium text-xs tracking-wider">Aria S.</h4>
                        <span class="text-[10px] text-gray-500 uppercase tracking-widest">Klien Balayage Hair</span>
                    </div>
                </div>
            </div>

            <!-- Review Card 2 -->
            <div class="glass-panel p-8 border border-gray-800 relative flex flex-col justify-between hover:border-salon-gold/40 transition duration-500">
                <span class="text-salon-gold text-4xl font-serif absolute top-6 right-6 opacity-30">“</span>
                <div>
                    <div class="text-salon-gold text-xs tracking-widest mb-4">★★★★★</div>
                    <p class="text-gray-300 text-sm font-light leading-relaxed mb-8 italic">
                        "Facial Hydra-Glow nya luar biasa! Wajah langsung kelihatan segar dan bersinar alami tanpa rasa sakit atau iritasi. Tempatnya bersih sekali."
                    </p>
                </div>
                <div class="flex items-center gap-4 border-t border-gray-900 pt-4">
                    <div class="w-10 h-10 rounded-full bg-salon-gold/20 border border-salon-gold/40 flex items-center justify-center text-salon-gold font-serif font-bold text-sm">CD</div>
                    <div>
                        <h4 class="text-white font-medium text-xs tracking-wider">Clara D.</h4>
                        <span class="text-[10px] text-gray-500 uppercase tracking-widest">Klien Glow Facial</span>
                    </div>
                </div>
            </div>

            <!-- Review Card 3 -->
            <div class="glass-panel p-8 border border-gray-800 relative flex flex-col justify-between hover:border-salon-gold/40 transition duration-500">
                <span class="text-salon-gold text-4xl font-serif absolute top-6 right-6 opacity-30">“</span>
                <div>
                    <div class="text-salon-gold text-xs tracking-widest mb-4">★★★★★</div>
                    <p class="text-gray-300 text-sm font-light leading-relaxed mb-8 italic">
                        "Bulu mata extension nya sangat ringan, berasa tidak pakai apa-apa tapi mataku kelihatan tegas dan cantik banget. Pilihan terbaik untuk acara penting."
                    </p>
                </div>
                <div class="flex items-center gap-4 border-t border-gray-900 pt-4">
                    <div class="w-10 h-10 rounded-full bg-salon-gold/20 border border-salon-gold/40 flex items-center justify-center text-salon-gold font-serif font-bold text-sm">NV</div>
                    <div>
                        <h4 class="text-white font-medium text-xs tracking-wider">Nadia V.</h4>
                        <span class="text-[10px] text-gray-500 uppercase tracking-widest">Klien Lash Extension</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. POP-UP MODAL RESERVASI -->
<div x-show="openBooking" x-cloak class="fixed inset-0 z-[100] overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4">
    <div @click.away="openBooking = false" x-show="openBooking" x-transition:enter="transition ease-out duration-400" x-transition:enter-start="opacity-0 scale-90 translate-y-8" x-transition:enter-end="opacity-100 scale-100 translate-y-0" class="bg-salon-card border border-salon-gold/30 w-full max-w-2xl p-8 sm:p-12 relative shadow-2xl">
        
        <button @click="openBooking = false" class="absolute top-6 right-6 text-2xl text-gray-400 hover:text-salon-gold transition-colors">&times;</button>
        
        <div class="mb-8 text-center">
            <span class="text-salon-gold text-[10px] uppercase tracking-[0.3em] font-medium block mb-2">RESERVASI EKSKLUSIF</span>
            <h2 class="text-3xl font-serif text-white">Formulir Pendaftaran Slot</h2>
        </div>

        <form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="bg-black/60 p-4 border border-salon-gold/20">
                <label class="block text-[10px] uppercase tracking-widest text-salon-gold mb-1">Layanan Terpilih</label>
                <input type="text" name="service_name" :value="selectedService" readonly class="w-full bg-transparent text-lg font-serif text-white focus:outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Nama Lengkap</label>
                    <input type="text" name="customer_name" required class="w-full border-b border-gray-800 bg-transparent py-2.5 text-sm text-white focus:outline-none focus:border-salon-gold transition-colors">
                </div>
                <div>
                    <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Nomor WhatsApp</label>
                    <input type="text" name="phone" placeholder="08123456789" required class="w-full border-b border-gray-800 bg-transparent py-2.5 text-sm text-white focus:outline-none focus:border-salon-gold transition-colors">
                </div>
            </div>

            <div>
                <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Alamat Email</label>
                <input type="email" name="email" required class="w-full border-b border-gray-800 bg-transparent py-2.5 text-sm text-white focus:outline-none focus:border-salon-gold transition-colors">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Pilih Tanggal</label>
                    <input type="date" name="booking_date" required class="w-full border-b border-gray-800 bg-transparent py-2.5 text-sm text-white focus:outline-none focus:border-salon-gold transition-colors">
                </div>
                <div>
                    <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Pilih Jam Kedatangan</label>
                    <input type="time" name="booking_time" required class="w-full border-b border-gray-800 bg-transparent py-2.5 text-sm text-white focus:outline-none focus:border-salon-gold transition-colors">
                </div>
            </div>

            <div>
                <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Catatan Khusus (Opsional)</label>
                <textarea name="notes" rows="2" class="w-full border-b border-gray-800 bg-transparent py-2.5 text-sm text-white focus:outline-none focus:border-salon-gold transition-colors resize-none" placeholder="Instruksi tambahan..."></textarea>
            </div>

            <button type="submit" class="w-full py-4 bg-salon-gold text-black text-xs uppercase tracking-[0.25em] font-semibold hover:bg-yellow-400 transition-all duration-300 shadow-lg">
                Konfirmasi Jadwal
            </button>
        </form>
    </div>
</div>

@endsection