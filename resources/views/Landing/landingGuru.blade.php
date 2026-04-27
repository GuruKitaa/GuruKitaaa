<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="font-poppins bg-[#F8F9FA] min-h-screen">
        @include('layouts.guru.navbar.guru')
        
        <!-- Hero Section -->
        <div class="bg-[#45069A] pt-12 pb-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute top-[-10%] right-[-5%] w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto relative z-10">
                <h1 class="text-white font-extrabold text-5xl md:text-6xl tracking-tight leading-tight">
                    Selamat Datang
                </h1>
                <p class="text-purple-100/80 font-medium mt-4 text-lg max-w-2xl">
                    Berikut ringkasan aktivitasmu hari ini. Teruslah menginspirasi murid-muridmu!
                </p>
                
                <div class="mt-10 flex flex-wrap gap-4">
                    <div class="bg-[#FFC007] px-6 py-3 rounded-2xl shadow-xl shadow-yellow-500/20 flex items-center gap-3">
                        <div class="w-2 h-2 bg-[#45069A] rounded-full animate-pulse"></div>
                        <span class="text-[#45069A] font-bold text-lg">3 Sesi Hari Ini</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 px-6 py-3 rounded-2xl flex items-center gap-3">
                        <span class="text-white font-bold text-lg">12 Murid Aktif</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 px-6 py-3 rounded-2xl flex items-center gap-3">
                        <span class="text-white font-bold text-lg">Rating 4.9</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Total Murid Card -->
                <div class="bg-white rounded-[32px] shadow-2xl shadow-purple-900/10 overflow-hidden border border-white flex flex-col group transition-all duration-300 hover:shadow-purple-900/20 mt-20">
                    <!-- Top accent bar -->
                    <div class="h-3 bg-[#45069A]"></div>
                    
                    <div class="p-8 md:p-10 flex flex-col sm:flex-row items-center gap-8 md:gap-12">
                        <!-- Image Wrapper -->
                        <div class="w-full sm:w-1/2 aspect-square bg-[#F3F0FF] rounded-[24px] flex items-center justify-center p-6 transition-transform duration-500 group-hover:scale-105">
                            <img src="{{ asset('images/Frame 30.png') }}" alt="Student" class="w-full h-full object-contain">
                        </div>

                        <!-- Stats Wrapper -->
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left flex-1">
                            <h2 class="text-[#45069A]/70 text-2xl font-bold uppercase tracking-widest mb-1">Total</h2>
                            <h3 class="text-[#1A1A1A] text-4xl font-extrabold italic mb-6">Murid</h3>
                            <span class="text-[#1A1A1A] text-8xl md:text-9xl font-black tabular-nums leading-none">12</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-[32px] shadow-2xl shadow-purple-900/10 overflow-hidden border border-white flex flex-col group transition-all duration-300 hover:shadow-purple-900/20 mt-20">
                    <!-- Top accent bar -->
                    <div class="h-3 bg-[#45069A]"></div>
                    
                    <div class="p-8 md:p-10 flex flex-col sm:flex-row items-center gap-8 md:gap-12">
                        <!-- Image Wrapper -->
                        <div class="w-full sm:w-1/2 aspect-square bg-[#F3F0FF] rounded-[24px] flex items-center justify-center p-6 transition-transform duration-500 group-hover:scale-105">
                            <img src="{{ asset('images/Frame 30.png') }}" alt="Student" class="w-full h-full object-contain">
                        </div>

                        <!-- Stats Wrapper -->
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left flex-1">
                            <h2 class="text-[#45069A]/70 text-2xl font-bold uppercase tracking-widest mb-1">Total</h2>
                            <h3 class="text-[#1A1A1A] text-4xl font-extrabold italic mb-6">Murid</h3>
                            <span class="text-[#1A1A1A] text-8xl md:text-9xl font-black tabular-nums leading-none">12</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-[32px] shadow-2xl shadow-purple-900/10 overflow-hidden border border-white flex flex-col group transition-all duration-300 hover:shadow-purple-900/20 mt-20">
                    <!-- Top accent bar -->
                    <div class="h-3 bg-[#45069A]"></div>
                    
                    <div class="p-8 md:p-10 flex flex-col sm:flex-row items-center gap-8 md:gap-12">
                        <!-- Image Wrapper -->
                        <div class="w-full sm:w-1/2 aspect-square bg-[#F3F0FF] rounded-[24px] flex items-center justify-center p-6 transition-transform duration-500 group-hover:scale-105">
                            <img src="{{ asset('images/Frame 30.png') }}" alt="Student" class="w-full h-full object-contain">
                        </div>

                        <!-- Stats Wrapper -->
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left flex-1">
                            <h2 class="text-[#45069A]/70 text-2xl font-bold uppercase tracking-widest mb-1">Total</h2>
                            <h3 class="text-[#1A1A1A] text-4xl font-extrabold italic mb-6">Murid</h3>
                            <span class="text-[#1A1A1A] text-8xl md:text-9xl font-black tabular-nums leading-none">12</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-[32px] shadow-2xl shadow-purple-900/10 overflow-hidden border border-white flex flex-col group transition-all duration-300 hover:shadow-purple-900/20 mt-20">
                    <!-- Top accent bar -->
                    <div class="h-3 bg-[#45069A]"></div>
                    
                    <div class="p-8 md:p-10 flex flex-col sm:flex-row items-center gap-8 md:gap-12">
                        <!-- Image Wrapper -->
                        <div class="w-full sm:w-1/2 aspect-square bg-[#F3F0FF] rounded-[24px] flex items-center justify-center p-6 transition-transform duration-500 group-hover:scale-105">
                            <img src="{{ asset('images/Frame 30.png') }}" alt="Student" class="w-full h-full object-contain">
                        </div>

                        <!-- Stats Wrapper -->
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left flex-1">
                            <h2 class="text-[#45069A]/70 text-2xl font-bold uppercase tracking-widest mb-1">Total</h2>
                            <h3 class="text-[#1A1A1A] text-4xl font-extrabold italic mb-6">Murid</h3>
                            <span class="text-[#1A1A1A] text-8xl md:text-9xl font-black tabular-nums leading-none">12</span>
                        </div>
                    </div>
                </div>

                <!-- Placeholder for next card -->
                <div class="hidden md:block">
                    <!-- You can add another card here -->
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>