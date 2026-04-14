<?php

namespace App\Http\Controllers;

use App\Models\LogAktivitas;

class LogAktivitasController extends Controller
{
    public function index()
    {
        $log = LogAktivitas::with('user')->orderBy('waktu_log', 'desc')->get();
        return view('log_aktivitas.index', compact('log'));
    }
}