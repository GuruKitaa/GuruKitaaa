<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Pembayaran berhasil! Les privat anda telah terkonfirmasi di GuruKita.">
    <title>GuruKita - Pembayaran Selesai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        .stepper-line {
            height: 3px;
            background: #E5E7EB;
            flex: 1;
            margin: 0 8px;
            border-radius: 2px;
        }
        .stepper-line.active {
            background: linear-gradient(90deg, #7C3AED, #A855F7);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.5); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes checkDraw {
            from { stroke-dashoffset: 50; }
            to { stroke-dashoffset: 0; }
        }
        @keyframes ripple {
            0% { box-shadow: 0 0 0 0 rgba(124, 58, 237, 0.3); }
            70% { box-shadow: 0 0 0 15px rgba(124, 58, 237, 0); }
            100% { box-shadow: 0 0 0 0 rgba(124, 58, 237, 0); }
        }
        @keyframes confettiFade {
            0% { opacity: 1; transform: translateY(0) rotate(0deg); }
            100% { opacity: 0; transform: translateY(-30px) rotate(180deg); }
        }
        .animate-fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
        .animate-fade-in-right { animation: fadeInRight 0.6s ease-out forwards; }
        .animate-scale-in { animation: scaleIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; }
        .animate-ripple { animation: ripple 1.5s ease-out infinite; }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }

        .check-icon svg path.check-path {
            stroke-dasharray: 50;
            stroke-dashoffset: 50;
            animation: checkDraw 0.6s ease-out 0.4s forwards;
        }

        .bank-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }
        .bank-info-row + .bank-info-row {
            border-top: 1px dashed #E5E7EB;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
        }

        @media (max-width: 768px) {
            .selesai-grid { grid-template-columns: 1fr; }
        }
        @media (min-width: 769px) {
            .selesai-grid { grid-template-columns: 1.3fr 1fr; }
        }
    </style>
</head>
<body>
<div class="font-poppins bg-[#F3F4F6] min-h-screen">
    @include('layouts.guru.navbar.guru')

    <!-- Hero Section - Teacher Profile -->
    <div class="relative overflow-hidden">
        <div class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] py-8 sm:py-10 px-4 sm:px-6 lg:px-8">
            <div class="absolute top-[-40%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-30%] left-[-5%] w-72 h-72 bg-purple-300/10 rounded-full blur-3xl"></div>
            <div class="max-w-6xl mx-auto relative z-10">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-8">
                    <div class="w-32 h-40 sm:w-40 sm:h-48 md:w-48 md:h-56 flex-shrink-0 rounded-2xl overflow-hidden shadow-2xl shadow-purple-900/30 border-2 border-white/20">
                        <img src="{{ asset('images/Teacher.png') }}" alt="Azizi Shafaa A." class="w-full h-full object-cover object-top" id="teacher-photo">
                    </div>
                    <div class="text-white text-center md:text-left">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight italic"> {{ $guru->user->name }} </h1>
                        <div class="mt-3 space-y-1.5">
                            <div class="flex items-center justify-center md:justify-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                                <span class="text-sm text-purple-100">Guru Matematika</span>
                            </div>
                            <div class="flex items-center justify-center md:justify-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                <span class="text-sm text-purple-100">25 Murid Aktif</span>
                            </div>
                            <div class="flex items-center justify-center md:justify-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" /></svg>
                                <span class="text-sm text-purple-100">Bahasa Indonesia</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-purple-100/80 max-w-xl leading-relaxed">
                            Halo semuanya! Saya Azizi Shafaa Ashadel, guru matematika dengan pengalaman mengajar selama 3 tahun.
                            Saya bersemangat dalam menjelaskan konsep matematika secara terstruktur dan memberikan
                            dukungan kepada siswa dalam pengembangan kemampuan matematika mereka.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">

        <!-- Stepper (All Steps Active/Completed) -->
        <div class="flex items-center justify-center mb-10 sm:mb-14 animate-fade-in-up" id="selesai-stepper">
            <div class="flex items-center gap-2 sm:gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-base sm:text-lg shadow-lg shadow-purple-500/25">1</div>
                <span class="text-sm sm:text-base font-bold text-[#7C3AED]">Booking</span>
            </div>
            <div class="stepper-line active mx-2 sm:mx-4 w-12 sm:w-24 lg:w-32"></div>
            <div class="flex items-center gap-2 sm:gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-base sm:text-lg shadow-lg shadow-purple-500/25">2</div>
                <span class="text-sm sm:text-base font-bold text-[#7C3AED]">Checkout</span>
            </div>
            <div class="stepper-line active mx-2 sm:mx-4 w-12 sm:w-24 lg:w-32"></div>
            <div class="flex items-center gap-2 sm:gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-base sm:text-lg shadow-lg shadow-purple-500/25">3</div>
                <span class="text-sm sm:text-base font-bold text-[#7C3AED]">Selesai</span>
            </div>
        </div>

        <!-- Selesai Grid: Left (Success) + Right (Summary) -->
        <div class="selesai-grid grid gap-6 lg:gap-8 items-start">

            <!-- LEFT COLUMN: Pembayaran Berhasil -->
            <div class="animate-fade-in-up delay-100">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-5 sm:px-8 py-8 sm:py-10">

                        <!-- Success Checkmark -->
                        <div class="flex flex-col items-center text-center mb-6">
                            <div class="check-icon w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center shadow-xl shadow-purple-500/20 animate-scale-in animate-ripple mb-5" id="success-checkmark">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path class="check-path" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl font-extrabold text-[#7C3AED] italic animate-fade-in-up delay-200" id="success-title">Pembayaran Berhasil!</h2>
                            <p class="text-sm text-gray-500 mt-2 max-w-sm animate-fade-in-up delay-300">Bukti rekam jejak telah dikonfirmasi.<br>Kamu juga menerima notifikasi pengingat sebelum sesi dimulai!</p>
                        </div>

                        <!-- Notification Box (Green) -->
                        <div class="bg-[#ECFDF5] border border-[#A7F3D0] rounded-2xl px-4 sm:px-5 py-4 mb-6 animate-fade-in-up delay-400" id="notification-box">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-[#D1FAE5] flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#059669]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#065F46]">Notifikasi Terkirim!</p>
                                    <p class="text-xs text-[#047857] mt-0.5">Email telah dikirim ke <span class="font-semibold">raisha@gmail.com</span>. Pengingat otomatis 30 menit sebelum sesi dimulai.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bank Information / Receipt -->
                        <div class="border-t border-gray-100 pt-5 animate-fade-in-up delay-500">
                            <div class="bank-info-row">
                                <span class="text-sm text-gray-500 font-medium">Bank Tujuan</span>
                                <span class="text-sm font-bold text-gray-800" id="bank-name">Bank BCA</span>
                            </div>
                            <div class="bank-info-row">
                                <span class="text-sm text-gray-500 font-medium">Nomer Virtual Acount</span>
                                <span class="text-sm font-bold text-gray-800 tracking-wide" id="va-number">3324696969</span>
                            </div>
                            <div class="bank-info-row">
                                <span class="text-sm text-gray-500 font-medium">Atas nama</span>
                                <span class="text-sm font-bold text-gray-800" id="account-name">Raisha Syifa</span>
                            </div>
                            <div class="bank-info-row">
                                <span class="text-sm text-gray-500 font-medium">Status</span>
                                <span class="text-sm font-extrabold text-[#059669]" id="payment-status">Lunas</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-8 flex flex-col sm:flex-row gap-3">
                            <a href="/dashboard-siswa" id="btn-back-home"
                                class="flex-1 text-center bg-gradient-to-r from-[#7C3AED] to-[#A855F7] text-white font-bold py-3.5 rounded-2xl
                                hover:from-[#6D28D9] hover:to-[#9333EA] transition-all duration-300
                                shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40
                                active:scale-[0.98] text-sm sm:text-base">
                                Kembali ke Beranda
                            </a>
                            <button type="button" id="btn-download-receipt" onclick="window.print()"
                                class="flex-1 text-center bg-white border-2 border-[#7C3AED] text-[#7C3AED] font-bold py-3.5 rounded-2xl
                                hover:bg-[#F5F3FF] transition-all duration-300
                                active:scale-[0.98] text-sm sm:text-base">
                                Unduh Bukti
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Ringkasan Pemesanan -->
            <div class="animate-fade-in-right delay-200">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900" id="summary-title">Ringkasan Pemesanan</h3>
                    </div>
                    <div class="px-6 py-5">
                        <!-- Teacher Info Mini Card -->
                        <div class="flex items-center gap-3 mb-5 pb-5 border-b border-gray-100">
                            <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-sm flex-shrink-0 shadow-md">AS</div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-bold text-gray-900 truncate">Azizi Shafa A.</p>
                                <p class="text-xs text-gray-500">Guru Matematika</p>
                            </div>
                            <div class="flex items-center gap-1 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <span class="text-xs font-bold text-gray-700">4.9</span>
                            </div>
                        </div>
                        <!-- Order Details -->
                        <div class="space-y-0">
                            <div class="summary-row">
                                <span class="text-xs sm:text-sm text-gray-500">Mata Pelajaran</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-800">Matematika</span>
                            </div>
                            <div class="summary-row">
                                <span class="text-xs sm:text-sm text-gray-500">Tanggal</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-800">24 April 2026</span>
                            </div>
                            <div class="summary-row">
                                <span class="text-xs sm:text-sm text-gray-500">Jam</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-800">14.00 - 15.00</span>
                            </div>
                            <div class="summary-row">
                                <span class="text-xs sm:text-sm text-gray-500">Durasi</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-800">1 Jam</span>
                            </div>
                            <div class="summary-row">
                                <span class="text-xs sm:text-sm text-gray-500">Metode</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-800">Online</span>
                            </div>
                        </div>
                        <!-- Pricing -->
                        <div class="border-t border-gray-100 mt-4 pt-4 space-y-0">
                            <div class="summary-row">
                                <span class="text-xs sm:text-sm text-gray-500">Harga Perjam</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-800">Rp 50.000</span>
                            </div>
                            <div class="summary-row">
                                <span class="text-xs sm:text-sm text-gray-500">Biaya Layanan</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-800">Rp 2.500</span>
                            </div>
                        </div>
                        <!-- Total -->
                        <div class="border-t-2 border-gray-200 mt-4 pt-4">
                            <div class="flex justify-between items-center">
                                <span class="text-base font-bold text-gray-900">Total</span>
                                <span class="text-base sm:text-lg font-extrabold text-[#7C3AED]" id="total-price">Rp 52.500</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer.footer')
</div>

<script>
    // Confetti celebration effect on page load
    (function() {
        const colors = ['#7C3AED', '#A855F7', '#C084FC', '#DDD6FE', '#EDE9FE', '#F59E0B', '#10B981'];
        const container = document.createElement('div');
        container.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:9999;overflow:hidden;';
        document.body.appendChild(container);

        for (let i = 0; i < 40; i++) {
            const confetti = document.createElement('div');
            const size = Math.random() * 8 + 4;
            confetti.style.cssText = `
                position:absolute;
                width:${size}px;height:${size}px;
                background:${colors[Math.floor(Math.random()*colors.length)]};
                border-radius:${Math.random()>0.5?'50%':'2px'};
                left:${Math.random()*100}%;
                top:-10px;
                opacity:0;
            `;
            container.appendChild(confetti);

            const duration = Math.random() * 2000 + 1500;
            const delay = Math.random() * 800;
            confetti.animate([
                { transform: 'translateY(0) rotate(0deg)', opacity: 1 },
                { transform: `translateY(${window.innerHeight + 20}px) rotate(${Math.random()*720}deg)`, opacity: 0 }
            ], { duration, delay, easing: 'cubic-bezier(0.25,0.46,0.45,0.94)', fill: 'forwards' });
        }

        setTimeout(() => container.remove(), 4000);
    })();
</script>
</body>
</html>
