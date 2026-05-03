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
                    Artikel
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#6B21A8] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Right Side: Bell, Cart, Profile -->
            <div class="hidden md:flex items-center space-x-5">
                <!-- Bell / Notification Icon -->
                <button class="relative text-gray-500 hover:text-[#6B21A8] transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    {{-- Notification dot --}}
                    <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>

                <!-- Cart Icon -->
                <button class="relative text-gray-500 hover:text-[#6B21A8] transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z" />
                    </svg>
                </button>

                <!-- Divider -->
                <div class="w-px h-8 bg-gray-200"></div>

                <!-- User Profile -->
                <div class="flex items-center space-x-3 cursor-pointer group">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-[#7C3AED] to-[#A855F7] flex items-center justify-center text-white font-bold text-xs shadow-md">
                        RA
                    </div>
                    <span class="text-sm font-semibold text-[#2D2D2D] group-hover:text-[#6B21A8] transition-colors duration-200">Raisha S.</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
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
