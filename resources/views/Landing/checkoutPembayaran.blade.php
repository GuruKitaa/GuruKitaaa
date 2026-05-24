<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Checkout pembayaran les privat dengan guru terbaik di GuruKita. Selesaikan pembayaran anda dengan mudah dan aman.">
    <title>GuruKita - Checkout Pembayaran</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        /* Stepper connector line */
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

        /* Hero profile image mask - angled cut */
        .hero-profile-mask {
            clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);
        }

        /* Subtle animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(234, 179, 8, 0.3); }
            50% { box-shadow: 0 0 12px 4px rgba(234, 179, 8, 0.15); }
        }
        @keyframes countdown-tick {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        .animate-fade-in-right {
            animation: fadeInRight 0.6s ease-out forwards;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }

        /* Timer pulse animation */
        .timer-pulse {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        /* Copy button tooltip */
        .copy-tooltip {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            background: #1F2937;
            color: white;
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 6px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease;
        }
        .copy-tooltip.show {
            opacity: 1;
        }
        .copy-tooltip::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 4px 4px 0 4px;
            border-style: solid;
            border-color: #1F2937 transparent transparent transparent;
        }

        /* Dashed border for bank info */
        .bank-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }
        .bank-info-row + .bank-info-row {
            border-top: 1px dashed #E5E7EB;
        }

        /* Order summary detail row */
        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .checkout-grid {
                grid-template-columns: 1fr;
            }
        }
        @media (min-width: 769px) {
            .checkout-grid {
                grid-template-columns: 1.3fr 1fr;
            }
        }
    </style>
</head>
<body>
<div class="font-poppins bg-[#F3F4F6] min-h-screen">
    @include('layouts.guru.navbar.guru')

   <!-- Hero Section - Teacher Profile -->
    <div class="relative overflow-hidden">

        <div class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] py-8 sm:py-10 px-4 sm:px-6 lg:px-8">

            <!-- Decorative blurred circles -->
            <div class="absolute top-[-40%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>

            <div class="absolute bottom-[-30%] left-[-5%] w-72 h-72 bg-purple-300/10 rounded-full blur-3xl"></div>

            <div class="max-w-6xl mx-auto relative z-10">

                <div class="flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-8">

                    <!-- Teacher Photo -->
                    <div class="w-32 h-40 sm:w-40 sm:h-48 md:w-48 md:h-56 flex-shrink-0 rounded-2xl overflow-hidden shadow-2xl shadow-purple-900/30 border-2 border-white/20">

                        <img
                            src="{{ asset('images/Teacher.png') }}"
                            alt="{{ $guru->user->name }}"
                            class="w-full h-full object-cover object-top"
                            id="teacher-photo"
                        >

                    </div>

                    <!-- Teacher Info -->
                    <div class="text-white text-center md:text-left">

                        <!-- NAMA -->
                        <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight italic">

                            {{ $guru->user->name }}

                        </h1>

                        <div class="mt-3 space-y-1.5">

                            <!-- KEAHLIAN -->
                            <div class="flex items-center justify-center md:justify-start gap-2">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />

                                </svg>

                                <span class="text-sm text-purple-100">

                                    Guru {{ $guru->keahlian }}

                                </span>

                            </div>

                            <!-- MURID -->
                            <div class="flex items-center justify-center md:justify-start gap-2">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />

                                </svg>

                                <span class="text-sm text-purple-100">

                                    Rating {{ $guru->rating_avg }}

                                </span>

                            </div>

                            <!-- EMAIL -->
                            <div class="flex items-center justify-center md:justify-start gap-2">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />

                                </svg>

                                <span class="text-sm text-purple-100">

                                    {{ $guru->user->email }}

                                </span>

                            </div>

                        </div>

                        <!-- BIO -->
                        <p class="mt-4 text-sm text-purple-100/80 max-w-xl leading-relaxed">

                            {{ $guru->bio }}

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">

        <!-- Stepper -->
        <div class="flex items-center justify-center mb-10 sm:mb-14 animate-fade-in-up" id="checkout-stepper">
            <!-- Step 1: Booking (Completed) -->
            <div class="flex items-center gap-2 sm:gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-base sm:text-lg shadow-lg shadow-purple-500/25">
                    1
                </div>
                <span class="text-sm sm:text-base font-bold text-[#7C3AED]">Booking</span>
            </div>

            <!-- Line 1 (Active) -->
            <div class="stepper-line active mx-2 sm:mx-4 w-12 sm:w-24 lg:w-32"></div>

            <!-- Step 2: Checkout (Active) -->
            <div class="flex items-center gap-2 sm:gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-base sm:text-lg shadow-lg shadow-purple-500/25">
                    2
                </div>
                <span class="text-sm sm:text-base font-bold text-[#7C3AED]">Checkout</span>
            </div>

            <!-- Line 2 (Inactive) -->
            <div class="stepper-line mx-2 sm:mx-4 w-12 sm:w-24 lg:w-32"></div>

            <!-- Step 3: Selesai (Inactive) -->
            <div class="flex items-center gap-2 sm:gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gray-200 flex items-center justify-center text-gray-400 font-bold text-base sm:text-lg">
                    3
                </div>
                <span class="text-sm sm:text-base font-semibold text-gray-400">Selesai</span>
            </div>
        </div>

        <!-- Checkout Grid: Left (Payment) + Right (Summary) -->
        <div class="checkout-grid grid gap-6 lg:gap-8 items-start">

            <!-- LEFT COLUMN: Checkout Payment Card -->
            <div class="animate-fade-in-up delay-100">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <!-- Card Header -->
                    <div class="bg-gradient-to-r from-[#7C3AED] to-[#A855F7] px-6 sm:px-8 py-5">
                        <h2 class="text-xl sm:text-2xl font-extrabold text-white italic" id="checkout-title">Checkout</h2>
                        <p class="text-purple-100/80 text-sm mt-1">Segera Selesaikan Pembayaran Anda</p>
                    </div>

                    <!-- Card Body -->
                    <div class="px-5 sm:px-8 py-6 sm:py-8">

                        <!-- Timer / Batas Waktu Pembayaran -->
                        <div class="bg-[#FFFBEB] border border-[#FDE68A] rounded-2xl px-4 sm:px-6 py-4 flex items-center justify-between mb-6 timer-pulse" id="payment-timer-box">
                            <div class="flex items-center gap-3">
                                <!-- Clock Icon -->
                                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#FEF3C7] flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#D97706]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span class="text-sm sm:text-base font-semibold text-[#92400E]">Batas Waktu Pembayaran :</span>
                            </div>
                            <span class="text-xl sm:text-2xl font-extrabold text-[#D97706] tabular-nums" id="countdown-timer">09:20</span>
                        </div>

                        <!-- Bank Information -->
                        <div class="space-y-0">
                            <!-- Bank Tujuan -->
                            <div class="bank-info-row">
                                <span class="text-sm text-gray-500 font-medium">Bank Tujuan</span>
                                <span class="text-sm font-bold text-gray-800" id="bank-name">Bank BCA</span>
                            </div>

                            <!-- Nomer Virtual Account -->
                            <div class="bank-info-row">
                                <span class="text-sm text-gray-500 font-medium">Nomer Virtual Acount</span>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm font-bold text-gray-800 tracking-wide" id="va-number">3324696969</span>
                                    <button onclick="copyToClipboard('3324696969', this)" class="relative group" id="btn-copy-va" title="Salin nomor">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#7C3AED] hover:text-[#6D28D9] transition-colors cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                        <span class="copy-tooltip" id="copy-tooltip">Tersalin!</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Atas Nama -->
                            <div class="bank-info-row">
                                <span class="text-sm text-gray-500 font-medium">Atas nama</span>
                                <span class="text-sm font-bold text-gray-800" id="account-name"> {{ $guru->user->name }} </span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="mt-8">
                            <button type="button" id="btn-confirm-payment"
                                class="w-full bg-gradient-to-r from-[#7C3AED] to-[#A855F7] text-white font-bold py-3.5 rounded-2xl
                                hover:from-[#6D28D9] hover:to-[#9333EA] transition-all duration-300
                                shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40
                                active:scale-[0.98] text-sm sm:text-base">
                                <a href="/selesai-pembayaran/{{ $guru->id }}">
                                    Konfirmasi Pembayaran
                                </a>
                                
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Ringkasan Pemesanan -->
            <div class="animate-fade-in-right delay-200">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <!-- Summary Header -->
                    <div class="px-6 py-5 border-b border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900" id="summary-title">Ringkasan Pemesanan</h3>
                    </div>

                    <!-- Summary Body -->
                    <div class="px-6 py-5">
                        <!-- Teacher Info Mini Card -->
                        <div class="flex items-center gap-3 mb-5 pb-5 border-b border-gray-100">
                            <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-sm flex-shrink-0 shadow-md">
                                AS
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-bold text-gray-900 truncate"> {{ $guru->user->name }} </p>
                                <p class="text-xs text-gray-500">Guru Matematika</p>
                            </div>
                            <div class="flex items-center gap-1 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
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
    // Countdown Timer
    (function() {
        let totalSeconds = 9 * 60 + 20; // 09:20

        const timerEl = document.getElementById('countdown-timer');
        const timerBox = document.getElementById('payment-timer-box');

        function updateTimer() {
            if (totalSeconds <= 0) {
                timerEl.textContent = '00:00';
                timerBox.classList.remove('timer-pulse');
                timerBox.style.background = '#FEE2E2';
                timerBox.style.borderColor = '#FECACA';
                timerEl.style.color = '#DC2626';
                return;
            }

            const minutes = Math.floor(totalSeconds / 60);
            const seconds = totalSeconds % 60;
            timerEl.textContent =
                String(minutes).padStart(2, '0') + ':' +
                String(seconds).padStart(2, '0');

            // Warning state when under 2 minutes
            if (totalSeconds <= 120) {
                timerBox.style.background = '#FEF2F2';
                timerBox.style.borderColor = '#FECACA';
                timerEl.style.color = '#DC2626';
            }

            totalSeconds--;
        }

        updateTimer();
        setInterval(updateTimer, 1000);
    })();

    // Copy to clipboard
    function copyToClipboard(text, buttonEl) {
        navigator.clipboard.writeText(text).then(() => {
            const tooltip = buttonEl.querySelector('.copy-tooltip');
            tooltip.classList.add('show');
            setTimeout(() => {
                tooltip.classList.remove('show');
            }, 1500);
        }).catch(() => {
            // Fallback for older browsers
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);

            const tooltip = buttonEl.querySelector('.copy-tooltip');
            tooltip.classList.add('show');
            setTimeout(() => {
                tooltip.classList.remove('show');
            }, 1500);
        });
    }

    // Confirm payment button
    document.getElementById('btn-confirm-payment').addEventListener('click', function() {
        // Show a simple confirmation
        const btn = this;
        btn.disabled = true;
        btn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Memproses...
        `;

        setTimeout(() => {
            // alert('Pembayaran berhasil dikonfirmasi! Menuju halaman selesai...');
            btn.disabled = false;
            btn.textContent = 'Konfirmasi Pembayaran';
        }, 2000);
    });
</script>
</body>
</html>
