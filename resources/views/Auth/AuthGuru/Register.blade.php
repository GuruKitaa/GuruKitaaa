<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Guru</title>

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
                    action="/register-guru"
                    class="flex flex-col gap-6"
                >

                    @csrf

                    <h1 class="text-white font-bold text-4xl mt-5 text-center">

                        SIGN UP

                    </h1>

                    <!-- NAMA -->
                    <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="MASUKAN NAMA"
                    class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10"
                    >

                    <!-- EMAIL -->
                    <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="MASUKAN EMAIL / NOMOR TELEPON"
                    class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10"
                    >

                    <!-- PASSWORD -->
                    <input
                        type="password"
                        name="password"
                        placeholder="MASUKAN KATA SANDI (MINIMAL 6 KARAKTER)"
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10"
                    >

                    <!-- PASSWORD CONFIRM -->
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="MASUKAN KATA SANDI KEMBALI"
                        class="bg-white text-black w-[472px] h-[68px] rounded-2xl px-10"
                    >

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="bg-[#FFC007] w-[472px] h-[68px] rounded-2xl text-[#45069A] font-bold text-2xl"
                    >

                        SIGN UP

                    </button>

                    @if($errors->any())

                        <div
                            id="error-alert"
                            class="bg-red-500 text-white px-6 py-4 rounded-2xl transition-opacity duration-1000"
                        >

                            <ul class="list-disc pl-5 space-y-1">

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <!-- LOGIN -->
                    <div>

                        <p class="text-center text-white">

                            SUDAH PUNYA AKUN?

                            <a href="/login-guru" class="font-bold">

                                SIGN IN!

                            </a>

                        </p>

                    </div>

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