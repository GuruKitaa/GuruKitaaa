<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Chat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .sidebar-purple { background-color: #6C28D9; }
        .bg-chat-canvas { background-color: #E5E7EB; }
        .bubble-sent { background-color: #9333EA; color: white; }
        .bubble-received { background-color: white; color: #1F2937; }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #CBD5E1; border-radius: 10px; }
    </style>
</head>
<body class="bg-white h-screen overflow-hidden">
    
    <div class="flex h-full">
        <!-- 1. LEFT SIDEBAR (PURPLE) -->
        <div class="w-[20%] sidebar-purple h-full flex flex-col items-center py-10">
            <!-- User Profile -->
            <div class="flex flex-col items-center mb-16">
                <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-white/20 mb-4 shadow-2xl">
                    <!-- Placeholder avatar to match the design style -->
                    <img src="https://i.pravatar.cc/150?u=raisha" alt="Raisha Syifa" class="w-full h-full object-cover">
                </div>
                <h2 class="text-white font-bold text-lg tracking-wide">Raisha Syifa</h2>
            </div>

            <!-- Menu Items -->
            <div class="w-full space-y-2 px-4">
                <a href="#" class="flex items-center gap-4 text-white p-3 bg-[#8B5CF6]/50 rounded-2xl transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    <span class="font-bold text-xs">Chat •</span>
                </a>
                <a href="#" class="flex items-center gap-4 text-white/80 hover:text-white p-3 hover:bg-white/5 rounded-2xl transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span class="font-bold text-xs">Dokumen</span>
                </a>
                <a href="#" class="flex items-center gap-4 text-white/80 hover:text-white p-3 hover:bg-white/5 rounded-2xl transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span class="font-bold text-xs">Pengaturan</span>
                </a>
            </div>
        </div>

        <!-- 2. CONTACT LIST (WHITE) -->
        <div class="w-[25%] bg-white border-r border-gray-100 flex flex-col">
            <!-- Search -->
            <div class="px-6 py-4 mt-2">
                <div class="relative flex items-center">
                    <div class="absolute left-4 text-gray-400 pointer-events-none">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" placeholder="Search" class="w-full bg-[#F1F3F4] border-none rounded-2xl py-2 pl-10 pr-4 text-[10px] font-medium text-gray-600 focus:ring-0 outline-none placeholder-gray-400">
                </div>
            </div>

            <!-- List -->
            <div class="flex-1 overflow-y-auto custom-scrollbar">
                <!-- Active Contact -->
                <div class="p-4 border-b border-gray-100 flex items-center gap-3 cursor-pointer hover:bg-gray-50 bg-[#F9FAFB]">
                    <img src="https://i.pravatar.cc/150?u=azizi" alt="" class="w-10 h-10 rounded-full">
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-baseline">
                            <h3 class="font-bold text-xs text-gray-900 truncate">Azizi Asadel (Tentor)</h3>
                            <span class="text-[9px] text-gray-400">12:00</span>
                        </div>
                        <p class="text-[10px] text-gray-500 truncate">Si gadis tombol yang semangatnya.</p>
                    </div>
                </div>

                <!-- Placeholder contacts to match layout -->
                @for($i=0; $i<6; $i++)
                <div class="p-4 border-b border-gray-100 flex items-center gap-3 opacity-60">
                    <div class="w-10 h-10 rounded-full bg-gray-100"></div>
                    <div class="flex-1 space-y-1.5">
                        <div class="h-2 bg-gray-100 rounded w-1/2"></div>
                        <div class="h-1.5 bg-gray-50 rounded w-3/4"></div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- 3. CHAT AREA (LIGHT GREY) -->
        <div class="flex-1 bg-chat-canvas flex flex-col">
            <!-- Header -->
            <div class="p-6 bg-transparent">
                <h2 class="font-bold text-gray-800 text-base">Azizi Asadel (Tentor)</h2>
            </div>

            <!-- Messages -->
            <div class="flex-1 overflow-y-auto px-10 py-6 space-y-6 custom-scrollbar">
                <!-- Received -->
                <div class="flex justify-start">
                    <div class="bubble-received p-4 rounded-[2rem] rounded-tl-none shadow-sm max-w-sm">
                        <p class="text-[11px] font-medium">Sudah dikerjakan PR matematikanya?</p>
                        <span class="text-[8px] text-gray-400 block text-right mt-1">12:00</span>
                    </div>
                </div>

                <!-- Sent -->
                <div class="flex justify-end">
                    <div class="bubble-sent p-4 rounded-[2rem] rounded-tr-none shadow-md max-w-sm">
                        <p class="text-[11px] font-medium">Sudah, tapi ada yang saya bingung.</p>
                        <span class="text-[8px] text-white/70 block text-right mt-1">12:00</span>
                    </div>
                </div>

                <!-- Received -->
                <div class="flex justify-start">
                    <div class="bubble-received p-4 rounded-[2rem] rounded-tl-none shadow-sm max-w-sm">
                        <p class="text-[11px] font-medium">Bagian mana yang sulit?</p>
                        <span class="text-[8px] text-gray-400 block text-right mt-1">12:00</span>
                    </div>
                </div>

                <!-- Sent -->
                <div class="flex justify-end">
                    <div class="bubble-sent p-4 rounded-[2rem] rounded-tr-none shadow-md max-w-sm">
                        <p class="text-[11px] font-medium">Yang tentang pecahan campuran.</p>
                        <span class="text-[8px] text-white/70 block text-right mt-1">12:00</span>
                    </div>
                </div>
            </div>

            <!-- Input Area -->
            <div class="p-6 flex items-center gap-4 bg-transparent">
                <div class="flex-1 relative">
                    <input type="text" placeholder="Type a message..." class="w-full bg-[#F3F4F6] border-none rounded-2xl py-3.5 px-6 text-xs outline-none shadow-inner">
                </div>
                <div class="flex items-center gap-2 text-gray-400">
                    <button class="hover:text-purple-600 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.414a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                    </button>
                    <button class="hover:text-purple-600 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
