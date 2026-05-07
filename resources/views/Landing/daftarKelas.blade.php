<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Daftar kelas yang diikuti di GuruKita. Kelola pembelajaran les privat Anda dengan mudah.">
    <title>GuruKita - Daftar Kelas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b5cf6; }

        .teacher-card {
            background-color: #501B8B;
            border-radius: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .image-container {
            background: linear-gradient(135deg, #A855F7 0%, #7C3AED 100%);
            border-radius: 1.5rem;
            padding: 10px;
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-white min-h-screen">
    @include('layouts.guru.navbar.guru')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Page Title -->
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900">Daftar Kelas Yang Diikuti</h1>
        </div>

        <!-- Class List -->
        <div class="space-y-12">
            <!-- Class Card 1 -->
            <a href="/detail-kelas" class="block">
                <div class="teacher-card flex flex-col md:flex-row items-center md:items-stretch overflow-visible relative">
                    <!-- Image Section with Overlap Effect -->
                    <div class="p-6 md:p-0 md:pl-6 md:py-6 flex-shrink-0">
                        <div class="image-container w-64 h-80 md:w-72 md:h-96 shadow-2xl overflow-hidden">
                            <img src="{{ asset('images/Teacher.png') }}" alt="Azizi Shafa A." class="w-full h-full object-cover object-top rounded-xl">
                        </div>
                    </div>
                    
                    <!-- Info Section -->
                    <div class="flex-grow p-8 md:p-12 flex flex-col justify-center text-white">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Azizi Shafa A.</h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-8 flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">Guru Matematika</span>
                            </div>
                            
                            <div class="flex items-center gap-4">
                                <div class="w-8 flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">25 Murid Aktif</span>
                            </div>
                            
                            <div class="flex items-center gap-4">
                                <div class="w-8 flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">Bahasa Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Class Card 2 -->
            <a href="/detail-kelas" class="block">
                <div class="teacher-card flex flex-col md:flex-row items-center md:items-stretch overflow-visible relative">
                    <!-- Image Section with Overlap Effect -->
                    <div class="p-6 md:p-0 md:pl-6 md:py-6 flex-shrink-0">
                        <div class="image-container w-64 h-80 md:w-72 md:h-96 shadow-2xl overflow-hidden">
                            <img src="{{ asset('images/Student.png') }}" alt="Azizi Shafa A." class="w-full h-full object-cover object-top rounded-xl">
                        </div>
                    </div>
                    
                    <!-- Info Section -->
                    <div class="flex-grow p-8 md:p-12 flex flex-col justify-center text-white">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Azizi Shafa A.</h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-8 flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">Guru Matematika</span>
                            </div>
                            
                            <div class="flex items-center gap-4">
                                <div class="w-8 flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">25 Murid Aktif</span>
                            </div>
                            
                            <div class="flex items-center gap-4">
                                <div class="w-8 flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">Bahasa Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </main>

    @include('layouts.footer.footer')
</body>
</html>
