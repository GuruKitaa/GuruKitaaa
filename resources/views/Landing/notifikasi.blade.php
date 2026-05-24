<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKita - Notifikasi</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.guru.navbar.guru')
    
    <div class="p-10 Poppins">

    <!-- TITLE -->
    <h1 class="text-4xl font-bold text-black mb-10">

        Notifikasi

    </h1>

    <!-- CONTAINER -->
    <div class="flex flex-col gap-8">

        <!-- CARD 1 -->
        <div class="bg-[#EFEFEF] border border-[#8F8E94] rounded-2xl px-8 py-6 flex justify-between items-start relative">

            <div class="flex flex-col gap-5">

                <div>

                    <h2 class="font-bold text-lg text-black">

                        TUGAS BARU!

                    </h2>

                </div>

                <div>

                    <p class="font-bold text-lg text-black">

                        TUGAS BARU DENGAN JUDUL:
                        Latihan Persamaan Lingkaran - Set A
                        TELAH DITAMBAHKAN!

                    </p>

                </div>

                <div>

                    <span class="text-[#8F8E94] font-bold text-sm">

                        17 Agustus 2024

                    </span>

                </div>

            </div>

            <div class="flex flex-col items-end justify-between h-full">

                <!-- NOTIF DOT -->
                <div class="w-4 h-4 rounded-full bg-[#8224CC]"></div>

                <span class="text-[#8F8E94] font-bold text-sm mt-16">

                    19:00

                </span>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="bg-[#EFEFEF] border border-[#8F8E94] rounded-2xl px-8 py-6 flex justify-between items-start">

            <div class="flex flex-col gap-5">

                <h2 class="font-bold text-lg text-black">

                    MATERI BARU!

                </h2>

                <p class="font-bold text-lg text-black">

                    MATERI BARU DENGAN JUDUL:
                    Latihan Persamaan Lingkaran - Set A
                    TELAH DITAMBAHKAN!

                </p>

                <span class="text-[#8F8E94] font-bold text-sm">

                    17 Agustus 2024

                </span>

            </div>

            <span class="text-[#8F8E94] font-bold text-sm">

                19:00

            </span>

        </div>

        <!-- CARD 3 -->
        <div class="bg-[#EFEFEF] border border-[#8F8E94] rounded-2xl px-8 py-6 flex justify-between items-start">

            <div class="flex flex-col gap-5">

                <h2 class="font-bold text-lg text-black">

                    SESI LES AKAN SEGERA DIMULAI!

                </h2>

                <p class="font-bold text-lg text-black">

                    SESI LES MU DENGAN GURU:
                    AZIZI ASADEL AKAN SEGERA DIMULAI!

                </p>

                <span class="text-[#8F8E94] font-bold text-sm">

                    17 Agustus 2024

                </span>

            </div>

            <span class="text-[#8F8E94] font-bold text-sm">

                19:00

            </span>

        </div>

        <!-- CARD 4 -->
        <div class="bg-[#EFEFEF] border border-[#8F8E94] rounded-2xl px-8 py-6 flex justify-between items-start">

            <div class="flex flex-col gap-5">

                <h2 class="font-bold text-lg text-black">

                    RESERVASI GURU LES BERHASIL

                </h2>

                <p class="font-bold text-lg text-black">

                    PEMBAYARAN BERHASIL,
                    RESERVASI GURU LES:
                    AZIZI AZADEL BERHASIL

                </p>

                <span class="text-[#8F8E94] font-bold text-sm">

                    17 Agustus 2024

                </span>

            </div>

            <span class="text-[#8F8E94] font-bold text-sm">

                17:00

            </span>

        </div>

    </div>

    </div>

    @include('layouts.footer.footer')
</body>
</html>