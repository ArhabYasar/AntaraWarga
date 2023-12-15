<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalJaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'petugas',
        'jam_mulai',
        'jam_selesai',
    ];

    protected $table = 'jadwal_jaga';
}
