<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-bold mb-4">Edit Tugas</h1>

    <form action="/tugas/{{ $tugas->id_tugas }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $tugas->judul }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="w-full border p-2 rounded">{{ $tugas->deskripsi }}</textarea>
        </div>

        <div>
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" value="{{ $tugas->tanggal_mulai }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label>Deadline</label>
            <input type="date" name="deadline" value="{{ $tugas->deadline }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label>Prioritas</label>
            <select name="prioritas" class="w-full border p-2 rounded">
                <option {{ $tugas->prioritas=='rendah' ? 'selected':'' }}>rendah</option>
                <option {{ $tugas->prioritas=='sedang' ? 'selected':'' }}>sedang</option>
                <option {{ $tugas->prioritas=='tinggi' ? 'selected':'' }}>tinggi</option>
            </select>
        </div>

        <div>
            <label>Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option {{ $tugas->status=='belum mulai' ? 'selected':'' }}>belum mulai</option>
                <option {{ $tugas->status=='proses' ? 'selected':'' }}>proses</option>
                <option {{ $tugas->status=='selesai' ? 'selected':'' }}>selesai</option>
            </select>
        </div>

        <div>
            <label>Kategori</label>
            <select name="id_kategori" class="w-full border p-2 rounded">
                @foreach($kategori as $k)
                    <option value="{{ $k->id_kategori }}" 
                        {{ $tugas->id_kategori == $k->id_kategori ? 'selected' : '' }}>
                        {{ $k->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>ID User</label>
            <input type="number" name="id_user" value="{{ $tugas->id_user }}" class="w-full border p-2 rounded">
        </div>

        <button class="px-4 py-2 bg-green-600 text-white rounded">Update</button>
    </form>

</div>

</body>
</html>