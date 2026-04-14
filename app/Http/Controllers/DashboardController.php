<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\Kategori;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTugas = Tugas::count();
        $totalKategori = Kategori::count();
        $totalUser = User::count();

        return view('welcome', compact('totalTugas', 'totalKategori', 'totalUser'));
    }
}
