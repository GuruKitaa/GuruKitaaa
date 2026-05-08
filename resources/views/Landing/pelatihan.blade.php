<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Info Pelatihan</title>
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
                      Personal dan Profesional!!
                  </h1>
                  <p class="text-purple-100/80 mt-4 sm:mt-6 text-sm sm:text-base max-w-2xl leading-relaxed">
                      Temukan Pelajaran yang Lebih Dekat, Belajar Lebih Intensif -
                      Temukan Guru Les Private Terbaik di GuruKita!
                  </p>
              </div>
              <div class="md:w-1/2 flex justify-end mt-10 md:mt-0">
                  <!-- Using images-header.png or a generic placeholder for students studying -->
                  <img src="{{ asset('images/images-header.png') }}" alt="Students Studying" class="w-64 sm:w-80 md:w-[450px] lg:w-[500px] object-contain drop-shadow-2xl">
              </div>
          </div>
      </div>

      <!-- Title Section -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-12">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900">
              Temukan Pelatihan yang <br class="hidden sm:block"> ingin kamu ikuti
          </h2>
      </div>

      <!-- Pelatihan Grid Section -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 pb-24">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
              @php
                  $pelatihans = [
                      ['title' => 'Graphich Design', 'status' => 'TERSEDIA', 'available' => true],
                      ['title' => 'UI / UX Design', 'status' => 'TERSEDIA DALAM 2 HARI', 'available' => true],
                      ['title' => 'Content Creator', 'status' => 'TIDAK TERSEDIA', 'available' => false],
                      ['title' => 'Programming', 'status' => 'TIDAK TERSEDIA', 'available' => false],
                      ['title' => 'Data Analyst', 'status' => 'TIDAK TERSEDIA', 'available' => false],
                      ['title' => 'Photography', 'status' => 'TIDAK TERSEDIA', 'available' => false],
                  ];
              @endphp

              @foreach($pelatihans as $item)
              <div class="flex flex-col">
                  <!-- Image Card -->
                  <div class="bg-[#F8F9FA] rounded-t-3xl p-10 flex items-center justify-center border-x-2 border-t-2 border-gray-100 shadow-sm">
                      <img src="{{ asset('images/materiSiswa.png') }}" alt="{{ $item['title'] }}" class="w-full h-48 object-contain">
                  </div>
                  
                  <!-- Info Bar -->
                  <div class="bg-[#7F22E4] p-5 rounded-b-3xl relative shadow-lg">
                      <div class="flex flex-col items-center text-center">
                          <h3 class="text-white font-bold text-xl mb-4">{{ $item['title'] }}</h3>
                          
                          @if($item['status'] == 'TERSEDIA')
                            <a href="/detail-pelatihan" class="bg-[#FFC107] hover:bg-[#FFD54F] px-6 py-2 rounded-lg transition-all duration-300 self-end">
                                <span class="text-xs font-black text-[#45069A]">TERSEDIA</span>
                            </a>
                          @else
                            <p class="text-[10px] font-bold text-white/60 self-end uppercase tracking-widest py-2">
                                {{ $item['status'] }}
                            </p>
                          @endif
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>

      @include('layouts.footer.footer')
</body>
</html>
