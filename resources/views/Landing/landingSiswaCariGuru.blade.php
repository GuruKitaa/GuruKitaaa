<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guru kita - Cari Guru</title>
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

        <form method="GET" action="/cari-guru">

            <div class="bg-white rounded-2xl shadow p-4 flex items-center">

                <input
                    type="text"
                    name="search"
                    value="{{ $search ?? '' }}"
                    placeholder="Cari berdasarkan nama"
                    class="w-full outline-none text-lg px-2"
                >

                <button
                    type="submit"
                    class="bg-purple-700 text-white px-6 py-2 rounded-lg">

                    Cari

                </button>

            </div>

        </form>

    </div>

    <!-- TITLE -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <h2 class="text-2xl md:text-3xl font-bold">
            Temukan Guru Les sesuai kebutuhan mu
        </h2>
    </div>

    <!-- LIST GURU -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">
        @foreach($gurus as $guru)

    <div class="bg-purple-700 rounded-2xl p-6 flex flex-col md:flex-row gap-6 text-white">

        <!-- FOTO -->
        <div class="bg-purple-500 rounded-2xl p-4 flex items-center justify-center">

            <img
                src="https://placehold.co/327x522"
                class="w-48 md:w-60 rounded-xl"
            >

        </div>

        <!-- DATA GURU -->
        <div class="flex flex-col gap-2 flex-1">

            <!-- NAMA -->
            <h2 class="text-xl md:text-2xl font-semibold">
                {{ $guru->user->name }}
            </h2>

            <!-- KEAHLIAN -->
            <p class="text-sm">
                Guru {{ $guru->keahlian }}
            </p>

            <!-- RATING -->
            <p class="text-sm">
                Rating {{ $guru->rating_avg }}
            </p>

            <!-- BIO -->
            <p class="text-sm md:text-base mt-2 max-w-xl">
                {{ $guru->bio }}
            </p>

        </div>

        <!-- BUTTON -->
        <div class="flex flex-col justify-center gap-3">

            <a href="/detail-guru/{{ $guru->id }}"
            class="bg-yellow-400 text-purple-900 font-bold px-6 py-2 rounded-lg text-center">

                RESERVASI

            </a>

            <button class="bg-white text-purple-900 font-bold px-6 py-2 rounded-lg">

                KIRIM PESAN

            </button>

        </div>

    </div>

    @endforeach
    </div>

    <!-- FOOTER -->
    @include('layouts.footer.footer')

</div>
</body>
</html>