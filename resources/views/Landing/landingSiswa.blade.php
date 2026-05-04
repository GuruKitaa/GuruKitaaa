<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Dashboard Siswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-poppins overflow-x-hidden">
      @include('layouts.guru.navbar.guru')

      <!-- Hero Section -->
      <div class="bg-[#45069A] w-full relative overflow-hidden">
          {{-- Decorative blurred circles --}}
          <div class="absolute top-[-30%] right-[-10%] w-72 h-72 bg-white/5 rounded-full blur-3xl"></div>
          <div class="absolute bottom-[-20%] left-[-5%] w-56 h-56 bg-purple-300/10 rounded-full blur-3xl"></div>

          <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-12 sm:py-16 lg:py-20 relative z-10">
              <div class="flex flex-col">
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
          </div>
      </div>

      <!-- Mapel Section -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-10 sm:py-14 lg:py-20">
          <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold mb-8 sm:mb-10">
              Pilih mapel yang ingin kamu pelajari
          </h2>

          <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-4 sm:gap-6 lg:gap-8">
              <!-- Matematika -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/math 1.png') }}" alt="Matematika" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Matematika</p>
              </div>

              <!-- Biologi/Fisika -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/biologi.png') }}" alt="Biologi/Fisika" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Biologi/Fisika</p>
              </div>

              <!-- Bahasa Indonesia -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/bahasa.png') }}" alt="Bahasa Indonesia" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Bahasa Indonesia</p>
              </div>

              <!-- Bahasa Inggris -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/inggris.png') }}" alt="Bahasa Inggris" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Bahasa Inggris</p>
              </div>

              <!-- Sejarah -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/sejarah.png') }}" alt="Sejarah" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Sejarah</p>
              </div>

              <!-- Ilmu Sosial -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/sosial.png') }}" alt="Ilmu Sosial" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Ilmu Sosial</p>
              </div>

              <!-- PKN -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/pkn.png') }}" alt="PKN" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Pendidikan Kewarganegaraan</p>
              </div>

              <!-- Teknologi Komputer -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/teknologi.png') }}" alt="Teknologi Komputer" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Teknologi Komputer</p>
              </div>

              <!-- Seni Budaya -->
              <div class="flex flex-col items-center text-center group">
                  <div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-[#45069A] rounded-full flex justify-center items-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
                      <img src="{{ asset('images/budaya.png') }}" alt="Seni Budaya" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
                  </div>
                  <p class="text-xs sm:text-sm lg:text-base font-semibold mt-3">Seni Budaya</p>
              </div>
          </div>
      </div>

      <!-- ========================================== -->
      <!-- CTA Banner Cards Section                   -->
      <!-- ========================================== -->
      <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 pb-12 sm:pb-16 space-y-5 sm:space-y-6">

          <!-- Card 1: Materi Kelas -->
          <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 group hover:shadow-xl hover:shadow-purple-500/20 transition-all duration-300">
              <!-- Decorative blurred circle -->
              <div class="absolute top-[-30%] right-[10%] w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
              <div class="absolute bottom-[-40%] left-[5%] w-48 h-48 bg-purple-300/10 rounded-full blur-3xl"></div>

              <!-- Text Content -->
              <div class="relative z-10 flex-1">
                  <h2 class="text-white font-extrabold text-xl sm:text-2xl leading-snug mb-3">
                      Mau belajar lebih seru? <br class="hidden sm:block">
                      Yuk lihat materi kelas <br class="hidden sm:block">
                      yang tersedia!
                  </h2>
                  <p class="text-purple-100/70 text-sm leading-relaxed mb-5 max-w-md">
                      Akses berbagai materi pelajaran yang telah disusun secara sistematis oleh guru-guru terbaik untuk membantumu memahami setiap topik dengan lebih mudah.
                  </p>
                  <a href="#" class="inline-block bg-[#FFC007] text-[#45069A] font-bold text-sm px-6 py-2.5 rounded-lg hover:bg-yellow-400 transition-colors duration-200 shadow-lg shadow-yellow-500/20">
                      Coba ini
                  </a>
              </div>

              <!-- Icon Image -->
              <div class="relative z-10 flex-shrink-0 w-28 h-28 sm:w-36 sm:h-36 flex items-center justify-center opacity-90 group-hover:scale-110 transition-transform duration-500">
                  <img src="{{ asset('images/kelas.png') }}" alt="Materi Kelas" class="w-full h-full object-contain drop-shadow-lg">
              </div>
          </div>

          <!-- Card 2: Pelatihan Digital -->
          <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 group hover:shadow-xl hover:shadow-purple-500/20 transition-all duration-300">
              <!-- Decorative blurred circle -->
              <div class="absolute top-[-20%] right-[15%] w-56 h-56 bg-white/5 rounded-full blur-3xl"></div>
              <div class="absolute bottom-[-30%] left-[-3%] w-52 h-52 bg-purple-400/10 rounded-full blur-3xl"></div>

              <!-- Text Content -->
              <div class="relative z-10 flex-1">
                  <h2 class="text-white font-extrabold text-xl sm:text-2xl leading-snug mb-3">
                      Bingung kalau gabut mau <br class="hidden sm:block">
                      ngapain? Ikut pelatihan <br class="hidden sm:block">
                      digital aja!
                  </h2>
                  <p class="text-purple-100/70 text-sm leading-relaxed mb-5 max-w-md">
                      Tingkatkan skill-mu dengan pelatihan digital dari para instruktur profesional yang berpengalaman di dunia teknologi.
                  </p>
                  <a href="#" class="inline-block bg-[#FFC007] text-[#45069A] font-bold text-sm px-6 py-2.5 rounded-lg hover:bg-yellow-400 transition-colors duration-200 shadow-lg shadow-yellow-500/20">
                      Coba ini
                  </a>
              </div>

              <!-- Icon Image -->
              <div class="relative z-10 flex-shrink-0 w-28 h-28 sm:w-36 sm:h-36 flex items-center justify-center opacity-90 group-hover:scale-110 transition-transform duration-500">
                  <img src="{{ asset('images/materiSiswa.png') }}" alt="Pelatihan Digital" class="w-full h-full object-contain drop-shadow-lg">
              </div>
          </div>

          <!-- Card 3: Lomba Digital / Prestasi -->
          <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 group hover:shadow-xl hover:shadow-purple-500/20 transition-all duration-300">
              <!-- Decorative blurred circle -->
              <div class="absolute top-[-25%] right-[5%] w-60 h-60 bg-white/5 rounded-full blur-3xl"></div>
              <div class="absolute bottom-[-35%] left-[10%] w-44 h-44 bg-purple-300/10 rounded-full blur-3xl"></div>

              <!-- Text Content -->
              <div class="relative z-10 flex-1">
                  <h2 class="text-white font-extrabold text-xl sm:text-2xl leading-snug mb-3">
                      Mau nambah prestasi tapi <br class="hidden sm:block">
                      bingung mulai dari mana? <br class="hidden sm:block">
                      Ikut lomba digital aja!
                  </h2>
                  <p class="text-purple-100/70 text-sm leading-relaxed mb-5 max-w-md">
                      Tantang dirimu dan tunjukkan bakat terbaikmu. Ikuti berbagai lomba digital yang tersedia dan tingkatkan prestasi dengan mengasah kemampuanmu yang sesungguhnya.
                  </p>
                  <a href="#" class="inline-block bg-[#FFC007] text-[#45069A] font-bold text-sm px-6 py-2.5 rounded-lg hover:bg-yellow-400 transition-colors duration-200 shadow-lg shadow-yellow-500/20">
                      Coba ini
                  </a>
              </div>

              <!-- Icon Image -->
              <div class="relative z-10 flex-shrink-0 w-28 h-28 sm:w-36 sm:h-36 flex items-center justify-center opacity-90 group-hover:scale-110 transition-transform duration-500">
                  <img src="{{ asset('images/prestasi.png') }}" alt="Prestasi & Lomba" class="w-full h-full object-contain drop-shadow-lg">
              </div>
          </div>

          <!-- Card 4: Artikel / Wawasan -->
          <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 group hover:shadow-xl hover:shadow-purple-500/20 transition-all duration-300">
              <!-- Decorative blurred circle -->
              <div class="absolute top-[-20%] right-[20%] w-52 h-52 bg-white/5 rounded-full blur-3xl"></div>
              <div class="absolute bottom-[-25%] left-[0%] w-56 h-56 bg-purple-400/10 rounded-full blur-3xl"></div>

              <!-- Text Content -->
              <div class="relative z-10 flex-1">
                  <h2 class="text-white font-extrabold text-xl sm:text-2xl leading-snug mb-3">
                      Ayo tambah wawasanmu <br class="hidden sm:block">
                      dengan membaca artikel <br class="hidden sm:block">
                      yang kami sediakan!
                  </h2>
                  <p class="text-purple-100/70 text-sm leading-relaxed mb-5 max-w-md">
                      Baca artikel menarik dan informatif yang telah kami kurasi untuk membantumu memperluas perspektif serta belajar tentang topik yang kamu minati.
                  </p>
                  <a href="#" class="inline-block bg-[#FFC007] text-[#45069A] font-bold text-sm px-6 py-2.5 rounded-lg hover:bg-yellow-400 transition-colors duration-200 shadow-lg shadow-yellow-500/20">
                      Coba ini
                  </a>
              </div>

              <!-- Icon Image -->
              <div class="relative z-10 flex-shrink-0 w-28 h-28 sm:w-36 sm:h-36 flex items-center justify-center opacity-90 group-hover:scale-110 transition-transform duration-500">
                  <img src="{{ asset('images/wawasan.png') }}" alt="Wawasan & Artikel" class="w-full h-full object-contain drop-shadow-lg">
              </div>
          </div>
      </div>
    
      @include('layouts.footer.footer')
</body>
</html>
