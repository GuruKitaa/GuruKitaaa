<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Detail kelas dan jadwal sesi belajar harian GuruKita.">
    <title>GuruKita - Detail Sesi Kelas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        .session-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .session-card-active {
            border-color: #7C3AED;
            background-color: #FAF9FF;
            box-shadow: 0 10px 25px -5px rgba(124, 58, 237, 0.15), 0 8px 10px -6px rgba(124, 58, 237, 0.15);
        }
        .session-card-inactive:hover {
            border-color: #ddd6fe;
            transform: translateY(-2px);
        }
        .glow-btn {
            box-shadow: 0 4px 14px 0 rgba(124, 58, 237, 0.4);
        }
        .glow-btn:hover {
            box-shadow: 0 6px 20px 0 rgba(124, 58, 237, 0.6);
        }
    </style>
</head>
<body class="bg-[#F8FAFC] min-h-screen">
    @include('layouts.guru.navbar.guru')

    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-r from-[#3b0764] via-[#501B8B] to-[#7C3AED] text-white py-12 px-4 sm:px-6 lg:px-8 shadow-md">
        <!-- Decorative abstract blobs -->
        <div class="absolute top-[-30%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-[-20%] left-[-5%] w-72 h-72 bg-purple-300/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <h1 id="hero-title" class="font-extrabold text-3xl sm:text-4xl md:text-5xl italic tracking-tight leading-tight transition-all duration-300">
                Sesi Matematika - Andri Susanto
            </h1>
            <p id="hero-subtitle" class="text-purple-200/90 font-semibold mt-2 text-sm sm:text-base transition-all duration-300">
                Kelas 12 - Online Via Google Meet
            </p>

            <!-- Metadata Row -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 mt-8 pt-8 border-t border-white/10">
                <div>
                    <span class="block text-xs uppercase font-bold text-purple-200/70 tracking-wider">Jam Mulai</span>
                    <span id="hero-jam-mulai" class="block text-sm sm:text-base font-extrabold text-white mt-1">14.00 WIB</span>
                </div>
                <div>
                    <span class="block text-xs uppercase font-bold text-purple-200/70 tracking-wider">Jam Selesai</span>
                    <span id="hero-jam-selesai" class="block text-sm sm:text-base font-extrabold text-white mt-1">15.30 WIB</span>
                </div>
                <div>
                    <span class="block text-xs uppercase font-bold text-purple-200/70 tracking-wider">Durasi</span>
                    <span id="hero-durasi" class="block text-sm sm:text-base font-extrabold text-white mt-1">1 Jam</span>
                </div>
                <div>
                    <span class="block text-xs uppercase font-bold text-purple-200/70 tracking-wider">Metode</span>
                    <span id="hero-metode" class="block text-sm sm:text-base font-extrabold text-white mt-1">Online</span>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <span class="block text-xs uppercase font-bold text-purple-200/70 tracking-wider">Tarif</span>
                    <span id="hero-tarif" class="block text-sm sm:text-base font-extrabold text-white mt-1">100.000</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left Column: Semua Sesi Hari ini -->
            <div class="lg:col-span-7">
                <div class="bg-white border border-gray-100 rounded-3xl p-6 sm:p-8 shadow-sm h-full">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-4">Semua Sesi Hari ini</h2>
                    <hr class="border-gray-100 mb-6">
                    
                    <!-- Session cards container -->
                    <div id="session-cards-container" class="space-y-5">
                        <!-- Will be dynamically populated by JavaScript -->
                    </div>
                </div>
            </div>

            <!-- Right Column: Catatan Pembelajaran & Timeline Hari Ini -->
            <div class="lg:col-span-5 flex flex-col gap-8">
                
                <!-- Card: Catatan Pembelajaran -->
                <div class="bg-white border border-gray-100 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-gray-900">Catatan Pembelajaran</h2>
                    <p id="catatan-subtitle" class="text-xs sm:text-sm text-gray-400 font-semibold mt-1 mb-4">
                        Catatan untuk sesi Bintang Prasetyo
                    </p>
                    <hr class="border-gray-100 mb-5">
                    
                    <div>
                        <textarea id="catatan-textarea" 
                            class="w-full min-h-[140px] p-4 text-sm text-gray-700 bg-white border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 resize-none font-medium leading-relaxed" 
                            placeholder="Tulis catatan pembelajaran untuk sesi ini..."></textarea>
                        
                        <button id="save-catatan-btn" onclick="saveActiveCatatan()" 
                            class="mt-4 bg-[#7C3AED] hover:bg-purple-700 text-white font-extrabold px-6 py-3 rounded-full text-xs sm:text-sm transition-all duration-300 cursor-pointer select-none glow-btn">
                            Simpan Catatan
                        </button>
                    </div>
                </div>

                <!-- Card: Timeline Hari Ini -->
                <div class="bg-white border border-gray-100 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-4">Timeline Hari Ini</h2>
                    <hr class="border-gray-100 mb-6">
                    
                    <!-- Timeline wrapper -->
                    <div id="timeline-container" class="relative pl-2">
                        <!-- Will be dynamically populated by JavaScript -->
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- Toast Notification Container -->
    <div id="toast-container" class="fixed top-20 right-6 z-50 flex flex-col gap-3 pointer-events-none"></div>

    @include('layouts.footer.footer')

    <!-- Dynamic Dashboard State Script -->
    <script>
        // Local state representing our dynamic data
        const sessionData = [
            {
                id: 1,
                name: "Raisyah Syifa",
                subject: "Matematika",
                kelas: "Kelas 11",
                subtitle: "Matematika - Kelas 11",
                heroSubtitle: "Kelas 11 - Online Via Google Meet",
                status: "Selesai", // Selesai, Berlangsung, Akan Datang
                jamMulai: "09.00",
                jamSelesai: "10.00",
                durasi: "1 JAM",
                tarif: "75.000",
                catatan: "Raisyah menunjukkan ketertarikan yang tinggi pada aljabar linear. PR halaman 22 sudah selesai dengan baik. Diperlukan latihan tambahan pada bab matriks determinan."
            },
            {
                id: 2,
                name: "Bintang Prasetyo",
                subject: "Fisika",
                kelas: "Kelas 12",
                subtitle: "Fisika - Kelas 12",
                heroSubtitle: "Kelas 12 - Online Via Google Meet",
                status: "Berlangsung",
                jamMulai: "14.00",
                jamSelesai: "15.30",
                durasi: "1 JAM",
                tarif: "100.000",
                catatan: "Bintang Sudah memahami konsep getaran dan gelombang transversal. Masih perlu latihan lebih untuk gelombang longitudial. Tugas soal latihan halaman 45-47"
            },
            {
                id: 3,
                name: "Nadia Putri",
                subject: "Kimia",
                kelas: "Kelas 10",
                subtitle: "Kimia - Kelas 10",
                heroSubtitle: "Kelas 10 - Online Via Google Meet",
                status: "Akan Datang",
                jamMulai: "17.00",
                jamSelesai: "18.00",
                durasi: "1 JAM",
                tarif: "75.000",
                catatan: "Materi redoks dasar. Harap siapkan modul bab 4 sebelum sesi dimulai."
            },
            {
                id: 4,
                name: "Aldi Firmansyah",
                subject: "Matematika",
                kelas: "Kelas 10",
                subtitle: "Matematika - Kelas 10",
                heroSubtitle: "Kelas 10 - Online Via Google Meet",
                status: "Akan Datang",
                jamMulai: "19.00",
                jamSelesai: "20.00",
                durasi: "1 JAM",
                tarif: "75.000",
                catatan: "Latihan pemecahan persamaan kuadrat. Masih ada beberapa kesalahan di tanda minus."
            }
        ];

        // Active state identifier
        let activeSessionId = 2; // Default active on load: Bintang Prasetyo

        // DOM elements
        const cardsContainer = document.getElementById('session-cards-container');
        const timelineContainer = document.getElementById('timeline-container');
        const heroTitle = document.getElementById('hero-title');
        const heroSubtitle = document.getElementById('hero-subtitle');
        const heroJamMulai = document.getElementById('hero-jam-mulai');
        const heroJamSelesai = document.getElementById('hero-jam-selesai');
        const heroDurasi = document.getElementById('hero-durasi');
        const heroMetode = document.getElementById('hero-metode');
        const heroTarif = document.getElementById('hero-tarif');
        const catatanSubtitle = document.getElementById('catatan-subtitle');
        const catatanTextarea = document.getElementById('catatan-textarea');

        // Render functions
        function renderDashboard() {
            renderCards();
            renderTimeline();
            updateHeroAndNotes();
        }

        function renderCards() {
            cardsContainer.innerHTML = '';
            
            sessionData.forEach(session => {
                const isActive = session.id === activeSessionId;
                
                // Determine Badge design based on status
                let badgeClass = '';
                if (session.status === 'Selesai') {
                    badgeClass = 'bg-[#E6F4EA] text-[#137333]';
                } else if (session.status === 'Berlangsung') {
                    badgeClass = 'bg-[#E8F0FE] text-[#1A73E8] border border-[#1A73E8]/20';
                } else {
                    badgeClass = 'bg-gray-100 text-gray-500';
                }

                // Card element
                const card = document.createElement('div');
                card.className = `session-card border rounded-2xl p-5 cursor-pointer ${
                    isActive 
                        ? 'session-card-active' 
                        : 'session-card-inactive border-gray-100 bg-white'
                }`;
                card.setAttribute('onclick', `setActiveSession(${session.id})`);

                // Main card content html
                let contentHtml = `
                    <div class="flex items-start justify-between">
                        <div>
                            <h3 class="font-bold text-base text-gray-800">${session.name}</h3>
                            <p class="text-xs text-gray-400 font-medium mt-0.5">${session.subtitle}</p>
                        </div>
                        <span class="px-3 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider ${badgeClass}">
                            ${session.status === 'Berlangsung' ? 'Berlangsung' : session.status}
                        </span>
                    </div>

                    <!-- Details Grid -->
                    <div class="grid grid-cols-4 gap-2 mt-5 pt-4 border-t border-gray-100/80 text-center">
                        <div>
                            <span class="block text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">Jam</span>
                            <span class="block text-sm font-bold text-gray-800 mt-1">${session.jamMulai}</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">Selesai</span>
                            <span class="block text-sm font-bold text-gray-800 mt-1">${session.jamSelesai}</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">Durasi</span>
                            <span class="block text-sm font-bold text-gray-800 mt-1">${session.durasi}</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">Tarif</span>
                            <span class="block text-sm font-bold text-gray-800 mt-1">${session.tarif}</span>
                        </div>
                    </div>
                `;

                // If active and Berlangsung, show the confirmation button
                if (isActive && session.status === 'Berlangsung') {
                    contentHtml += `
                        <button onclick="confirmSesiSelesai(event, ${session.id})" 
                            class="flex items-center justify-center gap-1.5 bg-[#7C3AED] hover:bg-purple-700 text-white font-extrabold py-2.5 px-6 rounded-xl transition-all duration-300 w-full mt-5 text-xs tracking-wide shadow-md shadow-purple-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                            Konfirmasi Selesai
                        </button>
                    `;
                } else if (isActive && session.status === 'Selesai') {
                    contentHtml += `
                        <div class="flex items-center justify-center gap-2 mt-5 text-xs text-green-600 font-bold bg-green-50/50 py-2 rounded-xl border border-green-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Sesi ini telah dikonfirmasi selesai
                        </div>
                    `;
                }

                card.innerHTML = contentHtml;
                cardsContainer.appendChild(card);
            });
        }

        function renderTimeline() {
            timelineContainer.innerHTML = '';
            
            sessionData.forEach((session, index) => {
                const isLast = index === sessionData.length - 1;
                
                // Color configuration based on status
                let dotClass = '';
                let textClass = 'text-gray-400';
                
                if (session.status === 'Selesai') {
                    dotClass = 'bg-[#137333] border-[#137333] ring-4 ring-green-50';
                    textClass = 'text-[#137333]';
                } else if (session.status === 'Berlangsung') {
                    dotClass = 'bg-[#1A73E8] border-[#1A73E8] ring-4 ring-blue-50';
                    textClass = 'text-[#1A73E8] font-bold';
                } else {
                    dotClass = 'bg-gray-300 border-gray-300 ring-4 ring-gray-50';
                    textClass = 'text-gray-400';
                }

                const item = document.createElement('div');
                item.className = 'relative pl-8 pb-8 last:pb-0';
                
                item.innerHTML = `
                    <!-- Vertical Line -->
                    ${!isLast ? '<div class="absolute left-3.5 top-6 bottom-0 w-[2px] bg-gray-200"></div>' : ''}
                    
                    <!-- Node Circle -->
                    <div class="absolute left-1.5 top-1.5 w-4 h-4 rounded-full border-2 border-white flex items-center justify-center transition-all duration-300 ${dotClass}"></div>
                    
                    <!-- Content -->
                    <div class="cursor-pointer" onclick="setActiveSession(${session.id})">
                        <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">${session.jamMulai} - ${session.jamSelesai}</span>
                        <h4 class="text-sm font-bold text-gray-800 leading-tight mt-0.5">${session.name} - ${session.subject}</h4>
                        <span class="text-[10px] font-semibold block mt-0.5 ${textClass}">
                            ${session.status === 'Berlangsung' ? 'Sedang Berlangsung' : session.status}
                        </span>
                    </div>
                `;

                timelineContainer.appendChild(item);
            });
        }

        function updateHeroAndNotes() {
            const activeSession = sessionData.find(s => s.id === activeSessionId);
            if (!activeSession) return;

            // Update Hero Banner details
            heroTitle.textContent = `Sesi ${activeSession.subject} - Andri Susanto`;
            heroSubtitle.textContent = activeSession.heroSubtitle;
            heroJamMulai.textContent = `${activeSession.jamMulai} WIB`;
            heroJamSelesai.textContent = `${activeSession.jamSelesai} WIB`;
            heroDurasi.textContent = activeSession.durasi;
            heroTarif.textContent = activeSession.tarif;

            // Update Notes area
            catatanSubtitle.textContent = `Catatan untuk sesi ${activeSession.name}`;
            catatanTextarea.value = activeSession.catatan;
        }

        // Action Handlers
        function setActiveSession(id) {
            activeSessionId = id;
            renderDashboard();
        }

        function confirmSesiSelesai(event, id) {
            // Prevent event bubbling to trigger card selection
            event.stopPropagation();

            const session = sessionData.find(s => s.id === id);
            if (session && session.status === 'Berlangsung') {
                session.status = 'Selesai';
                renderDashboard();
                showToast(`Sesi belajar ${session.name} telah selesai dikonfirmasi!`, 'success');
            }
        }

        function saveActiveCatatan() {
            const activeSession = sessionData.find(s => s.id === activeSessionId);
            if (activeSession) {
                activeSession.catatan = catatanTextarea.value;
                showToast(`Catatan pembelajaran untuk ${activeSession.name} berhasil disimpan!`, 'success');
            }
        }

        // Toast helper
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `transform translate-y-2 opacity-0 transition-all duration-300 pointer-events-auto flex items-center gap-3 px-4 py-3 rounded-xl shadow-lg border text-sm font-semibold ${
                type === 'success' 
                    ? 'bg-green-50 border-green-200 text-green-800' 
                    : 'bg-blue-50 border-blue-200 text-blue-800'
            }`;
            toast.innerHTML = `
                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span>${message}</span>
            `;
            const container = document.getElementById('toast-container');
            container.appendChild(toast);
            
            // Trigger animation
            setTimeout(() => {
                toast.classList.remove('translate-y-2', 'opacity-0');
            }, 10);
            
            // Remove after delay
            setTimeout(() => {
                toast.classList.add('translate-y-2', 'opacity-0');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }

        // Initialize dashboard
        window.addEventListener('DOMContentLoaded', () => {
            renderDashboard();
        });
    </script>
</body>
</html>
