<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;

    protected $fillable = [
        "kategori",
        "nama",
        "deskripsi",
        "foto",
    ];

    protected $table = 'umkm';

    public $timestamp = false;
}
