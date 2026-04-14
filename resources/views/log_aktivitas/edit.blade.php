@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Log Aktivitas</h3>

    <form action="/log/update/{{ $log->id_log }}" method="POST">
        @csrf

        <label>User</label>
        <select name="id_user" class="form-control mb-3">
            @foreach($users as $u)
            <option value="{{ $u->id_user }}" {{ $log->id_user == $u->id_user ? 'selected' : '' }}>
                {{ $u->nama }}
            </option>
            @endforeach
        </select>

        <label>Aktivitas</label>
        <input type="text" name="aktivitas" value="{{ $log->aktivitas }}" class="form-control mb-3">

        <label>Detail</label>
        <textarea name="detail" class="form-control mb-3">{{ $log->detail }}</textarea>

        <button class="btn btn-success">Update</button>
        <a href="/log" class="btn btn-secondary">Kembali</a>
    </form>

</div>
@endsection
