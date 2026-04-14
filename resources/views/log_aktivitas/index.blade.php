<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Log Aktivitas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-white via-orange-100 to-orange-100 p-9">

    <!-- SIDEBAR -->
    <div class="fixed left-0 top-0 h-screen w-64 bg-white shadow-lg p-6 border-r">
        
        <h2 class="text-2xl font-bold text-blue-600 mb-8">TASK MANAGER</h2>

        <nav class="space-y-4">

            <a href="/tugas" class="flex items-center space-x-3 text-gray-700 hover:text-blue-600 transition">
                <span>📝</span>
                <span>Data Tugas</span>
            </a>

            <a href="/kategori" class="flex items-center space-x-3 text-gray-700 hover:text-blue-600 transition">
                <span>📂</span>
                <span>Data Kategori</span>
            </a>

            <a href="/users" class="flex items-center space-x-3 text-gray-700 hover:text-blue-600 transition">
                <span>👤</span>
                <span>Data User</span>
            </a>

            <a href="/komentar" class="flex items-center space-x-3 text-gray-700 hover:text-blue-600 transition">
                <span>💬</span>
                <span>Komentar</span>
            </a>

            <a href="/log" class="flex items-center space-x-3 text-blue-600 font-semibold">
                <span>📜</span>
                <span>Log Aktivitas</span>
            </a>

        </nav>
    </div>

    <!-- MAIN CONTENT -->
    <div class="ml-64 p-10">

        <h1 class="text-3xl font-bold text-gray-700 mb-6">Log Aktivitas</h1>

        <a href="/log/create"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition mb-4 inline-block">
            Tambah Log
        </a>

        <div class="bg-white rounded-xl shadow p-6">
            <table class="min-w-full border border-orange-300 rounded-lg overflow-hidden">
                <thead class="bg-blue-600">
                    <tr>
                        <th class="border px-4 py-2 text-left">ID</th>
                        <th class="border px-4 py-2 text-left">User</th>
                        <th class="border px-4 py-2 text-left">Aktivitas</th>
                        <th class="border px-4 py-2 text-left">Detail</th>
                        <th class="border px-4 py-2 text-left">Waktu</th>
                        <th class="border px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($log as $l)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $l->id_log }}</td>
                        <td class="border px-4 py-2">{{ $l->nama_user }}</td>
                        <td class="border px-4 py-2">{{ $l->aktivitas }}</td>
                        <td class="border px-4 py-2">{{ $l->detail }}</td>
                        <td class="border px-4 py-2">{{ $l->waktu_log }}</td>

                        <td class="border px-4 py-2 text-center space-x-2">
                            <a href="/log/edit/{{ $l->id_log }}"
                                class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                                Edit
                            </a>

                            <a href="/log/delete/{{ $l->id_log }}"
                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition"
                                onclick="return confirm('Hapus data?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
