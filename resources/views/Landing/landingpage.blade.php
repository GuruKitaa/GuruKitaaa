<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Les Private</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-r from-purple-600 to-indigo-700 p-6 rounded-xl flex items-center justify-center h-screen flex-col Poppins">
    <div class="flex justify-center">
        <img src="{{ asset('images/GuruKita.png') }}" alt="" class="w-[909px] h-[217px]">
    </div>
    <div>
        <p class="text-white font-bold text-3xl text-center">
            Tingkatkan Prestasi Akademis dengan GuruKita: <br>
            Les Private yang Personal dan Profesional!
        </p>
        <div class="flex justify-center mt-10">
            <button class="bg-[#FFC007] w-56 h-16 rounded-lg" >
                <a href="/choose" class="text-[#45069A] font-bold text-3xl">MULAI</a>
            </button>
        </div>
    </div>
</div>