<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LogAktivitas extends Model
{
    use HasFactory;

    protected $table = 'log_aktivitas';
    protected $primaryKey = 'id_log';
    public $timestamps = false; // kolom hanya waktu_log

    protected $fillable = [
        'id_user',
        'aktivitas',
        'detail',
        'waktu_log'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}