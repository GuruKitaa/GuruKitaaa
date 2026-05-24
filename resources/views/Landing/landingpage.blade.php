<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>GuruKita - Les Private</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        /* =========================
           ANIMATION
        ========================== */

        @keyframes fadeUp {

            from {

                opacity: 0;
                transform: translateY(80px);

            }

            to {

                opacity: 1;
                transform: translateY(0);

            }

        }

        @keyframes fadeButton {

            from {

                opacity: 0;
                transform: translateY(30px);

            }

            to {

                opacity: 1;
                transform: translateY(0);

            }

        }

        /* =========================
           LOGO
        ========================== */

        .fade-logo {

            opacity: 0;

            animation: fadeUp 1.5s cubic-bezier(0.22, 1, 0.36, 1) forwards;

        }

        /* =========================
           DESCRIPTION
        ========================== */

        .fade-desc {

            opacity: 0;

            animation: fadeUp 1.5s cubic-bezier(0.22, 1, 0.36, 1) forwards;

            animation-delay: 0.8s;

        }

        /* =========================
           BUTTON
        ========================== */

        .fade-button {

            opacity: 0;

            animation: fadeButton 1s ease forwards;

            animation-delay: 1.6s;

        }

    </style>

</head>

<body class="bg-gradient-to-r from-purple-600 to-indigo-700 p-6 rounded-xl flex items-center justify-center h-screen flex-col Poppins">

    <!-- LOGO -->
    <div class="flex justify-center fade-logo">

        <img
            src="{{ asset('images/GuruKita.png') }}"
            alt=""
            class="w-[909px] h-[217px]"
        >

    </div>

    <!-- DESCRIPTION -->
    <div class="fade-desc">

        <p class="text-white font-bold text-3xl text-center">

            Tingkatkan Prestasi Akademis dengan GuruKita: <br>
            Les Private yang Personal dan Profesional!

        </p>

        <!-- BUTTON -->
        <div class="flex justify-center mt-10">

            <a
                href="/choose"
                class="fade-button bg-[#FFC007] w-56 h-16 rounded-lg flex items-center justify-center text-[#45069A] font-bold text-3xl transition-all duration-500 hover:opacity-80 hover:shadow-[0_0_30px_rgba(255,192,7,0.8)]"
            >

                MULAI

            </a>

        </div>

    </div>

</body>

</html>