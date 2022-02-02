<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RemajaMasjid extends Model
{
    use HasFactory;
    protected $table = 'remaja_masjids';
    protected $fillabel = [
        'nama',
        'tgllahir',
        'jekel',
        'asal',
        'alamat',
        'notelp',
        'email',
        'jabatan'
    ];
    protected $hidden;
}
