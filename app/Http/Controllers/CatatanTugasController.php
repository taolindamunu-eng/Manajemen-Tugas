<?php

namespace App\Http\Controllers;

use App\Models\CatatanTugas;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;

class CatatanTugasController extends Controller
{
    public function index()
    {
        $komentar = CatatanTugas::with(['tugas', 'user'])->get();
        return view('komentar.index', compact('komentar'));
    }

    public function create()
    {
        $tugas = Tugas::all();
        $users = User::all();
        return view('komentar.create', compact('tugas', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_tugas' => 'required',
            'id_user' => 'required',
            'isi_komentar' => 'required',
        ]);

        CatatanTugas::create($request->all());

        return redirect()->route('komentar.index')->with('success', 'Catatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $komentar = CatatanTugas::findOrFail($id);
        $tugas = Tugas::all();
        $users = User::all();

        return view('komentar.edit', compact('komentar','tugas','users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_tugas' => 'required',
            'id_user' => 'required',
            'isi_komentar' => 'required',
        ]);

        $komentar = CatatanTugas::findOrFail($id);
        $komentar->update($request->all());

        return redirect()->route('komentar.index')->with('success','Catatan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $komentar = CatatanTugas::findOrFail($id);
        $komentar->delete();

        return redirect()->route('komentar.index')->with('success','Catatan dihapus.');
    }
}
