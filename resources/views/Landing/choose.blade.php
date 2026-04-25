<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="p-20">
        <h1 class="text-[#45069A] font-bold text-3xl">PILIH TIPE AKUNMU:</h1>
        <div class="flex justify-center flex-row gap-20 mt-24">
            <div class="bg-[#8224CC] w-80 h-80 mt-5 rounded-2xl text-center flex items-center justify-center flex-col">
                <h1 class="text-white font-bold text-3xl mt-7">MURID</h1>
                <img src="{{ asset('images/Student.png') }}" alt="" class="w-70 h-70">
            </div>
            <div class="bg-[#8224CC] w-80 h-80 mt-5 rounded-2xl text-center flex items-center justify-center flex-col">
                <h1 class="text-white font-bold text-3xl mt-7">GURU</h1>
                <img src="{{ asset('images/Teacher.png') }}" alt="" class="w-70 h-70">
            </div>
        </div>
    </div>
</body>
</html>
