<!DOCTYPE html>
<html>
<head>
    <title>Data Catatan Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-white via-orange-100 to-orange-300 p-9">

<h2>Data Catatan Tugas</h2>

<a href="/komentar/create" class="btn btn-primary mb-3">Tambah Catatan</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead class="bg-blue-600">
        <tr>
            <th>ID</th>
            <th>Tugas</th>
            <th>User</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($komentar as $k)
        <tr>
            <td>{{ $k->id_catatan }}</td>
            <td>{{ $k->tugas->judul ?? '-' }}</td>
            <td>{{ $k->user->nama ?? '-' }}</td>
            <td>{{ $k->isi_komentar }}</td>
            <td>
                <a href="/komentar/{{ $k->id_catatan }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/komentar/{{ $k->id_catatan }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus catatan ini?')" class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
