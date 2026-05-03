<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Dashboard Guru</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        /* Schedule card left border colors */
        .schedule-orange { border-left: 4px solid #F97316; }
        .schedule-blue { border-left: 4px solid #3B82F6; }
        .schedule-pink { border-left: 4px solid #EC4899; }
        .schedule-green { border-left: 4px solid #22C55E; }

        /* Time badge colors matching schedule */
        .time-orange { background: #FFF7ED; color: #EA580C; border: 1px solid #FDBA74; }
        .time-blue { background: #EFF6FF; color: #2563EB; border: 1px solid #93C5FD; }
        .time-pink { background: #FDF2F8; color: #DB2777; border: 1px solid #F9A8D4; }
        .time-green { background: #F0FDF4; color: #16A34A; border: 1px solid #86EFAC; }

        /* Chart bar animation */
        .chart-bar {
            transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body>
    <div class="font-poppins bg-[#F3F4F6] min-h-screen">
        @include('layouts.guru.navbar.guru')

        <!-- Hero Section - Purple Gradient -->
        <div class="relative overflow-hidden">
            <div class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] pt-8 pb-14 px-4 sm:px-6 lg:px-8">
                {{-- Decorative blurred circles --}}
                <div class="absolute top-[-40%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-[-30%] left-[-5%] w-72 h-72 bg-purple-300/10 rounded-full blur-3xl"></div>

                <div class="max-w-7xl mx-auto relative z-10">
                    <h1 class="text-white font-extrabold text-3xl sm:text-4xl md:text-5xl tracking-tight leading-tight italic">
                        Selamat Datang, Azizi!
                    </h1>
                    <p class="text-purple-100/80 font-medium mt-2 text-sm sm:text-base max-w-2xl">
                        Berikut ringkasan aktivitasmu hari ini
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <div class="bg-[#FFC007] px-4 py-2 rounded-full flex items-center gap-2 shadow-lg shadow-yellow-500/20">
                            <span class="text-[#45069A] font-bold text-xs sm:text-sm">3 Sesi Hari Ini</span>
                        </div>
                        <div class="bg-[#7C3AED] border border-purple-400/30 px-4 py-2 rounded-full flex items-center gap-2">
                            <span class="text-white font-bold text-xs sm:text-sm">12 Murid Aktif</span>
                        </div>
                        <div class="bg-[#7C3AED] border border-purple-400/30 px-4 py-2 rounded-full flex items-center gap-2">
                            <span class="text-white font-bold text-xs sm:text-sm">Rating 4.9</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <!-- Stats Cards Row 1 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                <!-- Total Murid Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="h-1.5 bg-[#5B21B6]"></div>
                    <div class="p-5 flex items-center gap-5">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 bg-[#F5F3FF] rounded-2xl flex items-center justify-center flex-shrink-0 p-3">
                            <img src="{{ asset('images/Frame 30.png') }}" alt="Student" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h2 class="text-gray-800 text-base sm:text-lg font-bold">Total Murid</h2>
                            <span class="text-[#1A1A1A] text-4xl sm:text-5xl font-black leading-none">12</span>
                        </div>
                    </div>
                </div>

                <!-- Sesi Bulan Ini Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="h-1.5 bg-[#F59E0B]"></div>
                    <div class="p-5 flex items-center gap-5">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 bg-[#FFFBEB] rounded-2xl flex items-center justify-center flex-shrink-0 p-3">
                            <img src="{{ asset('images/calender.png') }}" alt="Calendar" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h2 class="text-gray-800 text-base sm:text-lg font-bold">Sesi Bulan Ini</h2>
                            <span class="text-[#1A1A1A] text-4xl sm:text-5xl font-black leading-none">38</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards Row 2 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                <!-- Pendapatan Bulan Ini Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="h-1.5 bg-[#3B82F6]"></div>
                    <div class="p-5 flex items-center gap-5">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 bg-[#EFF6FF] rounded-2xl flex items-center justify-center flex-shrink-0 p-3">
                            <img src="{{ asset('images/money.png') }}" alt="Money" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h2 class="text-gray-800 text-base sm:text-lg font-bold">Pendapatan Bulan Ini</h2>
                            <span class="text-[#1A1A1A] text-4xl sm:text-5xl font-black leading-none">1.900.000</span>
                        </div>
                    </div>
                </div>

                <!-- Rating Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="h-1.5 bg-[#F59E0B]"></div>
                    <div class="p-5 flex items-center gap-5">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 bg-[#FFFBEB] rounded-2xl flex items-center justify-center flex-shrink-0 p-3">
                            <img src="{{ asset('images/stars.png') }}" alt="Rating" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h2 class="text-gray-800 text-base sm:text-lg font-bold">Rating</h2>
                            <span class="text-[#1A1A1A] text-4xl sm:text-5xl font-black leading-none">4,9</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jadwal Hari Ini & Saldo Tersedia -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                <!-- Jadwal Hari Ini -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 sm:p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Jadwal Hari Ini</h3>

                    <!-- Date Label: Rabu, 24 April -->
                    <div class="mb-3">
                        <p class="text-xs text-gray-400 font-medium">Rabu, 24 April · 5 sesi</p>
                    </div>

                    <div class="space-y-3">
                        <!-- Schedule Item 1 -->
                        <div class="schedule-orange bg-white rounded-xl border border-gray-100 p-3.5 flex items-center justify-between hover:shadow-sm transition-shadow">
                            <div class="flex items-center gap-3">
                                <span class="time-orange text-xs font-bold px-2.5 py-1 rounded-md">08.00</span>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Andri Susanto</p>
                                    <p class="text-xs text-gray-400">Matematika · online</p>
                                </div>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>

                        <!-- Schedule Item 2 -->
                        <div class="schedule-blue bg-white rounded-xl border border-gray-100 p-3.5 flex items-center justify-between hover:shadow-sm transition-shadow">
                            <div class="flex items-center gap-3">
                                <span class="time-blue text-xs font-bold px-2.5 py-1 rounded-md">14.00</span>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Bintang Prasetyo</p>
                                    <p class="text-xs text-gray-400">Fisika · offline</p>
                                </div>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>

                        <!-- Schedule Item 3 -->
                        <div class="schedule-pink bg-white rounded-xl border border-gray-100 p-3.5 flex items-center justify-between hover:shadow-sm transition-shadow">
                            <div class="flex items-center gap-3">
                                <span class="time-pink text-xs font-bold px-2.5 py-1 rounded-md">17.00</span>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Nadia Putri</p>
                                    <p class="text-xs text-gray-400">Biologi · online</p>
                                </div>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>
                    </div>

                    <!-- Date Label: Besok -->
                    <div class="mt-5 mb-3">
                        <p class="text-xs text-gray-400 font-medium">Besok, Kamis, 25 April</p>
                    </div>

                    <div class="space-y-3">
                        <!-- Schedule Item 4 -->
                        <div class="schedule-green bg-white rounded-xl border border-gray-100 p-3.5 flex items-center justify-between hover:shadow-sm transition-shadow">
                            <div class="flex items-center gap-3">
                                <span class="time-green text-xs font-bold px-2.5 py-1 rounded-md">09.00</span>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Aldi Firmansyah</p>
                                    <p class="text-xs text-gray-400">Matematika · online</p>
                                </div>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>

                        <!-- Schedule Item 5 -->
                        <div class="schedule-orange bg-white rounded-xl border border-gray-100 p-3.5 flex items-center justify-between hover:shadow-sm transition-shadow">
                            <div class="flex items-center gap-3">
                                <span class="time-orange text-xs font-bold px-2.5 py-1 rounded-md">09.00</span>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Raisya Syifa</p>
                                    <p class="text-xs text-gray-400">Kimia · offline</p>
                                </div>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Saldo Tersedia -->
                <div class="bg-gradient-to-br from-[#7C3AED] via-[#8B5CF6] to-[#A855F7] rounded-2xl shadow-sm p-5 sm:p-6 text-white relative overflow-hidden">
                    {{-- Decorative circles --}}
                    <div class="absolute top-[-20%] right-[-10%] w-48 h-48 bg-white/5 rounded-full blur-2xl"></div>
                    <div class="absolute bottom-[-15%] left-[-5%] w-36 h-36 bg-white/5 rounded-full blur-2xl"></div>

                    <div class="relative z-10">
                        <h3 class="text-lg font-bold mb-2">Saldo Tersedia</h3>
                        <p class="text-3xl sm:text-4xl font-black mb-6">RP 900.000</p>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-purple-100/80">Pendapatan bulan ini</span>
                                <span class="text-sm font-bold">RP 1.900.000</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-purple-100/80">Sesi Selesai</span>
                                <span class="text-sm font-bold">38 Sesi</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-purple-100/80">Sudah Ditarik</span>
                                <span class="text-sm font-bold">RP 1.000.000</span>
                            </div>
                        </div>

                        <button class="w-full bg-[#FFC007] text-[#45069A] font-bold py-3 rounded-xl hover:bg-yellow-400 transition-colors duration-200 shadow-lg shadow-yellow-500/20 text-sm">
                            Tarik Saldo
                        </button>
                    </div>
                </div>
            </div>

            <!-- Daftar Murid & Materi/Tugas -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-8">
                <!-- Daftar Murid -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 sm:p-6">
                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-lg font-bold text-gray-900">Daftar Murid</h3>
                        <a href="#" class="text-sm text-[#7C3AED] font-semibold hover:text-[#6D28D9] transition-colors flex items-center gap-1">
                            Lihat Semua
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="space-y-3">
                        <!-- Murid 1 -->
                        <div class="flex items-center justify-between p-3 rounded-xl hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#F59E0B] to-[#F97316] flex items-center justify-center text-white font-bold text-xs flex-shrink-0">
                                    AS
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Aldi Firmansyah</span>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>

                        <!-- Murid 2 -->
                        <div class="flex items-center justify-between p-3 rounded-xl hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#3B82F6] to-[#6366F1] flex items-center justify-center text-white font-bold text-xs flex-shrink-0">
                                    BS
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Bintang Prasetyo</span>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>

                        <!-- Murid 3 -->
                        <div class="flex items-center justify-between p-3 rounded-xl hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-xs flex-shrink-0">
                                    NP
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Nadia Putri</span>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>

                        <!-- Murid 4 -->
                        <div class="flex items-center justify-between p-3 rounded-xl hover:bg-gray-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#EC4899] to-[#F43F5E] flex items-center justify-center text-white font-bold text-xs flex-shrink-0">
                                    RS
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Raisya Syifa</span>
                            </div>
                            <button class="text-xs font-semibold text-gray-500 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Materi & Tugas + Sesi Perminggu -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 sm:p-6">
                    <!-- Materi & Tugas Header -->
                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-lg font-bold text-gray-900">Materi & Tugas</h3>
                        <a href="#" class="text-sm text-[#7C3AED] font-semibold hover:text-[#6D28D9] transition-colors flex items-center gap-1">
                            + Tambah
                        </a>
                    </div>

                    <div class="space-y-3 mb-6">
                        <!-- Materi Item 1 -->
                        <div class="flex items-center justify-between p-3 bg-[#F5F3FF] rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-[#7C3AED] flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Persamaan Lingkaran</p>
                                    <p class="text-xs text-gray-400">Matematika · online</p>
                                </div>
                            </div>
                            <button class="text-xs font-semibold text-[#7C3AED] border border-[#7C3AED]/30 bg-white px-3 py-1.5 rounded-lg hover:bg-[#7C3AED] hover:text-white transition-colors">Buka</button>
                        </div>

                        <!-- Materi Item 2 -->
                        <div class="flex items-center justify-between p-3 bg-[#F5F3FF] rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-[#7C3AED] flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Tugas Getaran Dan Gelombang</p>
                                    <p class="text-xs text-gray-400">Fisika · Minggu ini</p>
                                </div>
                            </div>
                            <button class="text-xs font-semibold text-[#7C3AED] border border-[#7C3AED]/30 bg-white px-3 py-1.5 rounded-lg hover:bg-[#7C3AED] hover:text-white transition-colors">Buka</button>
                        </div>
                    </div>

                    <!-- Sesi Perminggu Chart -->
                    <h4 class="text-base font-bold text-gray-900 mb-4">Sesi Perminggu</h4>
                    <div class="flex items-end justify-between gap-3 px-1" style="height: 140px;">
                        <!-- Senin -->
                        <div class="flex flex-col items-center flex-1" style="height: 100%;">
                            <div style="flex: 1; display: flex; align-items: flex-end; width: 100%;">
                                <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 70%; max-width: 32px; margin: 0 auto; border-radius: 6px 6px 2px 2px;"></div>
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium mt-2">Senin</span>
                        </div>
                        <!-- Selasa -->
                        <div class="flex flex-col items-center flex-1" style="height: 100%;">
                            <div style="flex: 1; display: flex; align-items: flex-end; width: 100%;">
                                <div class="w-full rounded-t-lg bg-[#FFC007]" style="height: 55%; max-width: 32px; margin: 0 auto; border-radius: 6px 6px 2px 2px;"></div>
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium mt-2">Selasa</span>
                        </div>
                        <!-- Rabu -->
                        <div class="flex flex-col items-center flex-1" style="height: 100%;">
                            <div style="flex: 1; display: flex; align-items: flex-end; width: 100%;">
                                <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 85%; max-width: 32px; margin: 0 auto; border-radius: 6px 6px 2px 2px;"></div>
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium mt-2">Rabu</span>
                        </div>
                        <!-- Kamis -->
                        <div class="flex flex-col items-center flex-1" style="height: 100%;">
                            <div style="flex: 1; display: flex; align-items: flex-end; width: 100%;">
                                <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 100%; max-width: 32px; margin: 0 auto; border-radius: 6px 6px 2px 2px;"></div>
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium mt-2">Kamis</span>
                        </div>
                        <!-- Jumat -->
                        <div class="flex flex-col items-center flex-1" style="height: 100%;">
                            <div style="flex: 1; display: flex; align-items: flex-end; width: 100%;">
                                <div class="w-full rounded-t-lg bg-[#7C3AED]" style="height: 90%; max-width: 32px; margin: 0 auto; border-radius: 6px 6px 2px 2px;"></div>
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium mt-2">Jumat</span>
                        </div>
                        <!-- Sabtu -->
                        <div class="flex flex-col items-center flex-1" style="height: 100%;">
                            <div style="flex: 1; display: flex; align-items: flex-end; width: 100%;">
                                <div class="w-full rounded-t-lg bg-[#FFC007]" style="height: 40%; max-width: 32px; margin: 0 auto; border-radius: 6px 6px 2px 2px;"></div>
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium mt-2">Sabtu</span>
                        </div>
                        <!-- Minggu -->
                        <div class="flex flex-col items-center flex-1" style="height: 100%;">
                            <div style="flex: 1; display: flex; align-items: flex-end; width: 100%;">
                                <div class="w-full rounded-t-lg bg-[#FFC007]" style="height: 25%; max-width: 32px; margin: 0 auto; border-radius: 6px 6px 2px 2px;"></div>
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium mt-2">Minggu</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
