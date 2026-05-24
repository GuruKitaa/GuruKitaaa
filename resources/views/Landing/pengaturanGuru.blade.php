<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pengaturan Guru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#F5F5F5] Poppins min-h-screen">

    @include('layouts.guru.navbar.guru')

    <!-- HEADER -->
    <div class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] px-16 py-14">

        <h1 class="text-white text-5xl font-extrabold italic">

            Pengaturan Profile

        </h1>

        <p class="text-purple-100 text-lg mt-3">

            Kelola informasi profile guru Anda

        </p>

    </div>

    <!-- CONTENT -->
    <div class="max-w-5xl mx-auto py-14 px-6">

        <!-- SUCCESS -->
        @if(session('success'))

            <div class="bg-green-500 text-white px-6 py-4 rounded-2xl mb-8 shadow-lg">

                {{ session('success') }}

            </div>

        @endif

        <!-- ERROR -->
        @if($errors->any())

            <div class="bg-red-500 text-white px-6 py-4 rounded-2xl mb-8 shadow-lg">

                <ul class="list-disc pl-5">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-xl p-10 border border-gray-200">

            <form
                action="/pengaturan-guru"
                method="POST"
                enctype="multipart/form-data"
                class="flex flex-col gap-8"
            >

                @csrf

                <!-- FOTO PROFILE -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Foto Profile

                    </label>

                    <div class="flex items-center gap-6">

                        <img
                            src="{{ asset('images/Teacher.png') }}"
                            alt=""
                            class="w-32 h-32 rounded-full object-cover border-4 border-purple-300 shadow-lg"
                        >

                        <input
                            type="file"
                            name="foto"
                            class="border border-gray-300 rounded-2xl px-5 py-3 w-full"
                        >

                    </div>

                </div>

                <!-- NAMA -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Nama Lengkap

                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ $guru->user->name }}"
                        placeholder="Masukkan nama lengkap"
                        class="w-full border border-gray-300 rounded-2xl px-6 py-4 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all duration-300"
                    >

                </div>

                <!-- EMAIL -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Email

                    </label>

                    <input
                        type="email"
                        value="{{ $guru->user->email }}"
                        disabled
                        class="w-full bg-gray-100 border border-gray-300 rounded-2xl px-6 py-4 text-gray-500 cursor-not-allowed"
                    >

                </div>

                <!-- KEAHLIAN -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Keahlian

                    </label>

                    <input
                        type="text"
                        name="keahlian"
                        value="{{ $guru->keahlian }}"
                        placeholder="Contoh: Matematika, Fisika, Kimia"
                        class="w-full border border-gray-300 rounded-2xl px-6 py-4 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all duration-300"
                    >

                </div>

                <!-- HARGA -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Harga Les/Jam

                    </label>

                    <input
                        type="number"
                        name="harga_les"
                        value="{{ (int) $guru->harga_les }}"
                        placeholder="Masukkan harga les"
                        class="w-full border border-gray-300 rounded-2xl px-6 py-4 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all duration-300"
                    >

                </div>

                <!-- NO HP -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Nomor Telepon

                    </label>

                    <input
                        type="text"
                        name="telepon"
                        value="{{ $guru->telepon }}"
                        placeholder="Masukkan nomor telepon"
                        class="w-full border border-gray-300 rounded-2xl px-6 py-4 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all duration-300"
                    >

                </div>

                <!-- BIO -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Biografi

                    </label>

                    <textarea
                        name="bio"
                        rows="6"
                        placeholder="Ceritakan tentang pengalaman mengajar Anda"
                        class="w-full border border-gray-300 rounded-2xl px-6 py-4 resize-none focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all duration-300"
                    >{{ $guru->bio }}</textarea>

                </div>

                <!-- REKENING -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Rekening

                    </label>

                    <input
                        type="text"
                        name="rekening"
                        value="{{ (int) $guru->rekening }}"
                        placeholder="Contoh: 331424555"
                        class="w-full border border-gray-300 rounded-2xl px-6 py-4 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all duration-300"
                    >

                </div>

                <!-- Saldo -->
                <div class="flex flex-col gap-3">

                    <label class="text-[#45069A] font-bold text-xl">

                        Saldo

                    </label>

                    <input
                        type="number"
                        name="saldo"
                        value="{{ $guru->saldo }}"
                        placeholder="Contoh: 1000000"
                        class="w-full border border-gray-300 rounded-2xl px-6 py-4 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all duration-300"
                    >

                </div>

                <!-- BUTTON -->
                <button
                    type="submit"
                    class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] text-white font-bold text-xl py-5 rounded-2xl shadow-lg hover:opacity-90 hover:scale-[1.01] transition-all duration-300"
                >

                    Simpan Perubahan

                </button>

            </form>

        </div>

    </div>

    @include('layouts.footer.footer')

</body>

</html>