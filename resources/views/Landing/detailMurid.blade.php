<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKita - Detail Murid</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        .murid-btn { transition: all 0.3s ease; }
        .murid-btn-active { background: #FFC007; color: #45069A; box-shadow: 0 4px 14px rgba(255, 192, 7, 0.3); }
        .murid-btn-inactive { background: rgba(255, 255, 255, 0.2); color: #fff; }
        .murid-btn-inactive:hover { background: rgba(255, 255, 255, 0.3); }

        .detail-transition-card { animation: fadeInUp 0.4s cubic-bezier(0.16, 1, 0.3, 1); }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .avatar-circle {
            background: linear-gradient(135deg, #7C3AED, #A855F7);
            box-shadow: 0 10px 25px -5px rgba(124, 58, 237, 0.3);
        }
    </style>
</head>
<body class="bg-[#F3F4F6] font-poppins min-h-screen">
    @include('layouts.guru.navbar.guru')

    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#A855F7] pt-8 pb-14 px-4 sm:px-6 lg:px-8">
            <!-- decorative blobs -->
            <div class="absolute top-[-40%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-30%] left-[-5%] w-72 h-72 bg-purple-300/10 rounded-full blur-3xl"></div>

            <div class="max-w-7xl mx-auto relative z-10">
                <h1 class="text-white font-extrabold text-3xl sm:text-4xl md:text-5xl tracking-tight leading-tight italic">
                    Detail Murid
                </h1>
                <p class="text-purple-100/80 font-medium mt-2 text-sm sm:text-base max-w-2xl">
                    Profil Dan Progress Belajar Murid
                </p>

                <!-- Murid Switcher Tabs -->
                <div class="mt-6 flex flex-wrap gap-3 overflow-x-auto pb-2 scrollbar-none" id="murid-tab-container">
                    <!-- Buttons generated dynamically -->
                </div>
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Profile Card -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-sm mb-6 flex flex-col md:flex-row md:items-center justify-between gap-6 detail-transition-card" id="profile-card-container">
            <div class="flex flex-col sm:flex-row items-center gap-6">
                <!-- Avatar Initials -->
                <div id="murid-initials" class="avatar-circle w-20 h-20 rounded-full flex items-center justify-center text-white font-extrabold text-2xl tracking-wider select-none">
                    RS
                </div>
                <!-- Profile Main Info -->
                <div class="text-center sm:text-left">
                    <h2 id="murid-name" class="text-2xl font-bold text-gray-900 mb-1">Raisyah Syifa</h2>
                    <p id="murid-metadata" class="text-xs sm:text-sm text-gray-500 font-medium leading-relaxed">
                        Kelas 11 IPA - Matematika - SMA 2 Negeri Surabaya - 081437584723
                    </p>

                    <!-- Stats Row -->
                    <div class="flex items-center justify-center sm:justify-start gap-8 mt-5">
                        <div class="text-center sm:text-left">
                            <span id="stat-sesi" class="block text-2xl font-extrabold text-[#7C3AED]">24</span>
                            <span class="text-[10px] sm:text-xs font-bold text-gray-400 uppercase tracking-wider">Total Sesi</span>
                        </div>
                        <div class="text-center sm:text-left border-l border-gray-100 pl-8">
                            <span id="stat-tugas" class="block text-2xl font-extrabold text-[#7C3AED]">9</span>
                            <span class="text-[10px] sm:text-xs font-bold text-gray-400 uppercase tracking-wider">Tugas Selesai</span>
                        </div>
                        <div class="text-center sm:text-left border-l border-gray-100 pl-8">
                            <span id="stat-gabung" class="block text-2xl font-extrabold text-[#7C3AED]">Jan 2026</span>
                            <span class="text-[10px] sm:text-xs font-bold text-gray-400 uppercase tracking-wider">Bergabung</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat Button -->
            <div class="flex-shrink-0 flex justify-center">
                <a href="/chat" class="bg-[#7C3AED] hover:bg-purple-700 text-white font-bold px-8 py-3 rounded-2xl text-sm transition-all shadow-lg shadow-purple-200 select-none cursor-pointer">
                    Chat
                </a>
            </div>
        </div>

        <!-- Grid Progress & Tugas -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Progres Belajar -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-sm detail-transition-card">
                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-6">Progres Belajar</h3>
                <div class="space-y-4" id="progres-list">
                    <!-- Dynamic Progress list -->
                </div>
            </div>

            <!-- Tugas Diberikan -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-sm detail-transition-card">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">Tugas Diberikan</h3>
                    <!-- Add Task Icon/Button -->
                    <a href="/materi-tugas" class="bg-[#7C3AED] hover:bg-purple-700 text-white font-bold px-4 py-2 rounded-xl text-xs flex items-center gap-1.5 transition-all shadow-md select-none cursor-pointer">
                        <span>+ Tugas</span>
                    </a>
                </div>
                <div class="space-y-4" id="tugas-list">
                    <!-- Dynamic Tugas list -->
                </div>
            </div>
        </div>

        <!-- Catatan Guru -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-sm detail-transition-card">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-4">Catatan Guru</h3>
            <div class="border border-gray-200 bg-[#FAF9FF] rounded-2xl p-5 sm:p-6">
                <p id="catatan-text" class="text-sm text-gray-600 leading-relaxed font-medium">
                    Raisha adalah murid yang rajin dan memiliki motivasi belajar yang tinggi. Pemahaman konsep aljabar sangat baik. Perlu perhatian lebih pada materi persamaan lingkaran yang baru diperkenalkan. Disarankan berlatih soal-soal SBMPTN secara rutin.
                </p>
            </div>
        </div>

    </div>

    @include('layouts.footer.footer')

    <script>
        // Full dataset representing all students shown in the tab switcher
        const muridData = {
            'Raisyah Syifa': {
                initials: 'RS',
                kelas: 'Kelas 11 IPA - Matematika - SMA 2 Negeri Surabaya - 081437584723',
                totalSesi: '24',
                tugasSelesai: '9',
                bergabung: 'Jan 2026',
                progres: [
                    { tanggal: '22 APRIL', judul: 'Matematika - Persamaan Lingkaran', sub: '1 JAM - Online', status: 'Selesai' },
                    { tanggal: '18 APRIL', judul: 'Matematika - Trigonometri', sub: '1 JAM - Online', status: 'Selesai' },
                    { tanggal: '18 APRIL', judul: 'Matematika - Statistika', sub: '1 JAM - Online', status: 'Selesai' },
                    { tanggal: '18 APRIL', judul: 'Matematika - Aljabar', sub: '1 JAM - Online', status: 'Selesai' },
                    { tanggal: '18 APRIL', judul: 'Matematika - Kalkulus', sub: '1 JAM - Online', status: 'Selesai' }
                ],
                tugas: [
                    { judul: 'Matematika - Persamaan Lingkaran', sub: 'Deadline 25 April 2026', status: 'Belum' },
                    { judul: 'Matematika - Persamaan Lingkaran', sub: 'Deadline 25 April 2026', status: 'Selesai' },
                    { judul: 'Matematika - Persamaan Lingkaran', sub: 'Deadline 25 April 2026', status: 'Selesai' }
                ],
                catatan: 'Raisha adalah murid yang rajin dan memiliki motivasi belajar yang tinggi. Pemahaman konsep aljabar sangat baik. Perlu perhatian lebih pada materi persamaan lingkaran yang baru diperkenalkan. Disarankan berlatih soal-soal SBMPTN secara rutin.'
            },
            'Bintang Prasetyo': {
                initials: 'BP',
                kelas: 'Kelas 12 IPA - Fisika - SMA 5 Surabaya - 082134567890',
                totalSesi: '18',
                tugasSelesai: '7',
                bergabung: 'Feb 2026',
                progres: [
                    { tanggal: '20 APRIL', judul: 'Fisika - Getaran Gelombang', sub: '1.5 JAM - Offline', status: 'Selesai' },
                    { tanggal: '15 APRIL', judul: 'Fisika - Termodinamika', sub: '1 JAM - Online', status: 'Selesai' },
                    { tanggal: '10 APRIL', judul: 'Fisika - Listrik Statis', sub: '1 JAM - Online', status: 'Selesai' }
                ],
                tugas: [
                    { judul: 'Fisika - Soal Getaran Gelombang', sub: 'Deadline 28 April 2026', status: 'Belum' },
                    { judul: 'Fisika - Rangkuman Termodinamika', sub: 'Deadline 22 April 2026', status: 'Selesai' }
                ],
                catatan: 'Bintang memiliki daya tangkap yang baik di bidang mekanika dan gelombang, namun perlu lebih teliti dalam kalkulasi matematis rumit. Latihan soal berkala sangat disarankan.'
            },
            'Nadia Putri': {
                initials: 'NP',
                kelas: 'Kelas 11 IPA - Kimia - SMA 1 Surabaya - 081245678901',
                totalSesi: '20',
                tugasSelesai: '8',
                bergabung: 'Mar 2026',
                progres: [
                    { tanggal: '19 APRIL', judul: 'Kimia - Reaksi Redoks', sub: '1 JAM - Online', status: 'Selesai' },
                    { tanggal: '12 APRIL', judul: 'Kimia - Ikatan Kimia', sub: '1.5 JAM - Offline', status: 'Selesai' }
                ],
                tugas: [
                    { judul: 'Kimia - Penyetaraan Reaksi Redoks', sub: 'Deadline 26 April 2026', status: 'Selesai' },
                    { judul: 'Kimia - Lembar Kerja Ikatan Kovalen', sub: 'Deadline 18 April 2026', status: 'Selesai' }
                ],
                catatan: 'Nadia menunjukkan pemahaman luar biasa dalam reaksi redoks. Konsistensinya dalam mengerjakan tugas patut diapresiasi.'
            },
            'Aldi Firmansyah': {
                initials: 'AF',
                kelas: 'Kelas 10 IPA - Matematika - SMA 8 Surabaya - 083898765432',
                totalSesi: '15',
                tugasSelesai: '5',
                bergabung: 'Apr 2026',
                progres: [
                    { tanggal: '21 APRIL', judul: 'Matematika - Persamaan Kuadrat', sub: '1 JAM - Online', status: 'Selesai' },
                    { tanggal: '14 APRIL', judul: 'Matematika - Sistem Linear', sub: '1 JAM - Online', status: 'Selesai' }
                ],
                tugas: [
                    { judul: 'Matematika - Latihan Kuadrat Set A', sub: 'Deadline 27 April 2026', status: 'Belum' },
                    { judul: 'Matematika - Kuis SPLDV', sub: 'Deadline 19 April 2026', status: 'Selesai' }
                ],
                catatan: 'Aldi baru saja bergabung dan sedang mengejar materi persamaan kuadrat. Sikap belajarnya aktif dan memiliki inisiatif bertanya yang tinggi.'
            }
        };

        // Render murid switch buttons in header tab switcher
        function renderMuridSwitcher(activeName = 'Raisyah Syifa') {
            const container = document.getElementById('murid-tab-container');
            container.innerHTML = '';

            Object.keys(muridData).forEach((name) => {
                const isActive = name === activeName;
                const button = document.createElement('button');
                button.className = `murid-btn px-6 py-2.5 rounded-full font-bold text-xs cursor-pointer ${isActive ? 'murid-btn-active' : 'murid-btn-inactive'}`;
                button.textContent = name;
                button.onclick = () => selectMurid(name);
                container.appendChild(button);
            });
        }

        // Handle selection change
        function selectMurid(name) {
            // Update active states on switcher tabs
            renderMuridSwitcher(name);

            // Fetch data
            const data = muridData[name];

            // Re-apply transitions
            const containerIds = ['profile-card-container', 'progres-list', 'tugas-list', 'catatan-text'];
            containerIds.forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    el.classList.remove('detail-transition-card');
                    void el.offsetWidth; // force reflow
                    el.classList.add('detail-transition-card');
                }
            });

            // Update profile
            document.getElementById('murid-initials').textContent = data.initials;
            document.getElementById('murid-name').textContent = name;
            document.getElementById('murid-metadata').textContent = data.kelas;
            document.getElementById('stat-sesi').textContent = data.totalSesi;
            document.getElementById('stat-tugas').textContent = data.tugasSelesai;
            document.getElementById('stat-gabung').textContent = data.bergabung;

            // Update progress list
            const progressList = document.getElementById('progres-list');
            progressList.innerHTML = '';
            data.progres.forEach(item => {
                const itemDiv = document.createElement('div');
                itemDiv.className = 'flex items-center justify-between border-b border-gray-100 pb-3 last:border-b-0 last:pb-0';
                itemDiv.innerHTML = `
                    <div class="flex items-start gap-4">
                        <span class="text-[10px] font-extrabold text-gray-400 uppercase pt-0.5 tracking-wider w-16">${item.tanggal}</span>
                        <div>
                            <p class="text-sm font-bold text-gray-800 leading-tight">${item.judul}</p>
                            <p class="text-[10px] font-semibold text-gray-400 uppercase mt-0.5">${item.sub}</p>
                        </div>
                    </div>
                    <span class="px-3.5 py-1 text-[10px] font-bold bg-[#E6F4EA] text-[#137333] rounded-full uppercase tracking-wider">${item.status}</span>
                `;
                progressList.appendChild(itemDiv);
            });

            // Update tugas list
            const tugasList = document.getElementById('tugas-list');
            tugasList.innerHTML = '';
            data.tugas.forEach(item => {
                const isSelesai = item.status === 'Selesai';
                const badgeClass = isSelesai ? 'bg-[#E6F4EA] text-[#137333]' : 'bg-[#FCE8E6] text-[#C5221F]';

                const itemDiv = document.createElement('div');
                itemDiv.className = 'flex items-center justify-between border-b border-gray-100 pb-3.5 last:border-b-0 last:pb-0';
                itemDiv.innerHTML = `
                    <div>
                        <p class="text-sm font-bold text-gray-800 leading-tight">${item.judul}</p>
                        <p class="text-[10px] font-semibold text-gray-400 mt-1">${item.sub}</p>
                    </div>
                    <span class="px-3.5 py-1 text-[10px] font-bold ${badgeClass} rounded-full uppercase tracking-wider">${item.status}</span>
                `;
                tugasList.appendChild(itemDiv);
            });

            // Update catatan
            document.getElementById('catatan-text').textContent = data.catatan;
        }

        // Initialize view
        window.addEventListener('DOMContentLoaded', () => {
            selectMurid('Raisyah Syifa');
        });
    </script>
</body>
</html>
