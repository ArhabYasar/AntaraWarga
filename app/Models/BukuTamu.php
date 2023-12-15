<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'gender',
        'lapor',
        'status_kawin',
        'lain_lain',
        'usia',
        'kunjungan',
    ];

    protected $table = 'buku_tamu';
    public $timestamps = false;
}
