<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Guru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="font-poppins bg-[#F3F4F6] min-h-screen">

    <!-- NAVBAR (WAJIB SAMA DASHBOARD) -->
    @include('layouts.guru.navbar.guru')

    <!-- HERO -->
    <div class="bg-gradient-to-r from-purple-900 to-purple-500 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h1 class="text-2xl md:text-4xl font-extrabold max-w-2xl">
                Tingkatkan Prestasi Akademis dengan GuruKita: Les Private yang Personal dan Profesional!
            </h1>

            <p class="mt-4 text-sm md:text-base max-w-xl">
                Temukan Pelajaran yang Lebih Dekat, Belajar Lebih Intensif - Temukan Guru Les Private Terbaik di GuruKita!
            </p>

        </div>
    </div>

    <!-- SEARCH -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="bg-white rounded-2xl shadow p-4 flex items-center">
            <input type="text" placeholder="Cari berdasarkan nama"
                class="w-full outline-none text-lg px-2">
        </div>
    </div>

    <!-- TITLE -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <h2 class="text-2xl md:text-3xl font-bold">
            Temukan Guru Les sesuai kebutuhan mu
        </h2>
    </div>

    <!-- LIST GURU -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">

        <!-- CARD 1 -->
        <div class="bg-purple-700 rounded-2xl p-6 flex flex-col md:flex-row gap-6 text-white">

            <div class="bg-purple-500 rounded-2xl p-4 flex items-center justify-center">
                <img src="https://placehold.co/327x522" class="w-48 md:w-60 rounded-xl">
            </div>

            <div class="flex flex-col gap-2 flex-1">
                <h2 class="text-xl md:text-2xl font-semibold">Azizi Shafa A.</h2>

                <p class="text-sm">Guru Matematika</p>
                <p class="text-sm">25 Murid Aktif</p>
                <p class="text-sm">Bahasa Indonesia</p>

                <p class="text-sm md:text-base mt-2 max-w-xl">
                    Halo semuanya! Saya Azizi Shafaa Ashadel, guru matematika dengan pengalaman mengajar selama 3 tahun.
                </p>
            </div>

            <!-- ACTION -->
            <div class="flex flex-col justify-center gap-3">
                <a href="/detail-guru"
                   class="bg-yellow-400 text-purple-900 font-bold px-6 py-2 rounded-lg text-center">
                    RESERVASI
                </a>

                <button class="bg-white text-purple-900 font-bold px-6 py-2 rounded-lg">
                    KIRIM PESAN
                </button>
            </div>

        </div>

        <!-- CARD 2 -->
        <div class="bg-purple-700 rounded-2xl p-6 flex flex-col md:flex-row gap-6 text-white">

            <div class="bg-purple-500 rounded-2xl p-4 flex items-center justify-center">
                <img src="https://placehold.co/327x522" class="w-48 md:w-60 rounded-xl">
            </div>

            <div class="flex flex-col gap-2 flex-1">
                <h2 class="text-xl md:text-2xl font-semibold">Shania Gracia H.</h2>

                <p class="text-sm">Guru Matematika</p>
                <p class="text-sm">27 Murid Aktif</p>
                <p class="text-sm">Bahasa Indonesia</p>

                <p class="text-sm md:text-base mt-2 max-w-xl">
                    Guru matematika berpengalaman 4 tahun dengan metode belajar interaktif.
                </p>
            </div>

            <div class="flex flex-col justify-center gap-3">
                <a href="/detail-guru"
                   class="bg-yellow-400 text-purple-900 font-bold px-6 py-2 rounded-lg text-center">
                    RESERVASI
                </a>

                <button class="bg-white text-purple-900 font-bold px-6 py-2 rounded-lg">
                    KIRIM PESAN
                </button>
            </div>

        </div>

        <!-- TAMBAH CARD LAIN TINGGAL COPY -->

    </div>

    <!-- FOOTER -->
    @include('layouts.footer.footer')

</div>
</body>
</html>