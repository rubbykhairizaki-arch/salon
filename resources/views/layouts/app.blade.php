<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUMIÈRE | Luxury Beauty & Hair Studio</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'salon-gold': '#D4AF37',
                        'salon-gold-light': '#F3E5AB',
                        'salon-dark': '#0D0D0D',
                        'salon-card': '#141414',
                        'salon-light': '#FAF8F5',
                    },
                    fontFamily: {
                        'serif': ['"Playfair Display"', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'shimmer': 'shimmer 2.5s linear infinite',
                        'spin-slow': 'spin 20s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- GSAP for Ultra Smooth Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
        
        /* Custom Glowing Cursor */
        body { cursor: default; }
        .custom-cursor {
            width: 8px; height: 8px; background: #D4AF37; border-radius: 50%;
            position: fixed; top: 0; left: 0; pointer-events: none; z-index: 9999;
            transition: transform 0.1s ease;
        }
        .custom-cursor-follower {
            width: 36px; height: 36px; border: 1px solid rgba(212, 175, 55, 0.5); border-radius: 50%;
            position: fixed; top: -14px; left: -14px; pointer-events: none; z-index: 9998;
            transition: transform 0.25s cubic-bezier(0.215, 0.61, 0.355, 1), background-color 0.3s ease;
        }
        .cursor-hover .custom-cursor-follower {
            transform: scale(1.8);
            background-color: rgba(212, 175, 55, 0.15);
            border-color: #D4AF37;
        }

        /* Metallic Gold Text Effect */
        .gold-shimmer-text {
            background: linear-gradient(90deg, #B89C72 0%, #FFF2A3 50%, #B89C72 100%);
            background-size: 200% auto;
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            animation: shimmer 4s linear infinite;
        }

        /* Marquee Animation */
        .marquee-container { overflow: hidden; white-space: nowrap; width: 100%; display: flex; }
        .marquee-content { display: flex; animation: marquee 30s linear infinite; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

        .arch-image { border-top-left-radius: 200px; border-top-right-radius: 200px; }
        
        /* Glassmorphism Card */
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(212, 175, 55, 0.15);
        }
    </style>
</head>
<body class="bg-salon-dark text-gray-200 font-sans antialiased selection:bg-salon-gold selection:text-black overflow-x-hidden" x-data="{ openBooking: false, selectedService: '' }">

    <!-- CUSTOM ANIMATED CURSOR -->
    <div class="custom-cursor hidden md:block" id="cursor"></div>
    <div class="custom-cursor-follower hidden md:block" id="cursor-follower"></div>

    <!-- NAVBAR -->
    <nav x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)" :class="scrolled ? 'bg-salon-dark/95 border-b border-salon-gold/20 backdrop-blur-xl py-4 shadow-2xl' : 'bg-gradient-to-b from-black/80 to-transparent py-6'" class="fixed w-full z-50 transition-all duration-500 top-0 left-0">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center">
            <a href="#home" class="font-serif text-2xl md:text-3xl font-bold tracking-[0.25em] text-white flex items-center gap-2 group">
                <span class="text-salon-gold transition-transform duration-500 group-hover:rotate-45">✦</span> LUMIÈRE
            </a>
            
            <div class="hidden md:flex items-center space-x-10">
                <a href="#home" class="text-xs uppercase tracking-[0.2em] text-gray-300 hover:text-salon-gold transition-all duration-300 relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-salon-gold hover:after:w-full after:transition-all">Beranda</a>
                <a href="#about" class="text-xs uppercase tracking-[0.2em] text-gray-300 hover:text-salon-gold transition-all duration-300 relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-salon-gold hover:after:w-full after:transition-all">Tentang</a>
                <a href="#services" class="text-xs uppercase tracking-[0.2em] text-gray-300 hover:text-salon-gold transition-all duration-300 relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-salon-gold hover:after:w-full after:transition-all">Layanan</a>
                <a href="#reviews" class="text-xs uppercase tracking-[0.2em] text-gray-300 hover:text-salon-gold transition-all duration-300 relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-salon-gold hover:after:w-full after:transition-all">Ulasan</a>
            </div>

            <button @click="openBooking = true; selectedService = 'Layanan Utama'" class="relative group overflow-hidden px-7 py-3 border border-salon-gold text-salon-gold text-xs uppercase tracking-[0.2em] transition-all duration-500 hover:text-black">
                <span class="absolute inset-0 bg-salon-gold -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out"></span>
                <span class="relative z-10 font-medium">Reservasi</span>
            </button>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="relative z-10">
        @yield('content')
    </main>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/628123456789" target="_blank" class="fixed bottom-8 right-8 z-40 bg-emerald-600 hover:bg-emerald-500 text-white p-4 rounded-full shadow-2xl flex items-center justify-center group transition-all duration-300 hover:scale-110 border border-emerald-400/50">
        <span class="absolute inset-0 rounded-full bg-emerald-500 animate-ping opacity-30"></span>
        <i class="fab fa-whatsapp text-2xl relative z-10"></i>
        <span class="max-w-0 overflow-hidden group-hover:max-w-xs transition-all duration-500 ease-in-out whitespace-nowrap text-xs uppercase tracking-widest pl-0 group-hover:pl-3 font-medium">Chat Kami</span>
    </a>

    <!-- FOOTER -->
    <footer class="bg-black text-white pt-24 pb-12 border-t border-salon-gold/20 relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-1 bg-gradient-to-r from-transparent via-salon-gold to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="col-span-1 md:col-span-2">
                <h3 class="font-serif text-3xl mb-4 gold-shimmer-text tracking-widest">LUMIÈRE</h3>
                <p class="text-gray-400 text-sm leading-relaxed max-w-sm font-light">Destinasi kecantikan eksklusif dengan standar internasional. Menghadirkan simfoni antara kemewahan, kenyamanan, dan presisi tinggi.</p>
            </div>
            <div>
                <h4 class="font-serif text-lg mb-6 text-salon-gold tracking-wider">Jam Operasional</h4>
                <ul class="text-gray-400 text-xs space-y-3 font-light">
                    <li class="flex justify-between border-b border-gray-900 pb-2"><span>Senin - Jumat</span> <span class="text-white">09.00 - 20.00</span></li>
                    <li class="flex justify-between border-b border-gray-900 pb-2"><span>Sabtu</span> <span class="text-white">10.00 - 18.00</span></li>
                    <li class="flex justify-between pb-2"><span>Minggu</span> <span class="text-salon-gold">Tutup</span></li>
                </ul>
            </div>
            <div>
                <h4 class="font-serif text-lg mb-6 text-salon-gold tracking-wider">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-800 flex items-center justify-center text-gray-400 hover:text-salon-gold hover:border-salon-gold transition-all duration-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-800 flex items-center justify-center text-gray-400 hover:text-salon-gold hover:border-salon-gold transition-all duration-300"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-800 flex items-center justify-center text-gray-400 hover:text-salon-gold hover:border-salon-gold transition-all duration-300"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-8 border-t border-gray-900 text-center text-xs text-gray-600 font-light flex flex-col md:flex-row justify-between items-center gap-4">
            <p>&copy; 2026 LUMIÈRE Beauty Studio. Hak Cipta Dilindungi.</p>
            <p class="text-gray-500">Crafted with Luxury Experience</p>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 1000, offset: 80, easing: 'ease-out-cubic' });

        // Custom Cursor Logic
        const cursor = document.getElementById('cursor');
        const follower = document.getElementById('cursor-follower');
        
        document.addEventListener('mousemove', (e) => {
            cursor.style.transform = `translate3d(${e.clientX}px, ${e.clientY}px, 0)`;
            follower.style.transform = `translate3d(${e.clientX}px, ${e.clientY}px, 0)`;
        });

        // Add cursor hover effect on interactable elements
        const hoverables = document.querySelectorAll('a, button, input, textarea, select');
        hoverables.forEach(el => {
            el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
            el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
        });
    </script>
</body>
</html>