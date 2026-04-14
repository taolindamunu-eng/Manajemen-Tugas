<!DOCTYPE html>
<html>
<head>
    <title>Edit Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2>Edit Komentar</h2>

<form action="/komentar/{{ $komentar->id_catatan }}" method="POST">
    @csrf
    @method('PUT')

    <label>Tugas</label>
    <select name="id_tugas" class="form-control mb-3">
        @foreach($tugas as $t)
            <option value="{{ $t->id_tugas }}" 
                {{ $komentar->id_tugas == $t->id_tugas ? 'selected' : '' }}>
                {{ $t->judul }}
            </option>
        @endforeach
    </select>

    <label>User</label>
    <select name="id_user" class="form-control mb-3">
        @foreach($users as $u)
            <option value="{{ $u->id_user }}" 
                {{ $komentar->id_user == $u->id_user ? 'selected' : '' }}>
                {{ $u->nama }}
            </option>
        @endforeach
    </select>

    <label>Komentar</label>
    <textarea name="isi_komentar" class="form-control mb-3">{{ $komentar->isi_komentar }}</textarea>

    <button class="btn btn-warning">Update</button>
    <a href="/komentar" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>
