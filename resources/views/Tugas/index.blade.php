<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white via-orange-100 to-orange-100 p-9">

<div class="max-w-5xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">Daftar Tugas</h1>

    <a href="/tugas/create" class="px-4 py-2 bg-blue-600 text-white rounded-md">
        Tambah Tugas
    </a>
    
    <form action="{{ route('tugas.index') }}" method="GET" class="mt-4 mb-4">
    <div class="flex gap-2">
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari tugas..."
            class="w-full px-3 py-2 border rounded-md"
        >
        <button
            type="submit"
            class="px-4 py-2 bg-blue-600 text-white rounded-md"
        >
            Cari
        </button>
    </div>
</form>


    @if(session('success'))
        <div class="bg-green-200 text-green-700 p-3 mt-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full mt-4 bg-white shadow-md rounded">
        <thead class="bg-blue-600">
            <tr>
                <th class="p-3 text-white">Judul</th>
                <th class="p-3 text-white">Kategori</th>
                <th class="p-3 text-white">Prioritas</th>
                <th class="p-3 text-white">Status</th>
                <th class="p-3 text-white">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tugas as $t)
            <tr class="border-b hover:bg-orange-100">
                <td class="p-3">{{ $t->judul }}</td>
                <td class="p-3">
                    {{ $t->kategori->nama_kategori ?? '-' }}
                </td>
                <td class="p-3">{{ $t->prioritas }}</td>
                <td class="p-3">{{ $t->status }}</td>
                <td class="p-3 flex gap-2">
                    <a href="/tugas/{{ $t->id_tugas }}/edit" class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</a>

                    <form action="/tugas/{{ $t->id_tugas }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="px-3 py-1 bg-red-600 text-white rounded" onclick="return confirm('Hapus tugas?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

</body>
</html>