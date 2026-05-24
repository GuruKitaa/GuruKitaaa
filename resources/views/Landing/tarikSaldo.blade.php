<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Tarik saldo dan cairkan pendapatan mengajar Anda ke rekening terdaftar di GuruKita.">
    <title>GuruKita - Tarik Saldo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }

        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        /* Bank card interactions */
        .bank-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }
        .bank-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px -5px rgba(124, 58, 237, 0.12);
        }
        .bank-card-active {
            border-color: #7C3AED !important;
            background: #FAF9FF;
            box-shadow: 0 8px 25px -5px rgba(124, 58, 237, 0.18);
        }

        /* Success modal overlay */
        .modal-overlay {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
        }

        /* Fade-in animation */
        .fade-in-up {
            animation: fadeInUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px) scale(0.97); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* Stagger children on page load */
        .stagger-1 { animation: fadeInUp 0.5s 0.05s cubic-bezier(0.16,1,0.3,1) both; }
        .stagger-2 { animation: fadeInUp 0.5s 0.12s cubic-bezier(0.16,1,0.3,1) both; }
        .stagger-3 { animation: fadeInUp 0.5s 0.20s cubic-bezier(0.16,1,0.3,1) both; }
        .stagger-4 { animation: fadeInUp 0.5s 0.28s cubic-bezier(0.16,1,0.3,1) both; }

        /* Saldo counter animation */
        .saldo-pulse {
            animation: saldoPulse 0.4s ease-out;
        }
        @keyframes saldoPulse {
            0%   { transform: scale(1); }
            50%  { transform: scale(1.04); }
            100% { transform: scale(1); }
        }

        /* Glow CTA */
        .glow-btn-yellow {
            box-shadow: 0 4px 14px 0 rgba(255, 192, 7, 0.45);
            transition: all 0.3s ease;
        }
        .glow-btn-yellow:hover {
            box-shadow: 0 6px 22px 0 rgba(255, 192, 7, 0.65);
            transform: translateY(-1px);
        }
        .glow-btn-yellow:active {
            transform: translateY(0px);
        }

        /* Table row hover */
        .history-row {
            transition: background 0.2s ease;
        }
        .history-row:hover {
            background: #FAF9FF;
        }

        /* Amount input focus ring */
        .amount-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.15);
            border-color: #7C3AED;
        }
    </style>
</head>
<body class="bg-[#F3F4F6] min-h-screen">
    @include('layouts.guru.navbar.guru')

    <!-- ============================== -->
    <!-- HERO GRADIENT BANNER           -->
    <!-- ============================== -->
    <div class="relative overflow-hidden">
        <div class="bg-gradient-to-r from-[#3b0764] via-[#501B8B] to-[#9333EA] pt-8 pb-14 px-4 sm:px-6 lg:px-8">
            <!-- Decorative blobs -->
            <div class="absolute top-[-40%] right-[-10%] w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-30%] left-[-5%] w-72 h-72 bg-purple-300/10 rounded-full blur-3xl"></div>

            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Back button -->
                <a href="/guru" class="inline-flex items-center gap-2 text-purple-200/80 hover:text-white text-sm font-semibold mb-4 transition-colors group">
                    <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Kembali ke Dashboard
                </a>

                <h1 class="text-white font-extrabold text-3xl sm:text-4xl md:text-5xl tracking-tight leading-tight italic">
                    Tarik Saldo
                </h1>
                <p class="text-purple-200/80 font-medium mt-2 text-sm sm:text-base max-w-2xl">
                    Cairkan Pendapatanmu ke rekening terdaftar
                </p>
            </div>
        </div>
    </div>

    <!-- ============================== -->
    <!-- SALDO TERSEDIA CARD            -->
    <!-- ============================== -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-20 mb-8">
        <div class="bg-gradient-to-r from-[#5B21B6] via-[#7C3AED] to-[#9333EA] rounded-2xl sm:rounded-3xl p-6 sm:p-8 text-white shadow-xl shadow-purple-500/15 stagger-1">
            <div class="relative z-10">
                <span class="text-sm sm:text-base font-semibold text-purple-200/80">Saldo Tersedia</span>
                <h2 id="saldo-display" class="text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mt-1 transition-all">
                    RP 900.000
                </h2>
                <p class="text-purple-200/70 text-xs sm:text-sm font-medium mt-2">Minimal penarikan 50.000</p>
            </div>
            <!-- Decorative circles inside card -->
            <div class="absolute top-[-20%] right-[-8%] w-48 h-48 bg-white/5 rounded-full blur-2xl"></div>
            <div class="absolute bottom-[-15%] left-[-4%] w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
        </div>
    </div>

    <!-- ============================== -->
    <!-- MAIN CONTENT GRID              -->
    <!-- ============================== -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">

            <!-- ========================= -->
            <!-- LEFT: Pilih Rekening      -->
            <!-- ========================= -->
            <div class="lg:col-span-5">
                <div class="bg-white border border-gray-100 rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-sm stagger-2 h-full">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-6">Pilih Rekening Tujuan</h2>

                    <div id="bank-cards-container" class="space-y-4">
                        <!-- Dynamically rendered -->
                    </div>

                    <!-- Tambah Rekening -->
                    <button onclick="showTambahRekeningToast()" class="mt-6 flex items-center gap-2 text-xs font-bold text-gray-500 hover:text-[#7C3AED] transition-colors group cursor-pointer">
                        <span class="w-7 h-7 rounded-lg bg-gray-100 group-hover:bg-purple-50 flex items-center justify-center transition-colors">
                            <svg class="w-3.5 h-3.5 text-gray-400 group-hover:text-[#7C3AED] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                            </svg>
                        </span>
                        + Tambah Rekening
                    </button>
                </div>
            </div>

            <!-- ========================= -->
            <!-- RIGHT: Ringkasan + Riwayat-->
            <!-- ========================= -->
            <div class="lg:col-span-7 flex flex-col gap-6 lg:gap-8">

                <!-- Ringkasan Penarikan -->
                <div class="bg-white border border-gray-100 rounded-2xl sm:rounded-3xl shadow-sm overflow-hidden stagger-3">
                    <!-- Purple header -->
                    <div class="bg-gradient-to-r from-[#7C3AED] via-[#8B5CF6] to-[#A855F7] px-6 sm:px-8 py-4">
                        <h2 class="text-lg sm:text-xl font-extrabold text-white italic">Ringkasan Penarikan</h2>
                        <p class="text-purple-200/80 text-xs sm:text-sm font-medium">Segera Selesaikan Penarikan Anda</p>
                    </div>

                    <!-- Body content -->
                    <div class="p-6 sm:p-8">
                        <!-- Details rows -->
                        <div class="space-y-3 mb-5">
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-sm text-gray-500 font-medium">Bank Tujuan</span>
                                <span id="ringkasan-bank" class="text-sm font-bold text-gray-800">Bank BCA</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-sm text-gray-500 font-medium">Nomer Virtual Acount</span>
                                <span id="ringkasan-norek" class="text-sm font-bold text-gray-800">3324696969</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-sm text-gray-500 font-medium">Atas nama</span>
                                <span id="ringkasan-nama" class="text-sm font-bold text-gray-800">Raisha Syifa</span>
                            </div>
                        </div>

                        <!-- Nominal input -->
                        <div class="mb-5">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nominal Penarikan</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm font-bold text-gray-400">Rp</span>
                                <input id="nominal-input" type="text" inputmode="numeric"
                                    class="amount-input w-full pl-10 pr-4 py-3 text-sm font-bold text-gray-800 border border-gray-200 rounded-xl transition-all duration-200"
                                    placeholder="Masukkan nominal" oninput="handleNominalInput(this)">
                            </div>
                            <p id="nominal-error" class="text-xs font-semibold text-red-500 mt-1.5 hidden"></p>
                        </div>

                        <!-- Total Diterima -->
                        <div class="flex items-center justify-between py-3 border-t-2 border-dashed border-gray-200">
                            <span class="text-sm font-bold text-[#7C3AED]">Total Diterima</span>
                            <span id="total-diterima" class="text-lg sm:text-xl font-extrabold text-[#7C3AED]">Rp 0</span>
                        </div>

                        <!-- CTA Button -->
                        <button id="btn-tarik" onclick="tarikDana()" disabled
                            class="mt-5 w-full sm:w-auto bg-[#FFC007] text-[#45069A] font-extrabold py-3 px-8 rounded-full text-sm transition-all duration-300 cursor-pointer select-none glow-btn-yellow disabled:opacity-50 disabled:cursor-not-allowed disabled:shadow-none disabled:transform-none">
                            Tarik Dana Sekarang
                        </button>
                    </div>
                </div>

                <!-- Riwayat Penarikan -->
                <div class="bg-white border border-gray-100 rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-sm stagger-4">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-5">Riwayat Penarikan</h2>

                    <div class="overflow-x-auto -mx-2">
                        <table class="w-full text-left min-w-[520px]">
                            <thead>
                                <tr class="border-b border-gray-100">
                                    <th class="px-3 py-3 text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-3 py-3 text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">Nominal</th>
                                    <th class="px-3 py-3 text-[10px] font-extrabold text-gray-400 uppercase tracking-wider">Rekening</th>
                                    <th class="px-3 py-3 text-[10px] font-extrabold text-gray-400 uppercase tracking-wider text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody id="riwayat-tbody">
                                <!-- Dynamically rendered -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================== -->
    <!-- SUCCESS MODAL (hidden)         -->
    <!-- ============================== -->
    <div id="success-modal" class="fixed inset-0 z-[100] hidden items-center justify-center modal-overlay">
        <div class="bg-white rounded-3xl p-8 sm:p-10 max-w-md w-full mx-4 text-center shadow-2xl fade-in-up">
            <!-- Checkmark circle -->
            <div class="w-20 h-20 mx-auto mb-5 rounded-full bg-gradient-to-br from-[#22C55E] to-[#16A34A] flex items-center justify-center shadow-lg shadow-green-200">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-2xl font-extrabold text-gray-900 mb-2">Penarikan Berhasil!</h3>
            <p id="modal-message" class="text-sm text-gray-500 font-medium mb-6">Dana sebesar Rp 700.000 akan segera ditransfer ke rekening Anda.</p>
            <button onclick="closeModal()" class="bg-[#7C3AED] hover:bg-purple-700 text-white font-extrabold py-3 px-8 rounded-full text-sm transition-all cursor-pointer shadow-lg shadow-purple-200">
                Kembali
            </button>
        </div>
    </div>

    <!-- ============================== -->
    <!-- TOAST CONTAINER                -->
    <!-- ============================== -->
    <div id="toast-container" class="fixed top-20 right-6 z-50 flex flex-col gap-3 pointer-events-none"></div>

    @include('layouts.footer.footer')

    <!-- ============================== -->
    <!-- INTERACTIVE JAVASCRIPT         -->
    <!-- ============================== -->
    <script>
        // ======== DATA STATE ========
        let currentSaldo = 900000;
        let activeBankId = 1;

        const bankAccounts = [
            { id: 1, code: 'BCA',     name: 'Bank BCA',     norek: '14532256',   atasNama: 'Raisha Syifa',  color: '#7C3AED' },
            { id: 2, code: 'BRI',     name: 'Bank BRI',     norek: '7543221',    atasNama: 'Raisha Syifa',  color: '#7C3AED' },
            { id: 3, code: 'MANDIRI', name: 'Bank Mandiri', norek: '0987655443', atasNama: 'Raisha Syifa',  color: '#FFC007' },
            { id: 4, code: 'BSI',     name: 'Bank Syariah', norek: '8443322222', atasNama: 'Raisha Syifa',  color: '#22C55E' },
        ];

        const riwayatData = [
            { tanggal: '08 Mei 2026',   nominal: 700000, rekening: 'BCA 123858383',  status: 'Berhasil' },
            { tanggal: '25 April 2026', nominal: 200000, rekening: 'BSI 86568383',   status: 'Berhasil' },
            { tanggal: '02 April 2026', nominal: 100000, rekening: 'BRI 8765432154', status: 'Berhasil' },
        ];

        // ======== FORMAT HELPERS ========
        function formatRupiah(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        function parseRupiahInput(str) {
            return parseInt(str.replace(/\D/g, ''), 10) || 0;
        }

        // ======== RENDER FUNCTIONS ========
        function renderSaldo() {
            const el = document.getElementById('saldo-display');
            el.textContent = 'RP ' + formatRupiah(currentSaldo);
            el.classList.remove('saldo-pulse');
            void el.offsetWidth; // force reflow
            el.classList.add('saldo-pulse');
        }

        function renderBankCards() {
            const container = document.getElementById('bank-cards-container');
            container.innerHTML = '';

            bankAccounts.forEach(bank => {
                const isActive = bank.id === activeBankId;
                const card = document.createElement('div');
                card.className = `bank-card border-2 rounded-2xl p-4 flex items-center gap-4 ${isActive ? 'bank-card-active' : 'border-gray-100 bg-white'}`;
                card.onclick = () => selectBank(bank.id);

                // Badge color mapping
                let badgeBg = 'bg-[#7C3AED]';
                if (bank.code === 'MANDIRI') badgeBg = 'bg-[#FFC007]';
                if (bank.code === 'BSI') badgeBg = 'bg-[#22C55E]';

                let badgeTextColor = 'text-white';
                if (bank.code === 'MANDIRI') badgeTextColor = 'text-[#45069A]';

                card.innerHTML = `
                    <div class="${badgeBg} ${badgeTextColor} font-extrabold text-[10px] px-3 py-2 rounded-lg tracking-wider min-w-[70px] text-center select-none">
                        ${bank.code}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-bold text-gray-800 leading-tight">${bank.name}</p>
                        <p class="text-xs text-gray-400 font-medium mt-0.5">${bank.norek}</p>
                    </div>
                    ${isActive ? `
                        <svg class="w-5 h-5 text-[#7C3AED] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    ` : ''}
                `;
                container.appendChild(card);
            });
        }

        function renderRingkasan() {
            const bank = bankAccounts.find(b => b.id === activeBankId);
            if (!bank) return;

            document.getElementById('ringkasan-bank').textContent = bank.name;
            document.getElementById('ringkasan-norek').textContent = bank.norek;
            document.getElementById('ringkasan-nama').textContent = bank.atasNama;
        }

        function renderRiwayat() {
            const tbody = document.getElementById('riwayat-tbody');
            tbody.innerHTML = '';

            riwayatData.forEach(item => {
                const tr = document.createElement('tr');
                tr.className = 'history-row border-b border-gray-50 last:border-b-0';
                tr.innerHTML = `
                    <td class="px-3 py-3.5 text-sm text-gray-600 font-medium whitespace-nowrap">${item.tanggal}</td>
                    <td class="px-3 py-3.5 text-sm text-gray-800 font-bold whitespace-nowrap">RP ${formatRupiah(item.nominal)}</td>
                    <td class="px-3 py-3.5 text-sm text-gray-600 font-medium whitespace-nowrap">${item.rekening}</td>
                    <td class="px-3 py-3.5 text-right">
                        <span class="px-3 py-1 text-[10px] font-bold bg-[#E6F4EA] text-[#137333] rounded-full uppercase tracking-wider">${item.status}</span>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        function renderAll() {
            renderSaldo();
            renderBankCards();
            renderRingkasan();
            renderRiwayat();
        }

        // ======== EVENT HANDLERS ========
        function selectBank(id) {
            activeBankId = id;
            renderBankCards();
            renderRingkasan();
        }

        function handleNominalInput(input) {
            // Strip non-digit, reformat
            let raw = input.value.replace(/\D/g, '');
            let num = parseInt(raw, 10) || 0;

            // Cap at saldo
            if (num > currentSaldo) num = currentSaldo;

            input.value = num > 0 ? formatRupiah(num) : '';

            // Update Total Diterima
            document.getElementById('total-diterima').textContent = num > 0 ? 'Rp ' + formatRupiah(num) : 'Rp 0';

            // Validation
            const errorEl = document.getElementById('nominal-error');
            const btn = document.getElementById('btn-tarik');

            if (num > 0 && num < 50000) {
                errorEl.textContent = 'Minimal penarikan adalah Rp 50.000';
                errorEl.classList.remove('hidden');
                btn.disabled = true;
            } else if (num > currentSaldo) {
                errorEl.textContent = 'Nominal melebihi saldo tersedia';
                errorEl.classList.remove('hidden');
                btn.disabled = true;
            } else {
                errorEl.classList.add('hidden');
                btn.disabled = num < 50000;
            }
        }

        function tarikDana() {
            const input = document.getElementById('nominal-input');
            const nominal = parseRupiahInput(input.value);

            if (nominal < 50000 || nominal > currentSaldo) return;

            // Update saldo
            currentSaldo -= nominal;
            renderSaldo();

            // Get active bank info
            const bank = bankAccounts.find(b => b.id === activeBankId);

            // Add to history (prepend)
            const today = new Date();
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const dateStr = `${String(today.getDate()).padStart(2, '0')} ${months[today.getMonth()]} ${today.getFullYear()}`;

            riwayatData.unshift({
                tanggal: dateStr,
                nominal: nominal,
                rekening: `${bank.code} ${bank.norek}`,
                status: 'Berhasil'
            });
            renderRiwayat();

            // Reset input
            input.value = '';
            document.getElementById('total-diterima').textContent = 'Rp 0';
            document.getElementById('btn-tarik').disabled = true;
            document.getElementById('nominal-error').classList.add('hidden');

            // Show success modal
            document.getElementById('modal-message').textContent = `Dana sebesar Rp ${formatRupiah(nominal)} akan segera ditransfer ke ${bank.name} Anda.`;
            const modal = document.getElementById('success-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('success-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Close modal on overlay click
        document.getElementById('success-modal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });

        function showTambahRekeningToast() {
            showToast('Fitur tambah rekening akan segera hadir!', 'info');
        }

        // ======== TOAST HELPER ========
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            const colorMap = {
                success: 'bg-green-50 border-green-200 text-green-800',
                info: 'bg-blue-50 border-blue-200 text-blue-800',
                error: 'bg-red-50 border-red-200 text-red-800',
            };
            toast.className = `transform translate-y-2 opacity-0 transition-all duration-300 pointer-events-auto flex items-center gap-3 px-5 py-3 rounded-xl shadow-lg border text-sm font-semibold ${colorMap[type] || colorMap.success}`;
            toast.innerHTML = `
                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span>${message}</span>
            `;
            const container = document.getElementById('toast-container');
            container.appendChild(toast);

            setTimeout(() => toast.classList.remove('translate-y-2', 'opacity-0'), 10);
            setTimeout(() => {
                toast.classList.add('translate-y-2', 'opacity-0');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }

        // ======== INIT ========
        window.addEventListener('DOMContentLoaded', () => {
            renderAll();
        });
    </script>
</body>
</html>
