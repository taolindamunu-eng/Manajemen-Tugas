<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'role'  // jika ada
    ];

    public $timestamps = false;

    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'id_user');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_user');
    }

    public function log()
    {
        return $this->hasMany(LogAktivitas::class, 'id_user');
    }
}