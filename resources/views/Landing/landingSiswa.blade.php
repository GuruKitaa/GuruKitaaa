<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="poppins">
      @include('layouts.guru.navbar.guru')
      <div class="bg-[#45069A] w-[1920px] h-[437px]">
        <div class="p-20 flex flex-row">
            <div class="flex flex-col">
                <h1 class="text-white font-bold text-5xl">
                    Tingkatkan Prestasi Akademis <br/>
                    dengan GuruKita:Les Private yang <br/>
                     Personal dan Profesional!
                </h1>
                <p class="text-white mt-8">
                    Temukan Pelajaran yang Lebih Dekat, Belajar Lebih Intensif - <br/>
                    Temukan Guru Les Private Terbaik di GuruKita!
                </p>
            </div>
            {{-- <div class="flex justify-end">
                <img src="{{ asset('images/images-header.png') }}" alt="" class="w-[536px] h-[481px]">
            </div> --}}
        </div>
      </div>
      <div class="p-20">
        <h1 class="text-3xl font-semibold">
            Pilih mapel yang ingin kamu pelajari
        </h1>
        <div class="flex flex-row gap-20">
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/math 1.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Matematika</p>
            </div>
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/biologi.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Biologi/Fisika</p>
            </div>
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/bahasa.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Bahasa indonesia</p>
            </div>
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/inggris.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Bahasa Inggris</p>
            </div>
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/sejarah.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Sejarah</p>
            </div>
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/sosial.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Ilmu Sosial</p>
            </div>
        </div>
        <div class="flex flex-row gap-16">
            <div class="items-center justify-center">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/pkn.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold ">Pendidikan <br/>
                    Kewarganegaraan</p>
            </div>
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/teknologi.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Teknologi Komputer</p>
            </div>
            <div class="">
                <div class="w-[100px] h-[100px] bg-[#45069A] m-4 rounded-full flex justify-center items-center mt-10">
                    <img src="{{ asset('images/budaya.png') }}" alt="" class="w-[65px] h-[65px]">
                </div>
                <p class="text-2xl font-semibold">Seni Budaya</p>
            </div>
        </div>
      </div>
</body>
</html>
