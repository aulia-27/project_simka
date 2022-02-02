<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatans';
    protected $fillabel = [
        'nama_kegiatan',
        'tgl_kegiatan',
        'waktu',
        'asal',
        'deskripsi'
    ];
    protected $hidden;
}
