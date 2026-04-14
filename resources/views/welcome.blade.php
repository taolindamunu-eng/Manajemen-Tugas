<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Manajemen Tugas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-fixed bg-gradient-to-br from-white via-orange-300 to-orange-400">

    <!-- SIDEBAR -->
    <div class="fixed left-0 top-0 h-screen w-64 
                bg-gradient-to-b from-white via-orange-50 to-orange-100
                shadow-2xl p-6 border-r
                rounded-r-2xl">

        <!-- TITLE -->
        <h2 class="text-2xl font-bold text-gray-700 mb-10">
            MANAJEMEN TUGAS
        </h2>

        <!-- MENU -->
        <nav class="space-y-3">
            <a href="/tugas" class="group flex items-center space-x-3 px-4 py-3 rounded-xl
                                   text-gray-700 hover:bg-orange-100 hover:shadow-lg transition duration-200">
                <span>📝</span>
                <span class="font-medium">Data Tugas</span>
            </a>
            <a href="/kategori" class="group flex items-center space-x-3 px-4 py-3 rounded-xl
                                      text-gray-700 hover:bg-orange-100 hover:shadow-lg transition duration-200">
                <span>📂</span>
                <span class="font-medium">Data Kategori</span>
            </a>
            <a href="/users" class="group flex items-center space-x-3 px-4 py-3 rounded-xl
                                   text-gray-700 hover:bg-orange-100 hover:shadow-lg transition duration-200">
                <span>👤</span>
                <span class="font-medium">Data User</span>
            </a>
            <a href="/komentar" class="group flex items-center space-x-3 px-4 py-3 rounded-xl
                                      text-gray-700 hover:bg-orange-100 hover:shadow-lg transition duration-200">
                <span>💬</span>
                <span class="font-medium">Catatan</span>
            </a>
            <a href="/log" class="group flex items-center space-x-3 px-4 py-3 rounded-xl
                                 text-gray-700 hover:bg-orange-100 hover:shadow-lg transition duration-200">
                <span>📜</span>
                <span class="font-medium">Log Aktivitas</span>
            </a>
        </nav>
    </div>

    <!-- CONTENT -->
    <div class="ml-64 p-10">

        <h1 class="text-3xl font-bold text-gray-800 mb-3">
           Selamat Datang! Saatnya Menyelesaikan Tugas dengan Lebih Mudah
        </h1>

        <p class="text-gray-700 mb-10">
            Mulai dari sini, semua pekerjaan jadi lebih terorganisir.
            Pilih menu di bagian kiri untuk mengelola Tugas, Kategori, User, Catatan, dan Log Aktivitas.
        </p>

        <!-- SUMMARY CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition text-gray-700">
                <h3 class="text-lg font-semibold">Total Tugas</h3>
                <p class="text-3xl font-bold mt-2">{{ $totalTugas }}</p>
            </div>

            <div class="bg-white  p-6 rounded-xl shadow hover:shadow-md transition text-gray-700">
                <h3 class="text-lg font-semibold">Kategori</h3>
                <p class="text-3xl font-bold mt-2">{{ $totalKategori }}</p>
            </div>

            <div class="bg-white  p-6 rounded-xl shadow hover:shadow-md transition text-gray-700">
                <h3 class="text-lg font-semibold">User</h3>
                <p class="text-3xl font-bold mt-2">{{ $totalUser }}</p>
            </div>
        </div>

    </div>
</body>
</html>
