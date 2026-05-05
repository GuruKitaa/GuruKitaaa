<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Booking les privat dengan guru terbaik di GuruKita. Platform les privat personal dan profesional.">
    <title>GuruKita - Booking Les</title>
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

        /* Payment card */
        .payment-card {
            border: 2px solid #E5E7EB;
            border-radius: 16px;
            padding: 16px 24px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 64px;
            background: #fff;
        }
        .payment-card:hover {
            border-color: #A855F7;
            box-shadow: 0 4px 20px rgba(124, 58, 237, 0.1);
            transform: translateY(-2px);
        }
        .payment-card.selected {
            border-color: #7C3AED;
            background: #F5F3FF;
            box-shadow: 0 4px 20px rgba(124, 58, 237, 0.15);
        }

        /* Form input styling */
        .booking-input {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid #E5E7EB;
            border-radius: 12px;
            font-size: 14px;
            color: #374151;
            background: #fff;
            transition: all 0.3s ease;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }
        .booking-input:focus {
            border-color: #7C3AED;
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
        }
        .booking-input::placeholder {
            color: #9CA3AF;
        }

        /* Form label */
        .booking-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
        }

        /* Hero profile image mask */
        .hero-profile-mask {
            clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);
        }

        /* Subtle animation */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
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
                        <img src="{{ asset('images/Teacher.png') }}" alt="Azizi Shafaa A." class="w-full h-full object-cover object-top" id="teacher-photo">
                    </div>

                    <!-- Teacher Info -->
                    <div class="text-white text-center md:text-left">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight italic">
                            Azizi Shafaa A.
                        </h1>
                        <div class="mt-3 space-y-1.5">
                            <div class="flex items-center justify-center md:justify-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <span class="text-sm text-purple-100">Guru Matematika</span>
                            </div>
                            <div class="flex items-center justify-center md:justify-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="text-sm text-purple-100">25 Murid Aktif</span>
                            </div>
                            <div class="flex items-center justify-center md:justify-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                </svg>
                                <span class="text-sm text-purple-100">Bahasa Indonesia</span>
                            </div>
                        </div>

                        <p class="mt-4 text-sm text-purple-100/80 max-w-xl leading-relaxed">
                            Halo semuanya! Saya Azizi Shafaa Ashadel, guru matematika dengan pengalaman mengajar selama 3 tahun.
                            Saya bersemangat dalam menjelaskan konsep matematika secara terstruktur dan membantu siswa berkembang.
                            Metode saya fokus pada pemahaman konsep dasar sehingga siswa bisa memecahkan soal dengan percaya diri.
                            Saya juga menggunakan pendekatan personal yang sesuai dengan gaya belajar masing-masing siswa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">

        <!-- Stepper -->
        <div class="flex items-center justify-center mb-10 sm:mb-14 animate-fade-in-up" id="booking-stepper">
            <!-- Step 1: Booking (Active) -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-base sm:text-lg shadow-lg shadow-purple-500/25">
                    1
                </div>
                <span class="text-sm sm:text-base font-bold text-[#7C3AED]">Booking</span>
            </div>

            <!-- Line 1 -->
            <div class="stepper-line active mx-2 sm:mx-4 w-16 sm:w-24 lg:w-32"></div>

            <!-- Step 2: Checkout (Inactive) -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gray-200 flex items-center justify-center text-gray-400 font-bold text-base sm:text-lg">
                    2
                </div>
                <span class="text-sm sm:text-base font-semibold text-gray-400">Checkout</span>
            </div>

            <!-- Line 2 -->
            <div class="stepper-line mx-2 sm:mx-4 w-16 sm:w-24 lg:w-32"></div>

            <!-- Step 3: Selesai (Inactive) -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gray-200 flex items-center justify-center text-gray-400 font-bold text-base sm:text-lg">
                    3
                </div>
                <span class="text-sm sm:text-base font-semibold text-gray-400">Selesai</span>
            </div>
        </div>

        <!-- Booking Form Card -->
        <div class="max-w-3xl mx-auto animate-fade-in-up delay-100">
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-[#7C3AED] to-[#A855F7] px-6 sm:px-8 py-5">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-white italic" id="form-title">Detail Booking Les</h2>
                    <p class="text-purple-100/80 text-sm mt-1">Silahkan lengkapi form booking les di bawah ini</p>
                </div>

                <!-- Form Body -->
                <div class="px-6 sm:px-8 py-6 sm:py-8">
                    <form id="booking-form">
                        <!-- Row 1: Nama & Mata Pelajaran -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="booking-label" for="nama-murid">Nama Murid</label>
                                <input type="text" id="nama-murid" class="booking-input" placeholder="Masukkan nama lengkap">
                            </div>
                            <div>
                                <label class="booking-label" for="mata-pelajaran">Mata Pelajaran</label>
                                <input type="text" id="mata-pelajaran" class="booking-input" placeholder="Contoh: Matematika">
                            </div>
                        </div>

                        <!-- Row 2: Tanggal & Jam -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="booking-label" for="tanggal-les">Tanggal Les</label>
                                <input type="date" id="tanggal-les" class="booking-input">
                            </div>
                            <div>
                                <label class="booking-label" for="jam-mulai">Jam Mulai</label>
                                <input type="time" id="jam-mulai" class="booking-input">
                            </div>
                        </div>

                        <!-- Row 3: Jumlah Sesi & Metode -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-6">
                            <div>
                                <label class="booking-label" for="jumlah-sesi">Jumlah Sesi</label>
                                <select id="jumlah-sesi" class="booking-input">
                                    <option value="">Pilih jumlah sesi</option>
                                    <option value="1">1 Sesi</option>
                                    <option value="4">4 Sesi (1 Bulan)</option>
                                    <option value="8">8 Sesi (2 Bulan)</option>
                                    <option value="12">12 Sesi (3 Bulan)</option>
                                </select>
                            </div>
                            <div>
                                <label class="booking-label" for="metode-belajar">Metode Belajar</label>
                                <select id="metode-belajar" class="booking-input">
                                    <option value="">Pilih metode</option>
                                    <option value="online">Online</option>
                                    <option value="offline">Offline (Tatap Muka)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-8">
                            <h3 class="text-base font-bold text-gray-800 mb-4">Metode Pembayaran</h3>
                            <div class="grid grid-cols-3 gap-3 sm:gap-4">
                                <!-- BCA -->
                                <div class="payment-card" onclick="selectPayment(this, 'bca')" id="payment-bca">
                                    <div class="text-center">
                                        <div class="w-12 h-8 sm:w-16 sm:h-10 mx-auto flex items-center justify-center">
                                            <svg viewBox="0 0 120 40" class="w-full h-full">
                                                <rect width="120" height="40" rx="4" fill="#003D79"/>
                                                <text x="60" y="25" text-anchor="middle" fill="white" font-size="14" font-weight="bold" font-family="Arial">BCA</text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dana -->
                                <div class="payment-card" onclick="selectPayment(this, 'dana')" id="payment-dana">
                                    <div class="text-center">
                                        <div class="w-12 h-8 sm:w-16 sm:h-10 mx-auto flex items-center justify-center">
                                            <svg viewBox="0 0 120 40" class="w-full h-full">
                                                <rect width="120" height="40" rx="4" fill="#108EE9"/>
                                                <text x="60" y="25" text-anchor="middle" fill="white" font-size="13" font-weight="bold" font-family="Arial">DANA</text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- ShopeePay -->
                                <div class="payment-card" onclick="selectPayment(this, 'shopeepay')" id="payment-shopeepay">
                                    <div class="text-center">
                                        <div class="w-12 h-8 sm:w-16 sm:h-10 mx-auto flex items-center justify-center">
                                            <svg viewBox="0 0 120 40" class="w-full h-full">
                                                <rect width="120" height="40" rx="4" fill="#EE4D2D"/>
                                                <text x="60" y="25" text-anchor="middle" fill="white" font-size="11" font-weight="bold" font-family="Arial">ShopeePay</text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="payment_method" id="payment-method-input" value="">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="btn-submit-booking"
                            class="w-full bg-gradient-to-r from-[#7C3AED] to-[#A855F7] text-white font-bold py-3.5 rounded-2xl
                            hover:from-[#6D28D9] hover:to-[#9333EA] transition-all duration-300
                            shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40
                            active:scale-[0.98] text-sm sm:text-base">
                            Lanjut Pembayaran
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.footer.footer')
</div>

<script>
    // Payment method selection
    function selectPayment(element, method) {
        document.querySelectorAll('.payment-card').forEach(card => {
            card.classList.remove('selected');
        });
        element.classList.add('selected');
        document.getElementById('payment-method-input').value = method;
    }

    // Form submit handler
    document.getElementById('booking-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const paymentMethod = document.getElementById('payment-method-input').value;
        if (!paymentMethod) {
            alert('Silakan pilih metode pembayaran terlebih dahulu.');
            return;
        }
        // Proceed to checkout
        alert('Booking berhasil! Melanjutkan ke halaman checkout...');
    });
</script>
</body>
</html>
