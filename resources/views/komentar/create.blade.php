<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Tambah Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">

<div class="container" style="max-width:820px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-3">Tambah Catatan</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('komentar.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tugas</label>
                    <select name="id_tugas" class="form-control" required>
                        <option value="">-- Pilih Tugas --</option>
                        @foreach($tugas as $t)
                            <option value="{{ $t->id_tugas }}" {{ old('id_tugas') == $t->id_tugas ? 'selected' : '' }}>
                                {{ $t->judul }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">User</label>
                    <select name="id_user" class="form-control" required>
                        <option value="">-- Pilih User --</option>
                        @foreach($users as $u)
                            <option value="{{ $u->id_user }}" {{ old('id_user') == $u->id_user ? 'selected' : '' }}>
                                {{ $u->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Komentar</label>
                    <textarea name="isi_komentar" class="form-control" rows="4" required>{{ old('isi_komentar') }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('komentar.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>
