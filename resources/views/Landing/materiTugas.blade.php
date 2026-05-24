<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKita - Materi & Tugas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        .materi-item { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .materi-item:hover { transform: translateX(4px); box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
        .materi-item.active { background: #F5F3FF; border-left: 3px solid #7C3AED; }

        .tab-btn { transition: all 0.3s ease; }
        .tab-btn-active { background: #FFC007; color: #45069A; box-shadow: 0 4px 14px rgba(255, 192, 7, 0.3); }
        .tab-btn-inactive { background: #EDE9FE; color: #5B21B6; }

        .badge-baru { background: #FFC007; color: #45069A; }
        .badge-selesai { background: #22C55E; color: #fff; }

        .action-btn { transition: all 0.3s ease; }
        .action-btn-active { background: #FFC007; color: #45069A; border-color: #FFC007; }
        .action-btn-inactive { background: #EDE9FE; color: #7C3AED; border-color: transparent; }

        .detail-card { animation: fadeInRight 0.4s ease; }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .icon-pdf { background: linear-gradient(135deg, #F59E0B, #F97316); }
        .icon-video { background: linear-gradient(135deg, #EC4899, #F43F5E); }

        .tugas-card { transition: all 0.3s ease; }
        .tugas-card:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(0,0,0,0.06); }
    </style>
</head>
<body>
    <div class="font-poppins bg-[#F3F4F6] min-h-screen">
        @include('layouts.guru.navbar.guru')

        <!-- Hero Section -->
        <div class="relative overflow-hidden">
            <div class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] pt-8 pb-14 px-4 sm:px-6 lg:px-8">
                <div class="absolute top-[-40%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-[-30%] left-[-5%] w-72 h-72 bg-purple-300/10 rounded-full blur-3xl"></div>

                <div class="max-w-7xl mx-auto relative z-10">
                    <h1 class="text-white font-extrabold text-3xl sm:text-4xl md:text-5xl tracking-tight leading-tight italic">
                        Materi & Tugas
                    </h1>
                    <p class="text-purple-100/80 font-medium mt-2 text-sm sm:text-base max-w-2xl">
                        Kelola Materi Dan Tugas Muridmu
                    </p>

                    <!-- Tabs & Actions -->
                    <div class="mt-6 flex flex-wrap items-center justify-between gap-4">
                        <div class="flex flex-wrap gap-3">
                            <button id="tab-materi" onclick="switchTab('materi')" class="tab-btn tab-btn-active px-6 py-2.5 rounded-full font-bold text-sm shadow-lg cursor-pointer">
                                Materi
                            </button>
                            <button id="tab-tugas" onclick="switchTab('tugas')" class="tab-btn tab-btn-inactive px-6 py-2.5 rounded-full font-bold text-sm cursor-pointer">
                                Tugas
                            </button>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <button id="btn-add-materi" onclick="openMateriModal()" class="action-btn action-btn-active px-5 py-2.5 rounded-full font-bold text-sm border-2 cursor-pointer">
                                + Tambah Materi
                            </button>
                            <button id="btn-add-tugas" onclick="openTugasModal()" class="action-btn action-btn-inactive px-5 py-2.5 rounded-full font-bold text-sm border-2 cursor-pointer">
                                + Tambah Tugas
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            
            <!-- MATERI CONTENT SECTION -->
            <div id="materi-content" class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                <!-- Left Panel: Daftar Materi -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 p-5 sm:p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-5">Daftar Materi</h2>

                    <div class="space-y-3" id="materi-list">
                        <!-- Items will be generated dynamically -->
                    </div>
                </div>

                <!-- Right Panel: Detail Materi -->
                <div class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden" id="detail-panel">
                    <!-- Detail Header -->
                    <div class="bg-gradient-to-br from-[#7C3AED] via-[#8B5CF6] to-[#A855F7] p-8 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute top-[-20%] right-[-10%] w-48 h-48 bg-white/5 rounded-full blur-2xl"></div>
                        <div class="absolute bottom-[-15%] left-[-5%] w-36 h-36 bg-white/5 rounded-full blur-2xl"></div>
                        <div class="relative z-10 w-20 h-20 bg-[#FFC007] rounded-2xl flex items-center justify-center shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#45069A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Detail Body -->
                    <div class="p-6 sm:p-8">
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-1" id="detail-title">Persamaan Lingkaran - Teori Dasar</h2>
                        <p class="text-sm text-gray-400 mb-6" id="detail-subtitle">Matematika · Ditambahkan 22 April 2026</p>

                        <hr class="border-gray-100 mb-6">

                        <!-- Metadata Table -->
                        <div class="space-y-4 mb-6">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-400">Mata Pelajaran</span>
                                <span class="text-sm font-bold text-gray-800" id="detail-mapel">Matematika</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-400">Format</span>
                                <span class="text-sm font-bold text-gray-800" id="detail-format">PDF Document</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-400">Ukuran</span>
                                <span class="text-sm font-bold text-gray-800" id="detail-ukuran">2,3 MB</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-400">Diperuntukan</span>
                                <span class="text-sm font-bold text-gray-800" id="detail-murid">Raisyah Syifa</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-400">Topik</span>
                                <span class="text-sm font-bold text-gray-800" id="detail-topik">Lingkaran & Persamaan</span>
                            </div>
                        </div>

                        <hr class="border-gray-100 mb-6">

                        <!-- Description -->
                        <p class="text-sm text-gray-600 leading-relaxed mb-6" id="detail-desc">
                            Materi ini mencakup pengenalan konsep persamaan lingkaran dalam koordinat kartesius, bentuk umum (x-a)²+(y-b)²=r², titik pusat dan jari-jari, serta soal-soal latihan bertingkat.
                        </p>

                        <!-- Action Button -->
                        <button class="action-btn bg-[#FFC007] text-[#45069A] font-bold px-6 py-3 rounded-xl text-sm hover:bg-yellow-400 shadow-lg shadow-yellow-500/20 cursor-pointer">
                            Kirim Murid
                        </button>
                    </div>
                </div>
            </div>

            <!-- TUGAS CONTENT SECTION -->
            <div id="tugas-content" class="hidden space-y-4">
                <!-- Task Cards will be rendered dynamically -->
            </div>
            
        </div>

        @include('layouts.footer.footer')
    </div>

    <!-- MODAL TAMBAH MATERI -->
    <div id="modal-tambah-materi" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/40 backdrop-blur-sm transition-opacity duration-300">
        <!-- Modal Card Container -->
        <div id="modal-card" class="bg-white rounded-3xl p-8 max-w-lg w-full mx-4 shadow-2xl border border-gray-100 transform scale-95 opacity-0 transition-all duration-300">
            <h2 class="text-2xl font-bold text-gray-900 mb-1">Tambah Materi Baru</h2>
            <p class="text-sm text-gray-400 mb-6 font-medium">Upload Materi Muridmu</p>

            <form id="form-tambah-materi" onsubmit="handleUploadMateri(event)">
                <!-- Nama Materi -->
                <div class="mb-5">
                    <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Nama Materi</label>
                    <input type="text" id="input-nama" required placeholder="Persamaan Kuadrat BAB 5" 
                           class="w-full bg-[#FAF9FF] border border-gray-200/80 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#7C3AED] focus:ring-1 focus:ring-[#7C3AED] transition-all placeholder:text-gray-300 font-medium">
                </div>

                <!-- Mata Pelajaran & Deadline -->
                <div class="grid grid-cols-2 gap-4 mb-5">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Mata Pelajaran</label>
                        <input type="text" id="input-mapel" required placeholder="Matematika" 
                               class="w-full bg-[#FAF9FF] border border-gray-200/80 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#7C3AED] focus:ring-1 focus:ring-[#7C3AED] transition-all placeholder:text-gray-300 font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Deadline</label>
                        <input type="text" id="input-deadline" required placeholder="30/04/2026" 
                               class="w-full bg-[#FAF9FF] border border-gray-200/80 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#7C3AED] focus:ring-1 focus:ring-[#7C3AED] transition-all placeholder:text-gray-300 font-medium">
                    </div>
                </div>

                <!-- Upload File -->
                <div class="mb-8">
                    <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Upload File</label>
                    <div class="border-2 border-dashed border-purple-200 bg-[#FAF9FF] rounded-2xl p-7 text-center cursor-pointer hover:bg-purple-50/50 hover:border-purple-300 transition-all group relative overflow-hidden" 
                         onclick="document.getElementById('input-file').click()">
                        <input type="file" id="input-file" class="hidden" onchange="handleFileChange(this)">
                        
                        <div class="flex flex-col items-center justify-center gap-2">
                            <!-- Cloud Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#7C3AED]/40 group-hover:text-[#7C3AED] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span class="text-sm text-gray-400 group-hover:text-[#7C3AED] transition-colors font-medium" id="file-label">Klik untuk pilih file</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center gap-4">
                    <button type="button" onclick="closeMateriModal()" 
                            class="w-1/2 bg-[#C4C4C4] text-white font-bold py-3.5 rounded-2xl hover:bg-gray-400 transition-all duration-200 shadow-md cursor-pointer text-center select-none">
                        Batal
                    </button>
                    <button type="submit" 
                            class="w-1/2 bg-[#FFC007] text-[#45069A] font-bold py-3.5 rounded-2xl hover:bg-yellow-400 transition-all duration-200 shadow-md cursor-pointer text-center select-none">
                        Upload Materi
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL TAMBAH TUGAS -->
    <div id="modal-tambah-tugas" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/40 backdrop-blur-sm transition-opacity duration-300">
        <!-- Modal Card Container -->
        <div id="modal-tugas-card" class="bg-white rounded-3xl p-8 max-w-lg w-full mx-4 shadow-2xl border border-gray-100 transform scale-95 opacity-0 transition-all duration-300">
            <h2 class="text-2xl font-bold text-gray-900 mb-1">Tambah Tugas Baru</h2>
            <p class="text-sm text-gray-400 mb-6 font-medium">Isi Detail Tugas Untuk Murid</p>

            <form id="form-tambah-tugas" onsubmit="handleSaveTugas(event)">
                <!-- Judul Tugas -->
                <div class="mb-5">
                    <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Judul Tugas</label>
                    <input type="text" id="input-tugas-judul" required placeholder="Latihan Trigonometri BAB 3 - Set B" 
                           class="w-full bg-[#FAF9FF] border border-gray-200/80 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#7C3AED] focus:ring-1 focus:ring-[#7C3AED] transition-all placeholder:text-gray-300 font-medium">
                </div>

                <!-- Murid -->
                <div class="mb-5">
                    <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Murid</label>
                    <input type="text" id="input-tugas-murid" required placeholder="Raisyah Syifa" 
                           class="w-full bg-[#FAF9FF] border border-gray-200/80 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#7C3AED] focus:ring-1 focus:ring-[#7C3AED] transition-all placeholder:text-gray-300 font-medium">
                </div>

                <!-- Mata Pelajaran & Deadline -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Mata Pelajaran</label>
                        <input type="text" id="input-tugas-mapel" required placeholder="Matematika" 
                               class="w-full bg-[#FAF9FF] border border-gray-200/80 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#7C3AED] focus:ring-1 focus:ring-[#7C3AED] transition-all placeholder:text-gray-300 font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">Deadline</label>
                        <input type="text" id="input-tugas-deadline" required placeholder="30/04/2026" 
                               class="w-full bg-[#FAF9FF] border border-gray-200/80 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#7C3AED] focus:ring-1 focus:ring-[#7C3AED] transition-all placeholder:text-gray-300 font-medium">
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center gap-4">
                    <button type="button" onclick="closeTugasModal()" 
                            class="w-1/2 bg-[#C4C4C4] text-white font-bold py-3.5 rounded-2xl hover:bg-gray-400 transition-all duration-200 shadow-md cursor-pointer text-center select-none">
                        Batal
                    </button>
                    <button type="submit" 
                            class="w-1/2 bg-[#FFC007] text-[#45069A] font-bold py-3.5 rounded-2xl hover:bg-yellow-400 transition-all duration-200 shadow-md cursor-pointer text-center select-none">
                        Simpan Tugas
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initial list data for MATERI
        let materiData = [
            { title: 'Persamaan Lingkaran', subtitle: 'Matematika · PDF 2,3 MB · 22 April 2026', mapel: 'Matematika', format: 'PDF Document', ukuran: '2,3 MB', murid: 'Raisyah Syifa', topik: 'Lingkaran & Persamaan', desc: 'Materi ini mencakup pengenalan konsep persamaan lingkaran dalam koordinat kartesius, bentuk umum (x-a)²+(y-b)²=r², titik pusat dan jari-jari, serta soal-soal latihan bertingkat.', type: 'pdf', isNew: true },
            { title: 'Vidio : Getaran & Gelombang', subtitle: 'Fisika · MP4 45 Menit · 20 April 2026', mapel: 'Fisika', format: 'MP4 Video', ukuran: '45 Menit', murid: 'Aldi Firmansyah', topik: 'Getaran & Gelombang', desc: 'Video pembelajaran tentang konsep getaran dan gelombang, meliputi pengertian, jenis-jenis, rumus periode dan frekuensi, serta contoh penerapannya dalam kehidupan sehari-hari.', type: 'video', isNew: false },
            { title: 'Ringkasan Reaksi Redoks', subtitle: 'Kimia · PDF 1,1 MB · 18 April 2026', mapel: 'Kimia', format: 'PDF Document', ukuran: '1,1 MB', murid: 'Nadia Putri', topik: 'Reaksi Redoks', desc: 'Ringkasan lengkap tentang reaksi oksidasi-reduksi, konsep bilangan oksidasi, penyetaraan reaksi redoks, dan penerapannya pada sel elektrokimia.', type: 'pdf', isNew: false },
            { title: 'Soal Latihan SBMPTN Matematika', subtitle: 'Matematika · PDF 1,1 MB · 15 April 2026', mapel: 'Matematika', format: 'PDF Document', ukuran: '1,1 MB', murid: 'Bintang Prasetyo', topik: 'SBMPTN Preparation', desc: 'Kumpulan soal latihan SBMPTN Matematika dari tahun 2020-2025, dilengkapi pembahasan langkah demi langkah dan tips strategi pengerjaan.', type: 'pdf', isNew: false },
            { title: 'Vidio : Statistika Deskriptif', subtitle: 'Matematika · MP4 30 Menit · 10 April 2026', mapel: 'Matematika', format: 'MP4 Video', ukuran: '30 Menit', murid: 'Raisyah Syifa', topik: 'Statistika', desc: 'Video pengantar statistika deskriptif yang membahas mean, median, modus, standar deviasi, dan cara menyajikan data dalam bentuk diagram.', type: 'video', isNew: false }
        ];

        // Initial list data for TUGAS
        let tugasData = [
            { title: 'Latihan Persamaan Lingkaran - Set A', murid: 'Raisyah Syifa', mapel: 'Matematika', deadline: '25 April 2026', waktu: '3 Hari Lagi', status: 'Dikerjakan' },
            { title: 'Rangkuman Trigonometri BAB 3', murid: 'Raisyah Syifa', mapel: 'Matematika', deadline: '24 April 2026', waktu: 'Besok', status: 'Selesai' },
            { title: 'Soal Latihan Getaran Gelombang', murid: 'Bintang Prasetyo', mapel: 'Fisika', deadline: '28 April 2026', waktu: '6 Hari Lagi', status: 'Selesai' },
            { title: 'Soal SBMPTN Matematika', murid: 'Raisyah Syifa', mapel: 'Matematika', deadline: '20 April 2026', waktu: '1 Hari Lagi', status: 'Selesai' }
        ];

        // Helper to get remaining time string based on deadline text
        function getWaktuString(deadlineStr) {
            if (deadlineStr.includes('30/04/2026') || deadlineStr.includes('30 April')) {
                return '9 Hari Lagi';
            }
            return 'Baru Saja';
        }

        // Render the list of materi items
        function renderMateriList(activeIndex = 0) {
            const listContainer = document.getElementById('materi-list');
            listContainer.innerHTML = '';

            materiData.forEach((item, index) => {
                const isActive = index === activeIndex;
                const iconClass = item.type === 'video' ? 'icon-video' : 'icon-pdf';
                const iconSvg = item.type === 'video' 
                    ? `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                           <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                       </svg>`
                    : `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                       </svg>`;

                const badge = item.isNew 
                    ? `<span class="badge-baru text-xs font-bold px-3 py-1 rounded-full flex-shrink-0">Baru</span>`
                    : `<span class="badge-selesai text-xs font-bold px-3 py-1 rounded-full flex-shrink-0">Selesai</span>`;

                const itemDiv = document.createElement('div');
                itemDiv.className = `materi-item cursor-pointer rounded-xl p-4 border border-gray-100 ${isActive ? 'active' : ''}`;
                itemDiv.onclick = function() { selectMateri(this, index); };
                itemDiv.innerHTML = `
                    <div class="flex items-center gap-3">
                        <div class="${iconClass} w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0">
                            ${iconSvg}
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-bold text-gray-800 truncate">${item.title}</p>
                            <p class="text-xs text-gray-400">${item.subtitle}</p>
                        </div>
                        ${badge}
                    </div>
                `;
                listContainer.appendChild(itemDiv);
            });

            // Set initial detail panel values
            if (materiData.length > 0) {
                updateDetailPanel(activeIndex);
            }
        }

        // Render the list of tugas cards
        function renderTugasList() {
            const listContainer = document.getElementById('tugas-content');
            listContainer.innerHTML = '';

            tugasData.forEach((item) => {
                // Mapel icon color
                const mapelClean = item.mapel.toLowerCase();
                let iconColorClass = 'text-orange-500 bg-orange-50';
                if (mapelClean.includes('fisika')) {
                    iconColorClass = 'text-pink-500 bg-pink-50';
                } else if (mapelClean.includes('kimia')) {
                    iconColorClass = 'text-green-500 bg-green-50';
                }

                // Badge style
                const isSelesai = item.status === 'Selesai';
                const badgeClass = isSelesai ? 'bg-[#E6F4EA] text-[#137333]' : 'bg-[#FEF3C7] text-[#D97706]';

                const cardDiv = document.createElement('div');
                cardDiv.className = 'tugas-card bg-white rounded-2xl p-6 border border-gray-100 flex flex-col md:flex-row md:items-center justify-between gap-4 shadow-sm';
                cardDiv.innerHTML = `
                    <div class="flex-1">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 md:mb-3">${item.title}</h3>
                        <div class="flex flex-wrap items-center gap-5 sm:gap-8 text-xs text-gray-500">
                            <!-- Murid -->
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="font-semibold text-gray-700">${item.murid}</span>
                            </div>
                            <!-- Mapel -->
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg ${iconColorClass} flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <span class="font-semibold text-gray-700">${item.mapel}</span>
                            </div>
                            <!-- Deadline -->
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="font-semibold text-gray-700">Deadline : ${item.deadline}</span>
                            </div>
                            <!-- Waktu -->
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span class="font-semibold text-gray-700">${item.waktu}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 mt-3 md:mt-0">
                        <span class="px-5 py-2.5 rounded-xl text-sm font-bold ${badgeClass} tracking-wide inline-block shadow-sm">${item.status}</span>
                    </div>
                `;
                listContainer.appendChild(cardDiv);
            });
        }

        function updateDetailPanel(index) {
            const data = materiData[index];
            document.getElementById('detail-title').textContent = data.title + (data.topik !== 'Materi Baru' ? ' - Teori Dasar' : '');
            document.getElementById('detail-subtitle').textContent = data.subtitle.includes('Ditambahkan') ? data.subtitle : `${data.mapel} · Ditambahkan ${data.subtitle.split(' · ').pop()}`;
            document.getElementById('detail-mapel').textContent = data.mapel;
            document.getElementById('detail-format').textContent = data.format;
            document.getElementById('detail-ukuran').textContent = data.ukuran;
            document.getElementById('detail-murid').textContent = data.murid;
            document.getElementById('detail-topik').textContent = data.topik;
            document.getElementById('detail-desc').textContent = data.desc;
        }

        function selectMateri(el, index) {
            document.querySelectorAll('.materi-item').forEach(item => {
                item.classList.remove('active');
            });
            el.classList.add('active');

            const panel = document.getElementById('detail-panel');
            panel.classList.remove('detail-card');
            void panel.offsetWidth;
            panel.classList.add('detail-card');

            updateDetailPanel(index);
        }

        function switchTab(tab) {
            const tabMateri = document.getElementById('tab-materi');
            const tabTugas = document.getElementById('tab-tugas');
            const btnAddMateri = document.getElementById('btn-add-materi');
            const btnAddTugas = document.getElementById('btn-add-tugas');
            const materiContent = document.getElementById('materi-content');
            const tugasContent = document.getElementById('tugas-content');

            if (tab === 'materi') {
                tabMateri.className = 'tab-btn tab-btn-active px-6 py-2.5 rounded-full font-bold text-sm shadow-lg cursor-pointer';
                tabTugas.className = 'tab-btn tab-btn-inactive px-6 py-2.5 rounded-full font-bold text-sm cursor-pointer';
                
                btnAddMateri.className = 'action-btn action-btn-active px-5 py-2.5 rounded-full font-bold text-sm border-2 cursor-pointer';
                btnAddTugas.className = 'action-btn action-btn-inactive px-5 py-2.5 rounded-full font-bold text-sm border-2 cursor-pointer';
                
                materiContent.classList.remove('hidden');
                tugasContent.classList.add('hidden');
            } else {
                tabMateri.className = 'tab-btn tab-btn-inactive px-6 py-2.5 rounded-full font-bold text-sm cursor-pointer';
                tabTugas.className = 'tab-btn tab-btn-active px-6 py-2.5 rounded-full font-bold text-sm shadow-lg cursor-pointer';
                
                btnAddMateri.className = 'action-btn action-btn-inactive px-5 py-2.5 rounded-full font-bold text-sm border-2 cursor-pointer';
                btnAddTugas.className = 'action-btn action-btn-active px-5 py-2.5 rounded-full font-bold text-sm border-2 cursor-pointer';
                
                materiContent.classList.add('hidden');
                tugasContent.classList.remove('hidden');
            }
        }

        // Modal Logic for MATERI
        function openMateriModal() {
            const modal = document.getElementById('modal-tambah-materi');
            const card = document.getElementById('modal-card');
            
            modal.classList.remove('hidden');
            void modal.offsetWidth; // force reflow
            
            modal.classList.remove('opacity-0');
            card.classList.remove('opacity-0', 'scale-95');
            card.classList.add('opacity-100', 'scale-100');
        }

        function closeMateriModal() {
            const modal = document.getElementById('modal-tambah-materi');
            const card = document.getElementById('modal-card');
            
            card.classList.remove('opacity-100', 'scale-100');
            card.classList.add('opacity-0', 'scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                document.getElementById('form-tambah-materi').reset();
                document.getElementById('file-label').textContent = 'Klik untuk pilih file';
            }, 300);
        }

        // Modal Logic for TUGAS
        function openTugasModal() {
            const modal = document.getElementById('modal-tambah-tugas');
            const card = document.getElementById('modal-tugas-card');
            
            modal.classList.remove('hidden');
            void modal.offsetWidth; // force reflow
            
            modal.classList.remove('opacity-0');
            card.classList.remove('opacity-0', 'scale-95');
            card.classList.add('opacity-100', 'scale-100');
        }

        function closeTugasModal() {
            const modal = document.getElementById('modal-tambah-tugas');
            const card = document.getElementById('modal-tugas-card');
            
            card.classList.remove('opacity-100', 'scale-100');
            card.classList.add('opacity-0', 'scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                document.getElementById('form-tambah-tugas').reset();
            }, 300);
        }

        function handleFileChange(input) {
            const label = document.getElementById('file-label');
            if (input.files && input.files[0]) {
                label.textContent = input.files[0].name;
            } else {
                label.textContent = 'Klik untuk pilih file';
            }
        }

        function handleUploadMateri(event) {
            event.preventDefault();
            
            const nama = document.getElementById('input-nama').value;
            const mapel = document.getElementById('input-mapel').value;
            const deadline = document.getElementById('input-deadline').value;
            const fileInput = document.getElementById('input-file');
            
            let fileExt = 'pdf';
            let fileUkuran = '1,8 MB';
            
            if (fileInput.files && fileInput.files[0]) {
                const file = fileInput.files[0];
                fileExt = file.name.split('.').pop().toLowerCase();
                fileUkuran = (file.size / (1024 * 1024)).toFixed(1) + ' MB';
            }

            const isVideo = ['mp4', 'mkv', 'avi', 'mov'].includes(fileExt);
            const formatText = isVideo ? 'MP4 Video' : (fileExt.toUpperCase() + ' Document');

            const newItem = {
                title: nama,
                subtitle: `${mapel} · ${fileExt.toUpperCase()} ${fileUkuran} · ${deadline}`,
                mapel: mapel,
                format: formatText,
                ukuran: fileUkuran,
                murid: 'Raisyah Syifa', // mock assignee
                topik: 'Materi Baru',
                desc: `Materi pembelajaran ${nama} untuk mata pelajaran ${mapel}. Silakan dipelajari secara menyeluruh sebelum tanggal ${deadline}.`,
                type: isVideo ? 'video' : 'pdf',
                isNew: true
            };

            materiData.unshift(newItem);
            renderMateriList(0);
            switchTab('materi');
            closeMateriModal();
        }

        function handleSaveTugas(event) {
            event.preventDefault();

            const judul = document.getElementById('input-tugas-judul').value;
            const murid = document.getElementById('input-tugas-murid').value;
            const mapel = document.getElementById('input-tugas-mapel').value;
            const deadline = document.getElementById('input-tugas-deadline').value;

            const waktuText = getWaktuString(deadline);

            const newTugas = {
                title: judul,
                murid: murid,
                mapel: mapel,
                deadline: deadline,
                waktu: waktuText,
                status: 'Dikerjakan' // default new status
            };

            tugasData.unshift(newTugas);
            renderTugasList();
            switchTab('tugas');
            closeTugasModal();
        }

        // Initialize view
        window.addEventListener('DOMContentLoaded', () => {
            renderMateriList(0);
            renderTugasList();
        });
    </script>
</body>
</html>
