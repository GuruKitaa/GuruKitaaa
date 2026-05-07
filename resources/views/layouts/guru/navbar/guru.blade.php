<nav class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo Section -->
            <div class="flex items-center flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/GuruKita1.png') }}" alt="GuruKita Logo" class="h-8 w-auto">
                </a>
            </div>

            <!-- Navigation Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-[#2D2D2D] hover:text-[#6B21A8] font-semibold text-sm transition-all duration-300 relative group">
                    Beranda
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#6B21A8] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-[#2D2D2D] hover:text-[#6B21A8] font-semibold text-sm transition-all duration-300 relative group">
                    Cari Guru
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#6B21A8] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-[#2D2D2D] hover:text-[#6B21A8] font-semibold text-sm transition-all duration-300 relative group">
                    Pelatihan
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#6B21A8] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-[#2D2D2D] hover:text-[#6B21A8] font-semibold text-sm transition-all duration-300 relative group">
                    Info Lomba
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#6B21A8] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-[#2D2D2D] hover:text-[#6B21A8] font-semibold text-sm transition-all duration-300 relative group">
                    Artikel
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#6B21A8] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Right Side: Bell, Heart, Profile -->
            <div class="hidden md:flex items-center space-x-5">
                <!-- Bell / Notification Icon -->
                <button class="relative text-gray-500 hover:text-[#6B21A8] transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>

                <!-- Heart Icon -->
                <button class="text-gray-500 hover:text-red-500 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- User Profile -->
                <div class="flex items-center space-x-2 bg-gray-100 rounded-full pl-1 pr-4 py-1 cursor-pointer hover:bg-gray-200 transition-all duration-200">
                    <img src="https://ui-avatars.com/api/?name=Raisha+S&background=333&color=fff" class="w-9 h-9 rounded-full shadow-sm">
                    <span class="text-sm font-semibold text-[#2D2D2D]">Raisha S.</span>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex md:hidden items-center space-x-3">
                <!-- Bell mobile -->
                <button class="relative text-gray-500 hover:text-[#6B21A8] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <!-- Hamburger -->
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-4 pt-3 pb-4 space-y-2 bg-white border-t border-gray-100">
            <a href="/" class="block px-3 py-2.5 text-sm font-semibold text-gray-700 hover:text-[#6B21A8] hover:bg-purple-50 rounded-lg transition-colors">Beranda</a>
            <a href="#" class="block px-3 py-2.5 text-sm font-semibold text-gray-700 hover:text-[#6B21A8] hover:bg-purple-50 rounded-lg transition-colors">Cari Guru</a>
            <a href="#" class="block px-3 py-2.5 text-sm font-semibold text-gray-700 hover:text-[#6B21A8] hover:bg-purple-50 rounded-lg transition-colors">Pelatihan</a>
            <a href="#" class="block px-3 py-2.5 text-sm font-semibold text-gray-700 hover:text-[#6B21A8] hover:bg-purple-50 rounded-lg transition-colors">Info Lomba</a>
            <a href="#" class="block px-3 py-2.5 text-sm font-semibold text-gray-700 hover:text-[#6B21A8] hover:bg-purple-50 rounded-lg transition-colors">Artikel</a>
            <div class="border-t border-gray-100 pt-3 mt-2">
                <div class="flex items-center px-3 py-2">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-xs shadow-md">
                        RA
                    </div>
                    <span class="ml-3 text-sm font-semibold text-[#2D2D2D]">Raisha S.</span>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
