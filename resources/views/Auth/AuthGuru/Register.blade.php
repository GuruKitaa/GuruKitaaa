<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex justify-center items-center h-screen p-12 Poppins">
        <div class="flex justify-center items-center">
            <div class="bg-[#8224CC] w-[1280px] h-[661px] rounded-2xl flex items-center  gap-20">
                <div class="w-[500px] h-full bg-[#9747FF] rounded-2xl flex items-center justify-center flex-col  ">
                    <div>
                        <img src="{{ asset('images/GuruKita.png') }}" alt="" class="mt-4 opacity-30 ">
                    </div>
                    <img src="{{ asset('images/Teacher.png') }}" alt="" class="w-[800px] h-[800px] ">
                </div>

                <div class="flex flex-col gap-10">
                    <h1 class="text-white font-bold text-4xl mt-5 text-center">SIGN UP</h1>
                    <input type="text" placeholder="MASUKAN EMAIL / NOMOR TELEPON"
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">
                    <input type="password" placeholder="MASUKAN KATA SANDI"class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">
                    <input type="password" placeholder="MASUKAN KATA SANDI KEMBALI"class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">

                    <button
                        class="bg-[#FFC007] w-[472px] h-[68px] rounded-2xl text-[#45069A] font-bold text-2xl">SIGN UP</button>

                    <div>
                        <p class="text-center text-white">BELUM PUNYA AKUN? <a href="/login-guru" class="">SIGN IN!</a></p>
                    </div>
                </div>


            </div>

        </div>
    </div>
</body>

</html>
