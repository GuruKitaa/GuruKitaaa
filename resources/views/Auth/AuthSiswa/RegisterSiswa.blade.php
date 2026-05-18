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
                    <img src="{{ asset('images/Student.png') }}" alt="" class="w-[800px] h-[800px] ">
                </div>

                <form action="{{ route('register.siswa') }}" method="POST" class="flex flex-col gap-6 w-full pr-10">
                    @csrf
                    <h1 class="text-white font-bold text-4xl mt-5 text-center w-[472px]">SIGN UP SISWA</h1>
                    
                    @if($errors->any())
                        <div class="bg-red-500 text-white p-3 rounded-xl w-[472px] text-center">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <input type="text" name="name" placeholder="MASUKAN NAMA LENGKAP" required
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">
                    <input type="email" name="email" placeholder="MASUKAN EMAIL" required
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">
                    <input type="password" name="password" placeholder="MASUKAN KATA SANDI" required
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">

                    <button type="submit"
                        class="bg-[#FFC007] w-[472px] h-[68px] rounded-2xl text-[#45069A] font-bold text-2xl mt-2">SIGN UP</button>

                    <div>
                        <p class="text-center text-white w-[472px]">SUDAH PUNYA AKUN? <a href="/login-siswa" class="font-bold underline">SIGN IN!</a></p>
                    </div>
                </form>


            </div>

        </div>
    </div>
</body>

</html>
