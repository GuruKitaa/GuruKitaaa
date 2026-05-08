<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Info Lomba</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-poppins overflow-x-hidden bg-white">
      @include('layouts.guru.navbar.guru')

      <!-- Hero Section -->
      <div class="bg-[#45069A] w-full relative overflow-hidden">
          {{-- Decorative blurred circles --}}
          <div class="absolute top-[-30%] right-[-10%] w-72 h-72 bg-white/5 rounded-full blur-3xl"></div>
          <div class="absolute bottom-[-20%] left-[-5%] w-56 h-56 bg-purple-300/10 rounded-full blur-3xl"></div>

          <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-12 sm:py-16 lg:py-20 relative z-10 flex flex-col md:flex-row items-center justify-between">
              <div class="flex flex-col md:w-1/2">
                  <h1 class="text-white font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight">
                      Tingkatkan Prestasi Akademis
                      dengan GuruKita: Les Private yang
                      Personal dan Profesional!
                  </h1>
                  <p class="text-purple-100/80 mt-4 sm:mt-6 text-sm sm:text-base max-w-2xl leading-relaxed">
                      Temukan Pelajaran yang Lebih Dekat, Belajar Lebih Intensif -
                      Temukan Guru Les Private Terbaik di GuruKita!
                  </p>
              </div>
              <div class="md:w-1/2 flex justify-end mt-10 md:mt-0">
                  <img src="{{ asset('images/prestasi.png') }}" alt="Trophy" class="w-64 sm:w-80 md:w-[450px] lg:w-[500px] object-contain drop-shadow-2xl animate-float">
              </div>
          </div>
      </div>

      <!-- Title Section -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-12">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900">
              Temukan lomba yang ingin <br class="hidden sm:block"> kamu ikuti
          </h2>
      </div>

      <!-- Lomba Grid Section -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 pb-24">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              @php
                  $lombas = [
                      ['title' => 'Telkom DigiUp 2023', 'image' => 'images/telkom.png', 'color' => 'bg-purple-500'],
                      ['title' => 'Skill Academy', 'image' => 'images/skillacademy.png', 'color' => 'bg-purple-500'],
                      ['title' => 'Competition 3', 'image' => 'images/telkom.png', 'color' => 'bg-purple-500'],
                      ['title' => 'Telkom DigiUp 2023', 'image' => 'images/telkom.png', 'color' => 'bg-purple-500'],
                      ['title' => 'Skill Academy', 'image' => 'images/skillacademy.png', 'color' => 'bg-purple-500'],
                      ['title' => 'Competition 6', 'image' => 'images/telkom.png', 'color' => 'bg-purple-500'],
                  ];
              @endphp

              @foreach($lombas as $lomba)
              <div class="group relative bg-[#9D44FD] rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-4 border-[#9D44FD]">
                  <!-- Card Header/Image Area -->
                  <div class="aspect-[4/3] flex items-center justify-center p-8 bg-gradient-to-br from-purple-400 to-[#9D44FD]">
                      @if($lomba['title'] == 'Telkom DigiUp 2023')
                        <img src="{{ asset('images/telkom.png') }}" alt="{{ $lomba['title'] }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                      @elseif($lomba['title'] == 'Skill Academy')
                        <img src="{{ asset('images/skillacademy.png') }}" alt="{{ $lomba['title'] }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                      @else
                        <div class="w-full h-full bg-white/20 rounded-2xl flex items-center justify-center">
                            <span class="text-white/50 font-bold">LOMBA IMAGE</span>
                        </div>
                      @endif
                  </div>
                  
                  <!-- Card Footer -->
                  <div class="bg-[#7F22E4] p-6 relative">
                      <div class="h-12 flex items-center">
                          <!-- Content placeholder for future info if needed -->
                      </div>
                      <a href="/detail-lomba" class="absolute bottom-6 right-6 bg-[#FFC107] hover:bg-[#FFD54F] text-transparent w-28 h-8 rounded-lg shadow-lg flex items-center justify-center transition-all duration-200 group-hover:scale-105">
                          <span class="text-xs font-bold text-[#45069A]">DAFTAR</span>
                      </a>
                  </div>
              </div>
              @endforeach
          </div>
      </div>

      @include('layouts.footer.footer')

      <style>
          @keyframes float {
              0%, 100% { transform: translateY(0); }
              50% { transform: translateY(-15px); }
          }
          .animate-float {
              animation: float 4s ease-in-out infinite;
          }
      </style>
</body>
</html>
