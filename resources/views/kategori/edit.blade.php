<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-bold mb-4">Edit Kategori</h1>

    <form action="/kategori/{{ $kategori->id_kategori }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}" class="w-full border p-2 rounded">
        </div>

        <button class="px-4 py-2 bg-green-600 text-white rounded">Update</button>

    </form>

</div>

</body>
</html>
