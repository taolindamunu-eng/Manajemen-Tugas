<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';
    protected $primaryKey = 'id_tugas';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal_mulai',
        'deadline',
        'prioritas',
        'status',
        'id_user',
        'id_kategori'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function catatan()
    {
        return $this->hasMany(CatatanTugas::class, 'id_tugas');
    }
}