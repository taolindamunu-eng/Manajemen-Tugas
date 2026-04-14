@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Tambah Log Aktivitas</h3>

    <form action="/log/store" method="POST">
        @csrf

        <label>User</label>
        <select name="id_user" class="form-control mb-3">
            @foreach($users as $u)
            <option value="{{ $u->id_user }}">{{ $u->nama }}</option>
            @endforeach
        </select>

        <label>Aktivitas</label>
        <input type="text" name="aktivitas" class="form-control mb-3">

        <label>Detail</label>
        <textarea name="detail" class="form-control mb-3"></textarea>

        <button class="btn btn-success">Simpan</button>
        <a href="/log" class="btn btn-secondary">Kembali</a>
    </form>

</div>
@endsection
