<!-- STYLE INLINE PRITE -->
<style>
    .sprite {
        width: 24px;
        height: 24px;
        background-image: url('/images/mini-icon-footer.png');
        background-repeat: no-repeat;
    }

    .icon-1 { background-position: 0px 0px; }
    .icon-2 { background-position: -24px 0px; }
    .icon-3 { background-position: -48px 0px; }
    .icon-4 { background-position: -72px 0px; }
</style>

<div class="bg-gray-200 px-6 sm:px-10 lg:px-20 py-12">

    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between gap-10">

        <!-- LEFT -->
        <div class="max-w-sm">
            <h1 class="text-2xl font-bold text-purple-600 mb-4">Gurukita</h1>
            <h2 class="font-semibold mb-2">Platform Les Privat Personal dan Profesional</h2>
            <p class="text-sm text-gray-700">
                Gurukita: Tingkatkan Prestasi Akademis dengan layanan les privat yang personal dan profesional!
            </p>
        </div>

        <!-- MENU -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-10">

            <div>
                <h3 class="font-semibold mb-4">Product</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>Guru Les</li>
                    <li>Info Pelatihan</li>
                    <li>Info Perlombaan</li>
                    <li>Artikel</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Use Cases</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>Siswa & Siswi</li>
                    <li>Mahasiswa</li>
                    <li>Pengajar</li>
                    <li>Masyarakat</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Company</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>About Us</li>
                    <li>Careers</li>
                    <li>FAQs</li>
                    <li>Teams</li>
                    <li>Contact Us</li>
                </ul>
            </div>

        </div>

        <!-- ICON SPRITE -->
        @php
            $icons = ['icon-1', 'icon-2', 'icon-3', 'icon-4'];
        @endphp

        <div class="flex lg:flex-col gap-4 items-center justify-center">

            @foreach ($icons as $icon)
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow hover:scale-110 transition">
                    <div class="sprite {{ $icon }}"></div>
                </div>
            @endforeach

        </div>
        
    </div>

    <!-- COPYRIGHT -->
    <p class="text-center text-xs mt-10 text-gray-600">
        © 2026 All Rights Reserved
    </p>

</div>