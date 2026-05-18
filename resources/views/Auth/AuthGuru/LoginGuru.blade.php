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

                <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-8 w-full pr-10">
                    @csrf
                    <h1 class="text-white font-bold text-4xl mt-5 text-center w-[472px]">LOGIN GURU</h1>
                    
                    @if($errors->any())
                        <div class="bg-red-500 text-white p-3 rounded-xl w-[472px] text-center">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <input type="email" name="email" placeholder="MASUKAN EMAIL" required
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">
                    <input type="password" name="password" placeholder="MASUKAN KATA SANDI" required
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10">

                    <button type="submit"
                        class="bg-[#FFC007] w-[472px] h-[68px] rounded-2xl text-[#45069A] font-bold text-2xl">LOGIN</button>
                    
                    <div class="flex justify-between w-[472px]">
                        <div class="flex flex-row gap-3 items-center">
                            <input type="checkbox" name="remember" id="remember" class="w-5 h-5 rounded-full bg-white border-none">
                            <label for="remember" class="text-white font-semibold text-xl">Ingat Saya</label>
                        </div>
                        <div>
                            <a href="#" class="text-white hover:underline">LUPA PASSWORD?</a>
                        </div>
                    </div>
                    
                    <div>
                        <p class="text-center text-white w-[472px]">BELUM PUNYA AKUN? <a href="/register-guru" class="font-bold underline">SIGNUP!</a></p>
                    </div>
                </form>


            </div>

        </div>
    </div>
</body>

</html>
