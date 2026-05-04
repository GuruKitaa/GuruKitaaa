<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Guru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="font-poppins bg-[#F3F4F6] min-h-screen">

    @include('layouts.guru.navbar.guru')

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- LEFT -->
            <div class="lg:col-span-2 space-y-6">

                <!-- CARD -->
                <div class="bg-purple-700 rounded-2xl p-6 flex flex-col md:flex-row gap-6 text-white">

                    <div class="bg-purple-500 rounded-2xl p-4 flex items-center justify-center">
                        <img src="https://placehold.co/327x522" class="w-48 md:w-60 rounded-xl">
                    </div>

                    <div class="flex flex-col gap-2">
                        <h1 class="text-2xl md:text-3xl font-semibold">Azizi Shafa A.</h1>

                        <p class="text-sm">Guru Matematika</p>
                        <p class="text-sm">25 Murid Aktif</p>
                        <p class="text-sm">Bahasa Indonesia</p>

                        <p class="text-sm md:text-base mt-3 max-w-xl">
                            Halo semuanya! Saya Azizi Shafaa Ashadel, guru matematika dengan pengalaman mengajar selama 3 tahun.
                            Saya bersemangat dalam menjelaskan konsep matematika secara terstruktur dan membantu siswa berkembang.
                        </p>
                    </div>

                </div>

                <!-- PENGALAMAN -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <h2 class="text-xl md:text-2xl font-semibold mb-4">Pengalaman</h2>

                    <p class="text-sm md:text-base text-gray-700 text-justify">
                        Sebagai guru matematika, Azizi mampu menyederhanakan materi kompleks menjadi mudah dipahami.
                        <br><br>
                        Ia juga membangun hubungan kuat dengan siswa dan memberikan pendekatan empatik dalam pembelajaran.
                    </p>
                </div>

                <!-- IMAGE -->
                <div>
                    <img src="https://placehold.co/1146x715" class="rounded-xl w-full">
                </div>

            </div>

            <div class="lg:col-span-1">

                <!-- RIGHT -->
                <div class="bg-gradient-to-b from-purple-600 to-purple-900 rounded-2xl p-4 h-full">

                    <!-- CARD-->
                    <div class="bg-purple-500 rounded-2xl p-6 gap-6 text-white text-center">

                        <img src="https://placehold.co/409x285" class="rounded-xl mb-4 w-full">

                        <h2 class="text-2xl font-bold mt-2">RP. 50.000</h2>

                        <p class="text-sm">50 Menit Setiap Sesi</p>

                        <button class="w-full bg-yellow-400 text-purple-900 font-bold py-3 rounded-xl mt-6">
                            RESERVASI
                        </button>

                        <button class="w-full bg-purple-900 text-white font-bold py-3 rounded-xl mt-4">
                            KIRIM PESAN
                        </button>

                    </div>

                </div>

            </div>
        </div>

    </div>
    @include('layouts.footer.footer')

</div>
</body>
</html>