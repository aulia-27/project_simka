<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnggotaMajelis extends Model
{
    use HasFactory;
    protected $table = 'anggota_majelis';
    protected $fillabel = [
        'nama',
        'tgllahir',
        'jekel',
        'asal',
        'alamat',
        'notelp',
        'email'
    ];
    protected $hidden;
}
