<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Detail Pelatihan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-poppins overflow-x-hidden bg-white">
      @include('layouts.guru.navbar.guru')

      <!-- Detail Hero Section -->
      <div class="bg-[#45069A] w-full relative overflow-hidden">
          {{-- Decorative elements --}}
          <div class="absolute top-[-30%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
          
          <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-16 lg:py-24 relative z-10">
              <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                  <!-- Left: Info -->
                  <div class="lg:w-3/5 text-white">
                      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black italic uppercase tracking-wider mb-6">
                          PELATIHAN: GRAPHIC DESIGN
                      </h1>
                      <p class="text-purple-100/90 text-sm sm:text-base leading-relaxed max-w-2xl mb-10">
                          Gabunglah dengan GURUKITA dan ikuti pelatihan Graphic Design yang inovatif dan inspiratif! 
                          Pelatihan ini dirancang khusus untuk individu yang ingin mengembangkan keterampilan 
                          desain grafis mereka dan memasuki dunia yang kreatif dan menarik ini.
                      </p>

                      <div class="flex flex-wrap gap-8 items-center">
                          <!-- Pembimbing -->
                          <div class="flex items-center gap-4">
                              <div class="w-12 h-12 flex items-center justify-center">
                                  <!-- Reusing an icon placeholder -->
                                  <img src="{{ asset('images/Teacher.png') }}" alt="" class="w-10 h-10 object-contain rounded-full border-2 border-white">
                              </div>
                              <div class="border-l border-white/30 pl-4">
                                  <p class="text-[10px] text-purple-200 uppercase tracking-widest">Pembimbing</p>
                                  <p class="font-bold text-sm">Tim GURUKITA</p>
                              </div>
                          </div>

                          <!-- Kategori -->
                          <div class="flex items-center gap-4">
                              <div class="w-12 h-12 flex items-center justify-center">
                                  <img src="{{ asset('images/tag.png') }}" alt="" class="w-10 h-10 object-contain invert opacity-50">
                              </div>
                              <div class="border-l border-white/30 pl-4">
                                  <p class="text-[10px] text-purple-200 uppercase tracking-widest">Kategori</p>
                                  <p class="font-bold text-sm uppercase">GRAPHIC DESIGN</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Right: Illustration -->
                  <div class="lg:w-2/5 flex justify-end">
                      <div class="relative">
                          <div class="absolute inset-0 bg-white/10 rounded-full blur-2xl animate-pulse"></div>
                          <img src="{{ asset('images/materiSiswa.png') }}" alt="Illustration" class="w-64 sm:w-80 lg:w-96 h-64 sm:h-80 lg:h-96 object-cover rounded-full border-8 border-white/10 shadow-2xl relative z-10">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Content Section -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-16 sm:py-24">
          <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 items-center">
              <!-- Left: Description -->
              <div class="lg:w-1/2">
                  <div class="space-y-6 text-slate-700 leading-relaxed text-sm sm:text-base">
                      <p>
                          Desain grafis adalah kombinasi kompleks kata-kata dan gambar, angka-angka dan grafik, foto-foto, 
                          dan ilustrasi yang membutuhkan pemikiran khusus dari seorang individu yang bisa menggabungkan 
                          elemen-elemen ini sehingga mereka dapat menghasilkan sesuatu yang khusus, sangat berguna, 
                          mengejutkan atau subversif atau sesuatu yang mudah diingat.
                      </p>
                      <p>
                          Desain grafis erat kaitannya dengan visual communication (komunikasi visual). Komunikasi visual 
                          adalah latihan teori dan konsep-konsep melalui terma-terma visual dengan menggunakan warna, 
                          bentuk, garis, dan penjajaran.
                      </p>
                      <p class="font-bold text-slate-900">
                          Tunggu apa lagi? daftar sekarang!
                      </p>
                  </div>

                  <div class="mt-12">
                      <button class="bg-[#FFC107] hover:bg-[#FFD54F] text-[#45069A] font-extrabold text-sm sm:text-base px-12 py-4 rounded-xl shadow-xl shadow-yellow-500/20 transition-all duration-300 transform hover:scale-105 uppercase tracking-widest">
                          DAFTAR SEKARANG
                      </button>
                  </div>
              </div>

              <!-- Right: Banner Image (Simulation of the Yellow Banner in the image) -->
              <div class="lg:w-1/2">
                  <div class="relative group rounded-[40px] overflow-hidden shadow-2xl aspect-video bg-gradient-to-br from-orange-400 via-yellow-500 to-orange-500 p-1">
                      <div class="w-full h-full bg-[#EAB308] rounded-[38px] flex relative overflow-hidden">
                          <!-- Abstract Background Pattern -->
                          <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-1/4"></div>
                          
                          <!-- Content for the Banner -->
                          <div class="p-8 sm:p-12 z-10 flex flex-col justify-center">
                              <h3 class="text-white text-lg sm:text-xl font-medium mb-2 opacity-80">Menjadi Seorang</h3>
                              <h2 class="text-white text-3xl sm:text-5xl font-black mb-6">Desainer Grafis</h2>
                              <p class="text-white/90 text-xs sm:text-sm max-w-xs leading-relaxed">
                                  Jenis, Prospek Kerja, Skill yang Dibutuhkan, dan Learning Path-nya
                              </p>
                          </div>

                          <!-- Play Button Simulation -->
                          <div class="absolute top-1/2 right-12 transform -translate-y-1/2 z-20">
                              <div class="w-16 h-16 sm:w-20 sm:h-20 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-md group-hover:scale-110 transition-transform duration-300">
                                  <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white fill-current" viewBox="0 0 24 24">
                                      <path d="M8 5v14l11-7z" />
                                  </svg>
                              </div>
                          </div>

                          <!-- Person Illustration Placeholder -->
                          <img src="{{ asset('images/Student.png') }}" alt="" class="absolute bottom-0 right-[-10%] w-64 sm:w-80 opacity-40 group-hover:opacity-100 transition-opacity duration-500">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      @include('layouts.footer.footer')
</body>
</html>
