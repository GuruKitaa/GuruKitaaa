<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Guru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="flex justify-center items-center h-screen p-12 Poppins">

        <div class="flex justify-center items-center">

            <div class="bg-[#8224CC] w-[1280px] h-[661px] rounded-2xl flex items-center gap-20">

                <!-- LEFT -->
                <div class="w-[500px] h-full bg-[#9747FF] rounded-2xl flex items-center justify-center flex-col">

                    <div>

                        <img
                            src="{{ asset('images/GuruKita.png') }}"
                            alt=""
                            class="mt-4 opacity-30"
                        >

                    </div>

                    <img
                        src="{{ asset('images/Teacher.png') }}"
                        alt=""
                        class="w-[800px] h-[800px]"
                    >

                </div>

                <!-- RIGHT -->
                <form
                    method="POST"
                    action="/login-guru"
                    class="flex flex-col gap-10"
                >

                    @csrf

                    <h1 class="text-white font-bold text-4xl mt-5 text-center">

                        LOGIN

                    </h1>

                    <!-- EMAIL -->
                    <input
                        type="email"
                        name="email"
                        placeholder="MASUKAN EMAIL"
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10"
                    >

                    <!-- PASSWORD -->
                    <input
                        type="password"
                        name="password"
                        placeholder="MASUKAN KATA SANDI"
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10"
                    >

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="bg-[#FFC007] w-[472px] h-[68px] rounded-2xl text-[#45069A] font-bold text-2xl"
                    >

                        LOGIN

                    </button>

                    <!-- REMEMBER -->
                    <div class="flex justify-between">

                        <div class="flex flex-row gap-3 items-center">

                            <h1 class="text-white font-semibold text-2xl">

                                Ingat Saya

                            </h1>

                            <input
                                type="checkbox"
                                class="w-5 h-5 rounded-full bg-white border-none"
                            >

                        </div>

                        <div>

                            <h1 class="text-white">

                                LUPA PASSWORD?

                            </h1>

                        </div>

                    </div>

                    <!-- REGISTER -->
                    <div>

                        <p class="text-center text-white">

                            BELUM PUNYA AKUN?

                            <a href="/register-guru" class="font-bold">

                                SIGNUP!

                            </a>

                        </p>

                    </div>

                    <!-- ERROR -->
                    @if($errors->any())

                        <div id="error-alert" class="bg-red-500 text-white p-4 rounded-xl text-center transition-opacity duration-1000">

                            {{ $errors->first() }}

                        </div>

                    @endif

                </form>

            </div>

        </div>

    </div>
    <script>
        setTimeout(() => {

        const alert = document.getElementById('error-alert');

        if (alert) {

            alert.classList.add('opacity-0');

            setTimeout(() => {

                alert.remove();

            }, 1000);

        }

    }, 2000);
    </script>
</body>

</html>