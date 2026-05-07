<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuruKita - Detail Artikel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .content-container {
            line-height: 1.8;
            color: #374151;
        }
    </style>
</head>
<body class="bg-white min-h-screen">
    @include('layouts.guru.navbar.guru')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header Content -->
        <div class="flex flex-col lg:flex-row gap-10 mb-10">
            <!-- Image -->
            <div class="lg:w-1/2">
                <div class="rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/artikel_1.png') }}" alt="Pentingnya Pendidikan" class="w-full h-auto object-cover">
                </div>
            </div>
            
            <!-- Title and Intro -->
            <div class="lg:w-1/2 flex flex-col justify-center">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                    Pentingnya Pendidikan Bagi Masa Depan
                </h1>
                <p class="text-lg text-gray-700 leading-relaxed text-justify">
                    Pendidikan sangat penting untuk masa depan karena membantu seseorang memperoleh pengetahuan, keterampilan, dan pola pikir yang dibutuhkan untuk menghadapi berbagai tantangan hidup. Dengan pendidikan, peluang mendapatkan pekerjaan yang baik menjadi lebih besar serta membuka kesempatan untuk berkembang di era modern. Selain itu, pendidikan juga membentuk karakter, etika, dan rasa tanggung jawab, sehingga seseorang mampu berkontribusi positif bagi masyarakat dan lingkungan sekitarnya.
                </p>
            </div>
        </div>

        <!-- Full Width Body Content -->
        <div class="content-container space-y-6 text-lg text-justify">
            <p>
                Pendidikan merupakan fondasi utama dalam membangun masa depan yang lebih baik, baik bagi individu maupun masyarakat. Melalui pendidikan, seseorang tidak hanya memperoleh ilmu pengetahuan, tetapi juga mengembangkan kemampuan berpikir kritis dan logis. Selain itu, pendidikan membantu meningkatkan kreativitas serta kemampuan dalam memecahkan masalah. Di era modern yang terus berkembang, pendidikan menjadi kunci agar seseorang mampu beradaptasi dengan perubahan teknologi dan tuntutan zaman yang semakin kompleks.
            </p>
            
            <p>
                Selain itu, pendidikan juga berperan penting dalam meningkatkan kualitas hidup seseorang. Dengan pendidikan yang baik, peluang untuk mendapatkan pekerjaan yang layak menjadi lebih besar. Pendidikan juga membantu seseorang dalam meningkatkan taraf ekonomi dan kesejahteraan hidupnya. Tidak hanya itu, pendidikan membentuk karakter seperti disiplin, tanggung jawab, dan etika yang sangat dibutuhkan dalam kehidupan sehari-hari.
            </p>
            
            <p>
                Lebih jauh lagi, pendidikan memiliki dampak besar terhadap kemajuan suatu bangsa. Masyarakat yang terdidik cenderung lebih sadar akan pentingnya hukum, kesehatan, dan lingkungan. Hal ini akan menciptakan kehidupan yang lebih tertib, sejahtera, dan harmonis. Oleh karena itu, pendidikan bukan hanya investasi bagi diri sendiri, tetapi juga langkah penting dalam membangun masa depan yang lebih cerah dan berkelanjutan.
            </p>
        </div>

    </main>

    @include('layouts.footer.footer')
</body>
</html>
