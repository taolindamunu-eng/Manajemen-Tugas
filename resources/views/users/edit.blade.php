<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">

<div class="container" style="max-width: 600px;">
    <h3>Edit User</h3>

    <form action="{{ route('users.update', $user->id_user) }}" method="POST">
        @csrf @method('PUT')

        <label>Nama</label>
        <input type="text" name="nama" value="{{ $user->nama }}" class="form-control mb-3">

        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control mb-3">

        <label>Password (Kosongkan jika tidak diganti)</label>
        <input type="password" name="password" class="form-control mb-3">

        <label>Role</label>
        <select name="role" class="form-control mb-3">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        </select>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
