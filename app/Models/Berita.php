<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'judul',
        'isi',
        'foto',
    ];

    protected $table = 'berita';
    protected $guarded = ['foto'];

}
