<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white via-orange-100 to-orange-100 p-9">

<div class="max-w-4xl mx-auto">

    <h1 class="text-3xl font-bold mb-4">Daftar Kategori</h1>

    <a href="/kategori/create" class="px-4 py-2 bg-blue-600 text-white rounded-md">
        Tambah Kategori
    </a>

    @if(session('success'))
        <div class="bg-green-200 text-green-700 p-3 mt-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full mt-4 bg-white shadow-md rounded">
        <thead class="bg-blue-600">
            <tr>
                <th class="p-3 text-white">Nama Kategori</th>
                <th class="p-3 text-white">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kategori as $k)
            <tr class="border-b hover:bg-orange-100">
                <td class="p-3">{{ $k->nama_kategori }}</td>
                <td class="p-3 flex gap-2">
                    <a href="/kategori/{{ $k->id_kategori }}/edit" class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</a>

                    <form action="/kategori/{{ $k->id_kategori }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="px-3 py-1 bg-red-600 text-white rounded" onclick="return confirm('Hapus kategori ini?')">
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
