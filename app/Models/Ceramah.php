<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ceramah extends Model
{
    use HasFactory;
    protected $table = 'ceramahs';
    protected $fillabel = [
        'judul',
        'tgl_ceramah',
        'waktu',
        'ustad',
        'deskripsi'
    ];
    protected $hidden;
}
