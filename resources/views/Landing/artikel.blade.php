<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Artikel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .article-card {
            background-color: #F3F4F6;
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-white min-h-screen">
    @include('layouts.guru.navbar.guru')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Banner Section -->
        <div class="relative bg-[#501B8B] rounded-[2rem] overflow-hidden mb-12 p-8 md:p-12 flex flex-col md:flex-row items-center">
            <div class="md:w-3/5 text-white z-10">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">Apa itu Artikel?</h1>
                <p class="text-lg text-purple-100 leading-relaxed max-w-xl">
                    Artikel adalah wadah bagi Anda untuk mengeksplorasi wawasan baru, berita terkini, dan panduan inspiratif seputar dunia pendidikan dan pengembangan diri.
                </p>
            </div>
            <div class="md:w-2/5 mt-8 md:mt-0 flex justify-end">
                <img src="{{ asset('images/artikel_banner.png') }}" alt="Artikel Illustration" class="w-64 h-auto md:w-80 object-contain">
            </div>
        </div>

        <!-- Heading -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Temukan Artikel menarik hari ini!</h2>
        </div>

        <!-- Article List -->
        <div class="space-y-8">
            <!-- Article Card 1 -->
            <div class="article-card flex flex-col md:flex-row overflow-hidden">
                <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
                    <img src="{{ asset('images/artikel_1.png') }}" alt="Pentingnya Pendidikan" class="w-full h-full object-cover">
                </div>
                <div class="md:w-2/3 p-6 md:p-8 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Pentingnya Pendidikan Bagi Masa Depan</h3>
                        <p class="text-gray-600 line-clamp-3 leading-relaxed">
                            Pendidikan sangat penting untuk masa depan karena membantu seseorang memperoleh pengetahuan, keterampilan, dan pola pikir yang dibutuhkan untuk menghadapi berbagai tantangan hidup. Dengan pendidikan, peluang mendapatkan pekerjaan yang baik menjadi lebih besar serta membuka kesempatan untuk berkembang di era modern.
                        </p>
                    </div>
                    <div class="mt-6 flex justify-end">
                        <a href="/detail-artikel" class="text-[#501B8B] font-bold hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Article Card 2 (Placeholder Data) -->
            <div class="article-card flex flex-col md:flex-row overflow-hidden">
                <div class="md:w-1/3 h-64 md:h-auto overflow-hidden bg-gray-200">
                    <img src="https://placehold.co/600x400" alt="Article Placeholder" class="w-full h-full object-cover">
                </div>
                <div class="md:w-2/3 p-6 md:p-8 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Membangun Karakter Melalui Pendidikan</h3>
                        <p class="text-gray-600 line-clamp-3 leading-relaxed">
                            Pendidikan juga berperan penting dalam meningkatkan kualitas hidup seseorang. Selain itu, pendidikan juga membentuk karakter seperti disiplin, tanggung jawab, dan etika yang sangat dibutuhkan dalam kehidupan sehari-hari.
                        </p>
                    </div>
                    <div class="mt-6 flex justify-end">
                        <a href="/detail-artikel" class="text-[#501B8B] font-bold hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Article Card 3 (Placeholder Data) -->
            <div class="article-card flex flex-col md:flex-row overflow-hidden">
                <div class="md:w-1/3 h-64 md:h-auto overflow-hidden bg-gray-200">
                    <img src="https://placehold.co/600x400" alt="Article Placeholder" class="w-full h-full object-cover">
                </div>
                <div class="md:w-2/3 p-6 md:p-8 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Investasi Terbaik Adalah Pendidikan</h3>
                        <p class="text-gray-600 line-clamp-3 leading-relaxed">
                            Masyarakat yang terdidik cenderung lebih sadar akan pentingnya hukum, kesehatan, dan lingkungan. Hal ini akan menciptakan kehidupan yang lebih tertib, sejahtera, dan harmonis. Investasi bagi diri sendiri melalui pendidikan adalah langkah paling bijak.
                        </p>
                    </div>
                    <div class="mt-6 flex justify-end">
                        <a href="/detail-artikel" class="text-[#501B8B] font-bold hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer.footer')
</body>
</html>
