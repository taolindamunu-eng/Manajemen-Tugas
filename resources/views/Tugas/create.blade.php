<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-orange-100 via-orange-100 to-orange-100 p-6">
<div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow-xl">

    <h1 class="text-2xl font-bold mb-4">Tambah Tugas</h1>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-green-100 border border-green-300 text-grey-700 rounded">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tugas" method="POST" class="space-y-4">
        @csrf

        <div>
            <label>Judul</label>
            <input type="text" name="judul" value="{{ old('judul') }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="w-full border p-2 rounded">{{ old('deskripsi') }}</textarea>
        </div>

        <div>
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label>Deadline</label>
            <input type="date" name="deadline" value="{{ old('deadline') }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label>Prioritas</label>
            <select name="prioritas" class="w-full border p-2 rounded">
                <option value="">Pilih Prioritas</option>
                <option value="rendah">Rendah</option>
                <option value="sedang">Sedang</option>
                <option value="tinggi">Tinggi</option>
            </select>
        </div>

        <div>
            <label>Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option value="">Pilih Status</option>
                <option value="belum mulai">Belum Mulai</option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
            </select>
        </div>

        <div>
            <label>Kategori</label>
            <select name="id_kategori" class="w-full border p-2 rounded">
                <option value="">Pilih Kategori</option>
                @foreach($kategori as $k)
                    <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>ID User</label>
            <input type="number" name="id_user" class="w-full border p-2 rounded" value="1">
        </div>

        <button class="px-4 py-2 bg-blue-600 text-white rounded">
            Simpan
        </button>
    </form>

</div>
</body>
</html>
