<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use App\Models\Kategori;
use App\Models\LogAktivitas;

class TugasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $tugas = Tugas::with('kategori')
            ->when($search, function ($query, $search) {
                $query->where('judul', 'like', "%{$search}%")
                      ->orWhere('prioritas', 'like', "%{$search}%")
                      ->orWhere('status', 'like', "%{$search}%")
                      ->orWhereHas('kategori', function ($q) use ($search) {
                          $q->where('nama_kategori', 'like', "%{$search}%");
                      });
            })
            ->get();

        return view('tugas.index', compact('tugas'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('tugas.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'judul'         => 'required',
                'deskripsi'     => 'required',
                'tanggal_mulai' => 'required',
                'deadline'      => 'required',
                'prioritas'     => 'required',
                'status'        => 'required',
                'id_kategori'   => 'required',
                'id_user'       => 'required',
            ],
            [
                'judul.required'         => 'Judul wajib dilengkapi.',
                'deskripsi.required'     => 'Deskripsi wajib dilengkapi.',
                'tanggal_mulai.required' => 'Tanggal mulai wajib diisi.',
                'deadline.required'      => 'Deadline wajib diisi.',
                'prioritas.required'     => 'Prioritas wajib dipilih.',
                'status.required'        => 'Status wajib dipilih.',
                'id_kategori.required'   => 'Kategori wajib dipilih.',
                'id_user.required'       => 'User wajib diisi.',
            ]
        );

        $tugas = Tugas::create($data);

        LogAktivitas::create([
            'id_user'   => $request->id_user,
            'aktivitas' => 'Menambah Tugas',
            'detail'    => 'Menambah tugas berjudul: ' . $tugas->judul,
            'waktu_log' => now()
        ]);

        return redirect()->route('tugas.index')
            ->with('success', 'Tugas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $tugas = Tugas::findOrFail($id);
        $kategori = Kategori::all();
        return view('tugas.edit', compact('tugas', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $tugas = Tugas::findOrFail($id);

        $data = $request->validate(
            [
                'judul'         => 'required',
                'deskripsi'     => 'required',
                'tanggal_mulai' => 'required',
                'deadline'      => 'required',
                'prioritas'     => 'required',
                'status'        => 'required',
                'id_kategori'   => 'required',
                'id_user'       => 'required',
            ],
            [
                'judul.required'         => 'Judul wajib dilengkapi.',
                'deskripsi.required'     => 'Deskripsi wajib dilengkapi.',
                'tanggal_mulai.required' => 'Tanggal mulai wajib diisi.',
                'deadline.required'      => 'Deadline wajib diisi.',
                'prioritas.required'     => 'Prioritas wajib dipilih.',
                'status.required'        => 'Status wajib dipilih.',
                'id_kategori.required'   => 'Kategori wajib dipilih.',
                'id_user.required'       => 'User wajib diisi.',
            ]
        );

        $tugas->update($data);

        LogAktivitas::create([
            'id_user'   => $request->id_user,
            'aktivitas' => 'Mengedit Tugas',
            'detail'    => 'Mengedit tugas berjudul: ' . $tugas->judul,
            'waktu_log' => now()
        ]);

        return redirect()->route('tugas.index')
            ->with('success', 'Tugas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $tugas = Tugas::findOrFail($id);

        LogAktivitas::create([
            'id_user'   => $tugas->id_user,
            'aktivitas' => 'Menghapus Tugas',
            'detail'    => 'Menghapus tugas berjudul: ' . $tugas->judul,
            'waktu_log' => now(),
        ]);

        $tugas->delete();

        return redirect()->route('tugas.index')
            ->with('success', 'Tugas berhasil dihapus!');
    }
}
