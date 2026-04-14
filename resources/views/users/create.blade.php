<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">

<div class="container" style="max-width: 600px;">
    <h3>Tambah User</h3>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-3">

        <label>Email</label>
        <input type="email" name="email" class="form-control mb-3">

        <label>Password</label>
        <input type="password" name="password" class="form-control mb-3">

        <label>Role</label>
        <select name="role" class="form-control mb-3">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
