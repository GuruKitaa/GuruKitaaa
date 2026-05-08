<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Detail Lomba</title>
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
                          LOMBA: GRAPHIC DESIGN
                      </h1>
                      <p class="text-purple-100/90 text-sm sm:text-base leading-relaxed max-w-2xl mb-10">
                          Gabunglah dengan GURUKITA dan ikuti lomba Graphic Design yang inovatif dan inspiratif! 
                          Pelatihan ini dirancang khusus untuk individu yang ingin mengembangkan keterampilan 
                          desain grafis mereka dan memasuki dunia yang kreatif dan menarik ini.
                      </p>

                      <div class="flex flex-wrap gap-8 items-center">
                          <!-- Penyelenggara -->
                          <div class="flex items-center gap-4">
                              <div class="w-12 h-12 flex items-center justify-center">
                                  <img src="{{ asset('images/organizer.png') }}" alt="" class="w-10 h-10 object-contain invert">
                              </div>
                              <div class="border-l border-white/30 pl-4">
                                  <p class="text-[10px] text-purple-200 uppercase tracking-widest">Penyelenggara</p>
                                  <p class="font-bold text-sm">Telkom School</p>
                              </div>
                          </div>

                          <!-- Kategori -->
                          <div class="flex items-center gap-4">
                              <div class="w-12 h-12 flex items-center justify-center">
                                  <img src="{{ asset('images/tag.png') }}" alt="" class="w-10 h-10 object-contain invert">
                              </div>
                              <div class="border-l border-white/30 pl-4">
                                  <p class="text-[10px] text-purple-200 uppercase tracking-widest">Kategori</p>
                                  <p class="font-bold text-sm uppercase">GRAPHIC DESIGN</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Right: Logo -->
                  <div class="lg:w-2/5 flex justify-end">
                      <img src="{{ asset('images/telkom.png') }}" alt="Telkom DigiUp" class="w-full max-w-[450px] object-contain drop-shadow-2xl animate-pulse-subtle">
                  </div>
              </div>
          </div>
      </div>

      <!-- Content Section -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-16 sm:py-24">
          <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
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

              <!-- Right: Banner -->
              <div class="lg:w-1/2">
                  <div class="relative group rounded-[40px] overflow-hidden shadow-2xl">
                      <img src="{{ asset('images/bannerLomba.png') }}" alt="Promo Banner" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-700">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                  </div>
              </div>
          </div>
      </div>

      @include('layouts.footer.footer')

      <style>
          @keyframes pulse-subtle {
              0%, 100% { transform: scale(1); opacity: 1; }
              50% { transform: scale(1.02); opacity: 0.95; }
          }
          .animate-pulse-subtle {
              animation: pulse-subtle 4s ease-in-out infinite;
          }
      </style>
</body>
</html>
