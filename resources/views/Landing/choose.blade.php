<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Choose</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        /* =========================
           PAGE TRANSITION
        ========================== */

        body {

            opacity: 0;

            animation: fadePage 1.5s ease forwards;

        }

        @keyframes fadePage {

            from {

                opacity: 0;
                transform: translateY(20px);

            }

            to {

                opacity: 1;
                transform: translateY(0);

            }

        }

    </style>

</head>

<body>

    <div class="p-20">

        <h1 class="text-[#45069A] font-bold text-3xl">

            PILIH TIPE AKUNMU:

        </h1>

        <div class="flex justify-center flex-row gap-20 mt-24">

            <!-- SISWA -->
            <a
                href="/login-siswa"
                class="bg-[#8224CC] w-80 h-80 mt-5 rounded-2xl text-center flex items-center justify-center flex-col transition-all duration-500 hover:-translate-y-4 hover:shadow-[0_0_40px_rgba(130,36,204,0.6)] hover:bg-[#9333EA]"
            >

                <h1 class="text-white font-bold text-3xl mt-7">

                    MURID

                </h1>

                <img
                    src="{{ asset('images/Student.png') }}"
                    alt=""
                    class="w-70 h-70 transition-all duration-500 hover:drop-shadow-[0_0_20px_rgba(255,255,255,0.7)]"
                >

            </a>

            <!-- GURU -->
            <a
                href="/login-guru"
                class="bg-[#8224CC] w-80 h-80 mt-5 rounded-2xl text-center flex items-center justify-center flex-col transition-all duration-500 hover:-translate-y-4 hover:shadow-[0_0_40px_rgba(130,36,204,0.6)] hover:bg-[#9333EA]"
            >

                <h1 class="text-white font-bold text-3xl mt-7">

                    GURU

                </h1>

                <img
                    src="{{ asset('images/Teacher.png') }}"
                    alt=""
                    class="w-70 h-70 transition-all duration-500 hover:drop-shadow-[0_0_20px_rgba(255,255,255,0.7)]"
                >

            </a>

        </div>

    </div>

</body>

</html>