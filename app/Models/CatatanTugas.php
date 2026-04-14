<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatatanTugas extends Model
{
    protected $table = 'catatan_tugas';
    protected $primaryKey = 'id_catatan';
    public $timestamps = false; // kalau tabel kamu tidak ada created_at & updated_at

    protected $fillable = [
        'id_tugas',
        'id_user',
        'isi_komentar',
    ];

    public function tugas()
    {
        return $this->belongsTo(Tugas::class, 'id_tugas', 'id_tugas');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
