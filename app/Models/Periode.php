<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Periode extends Model
{
    use HasFactory;

    protected $fillable =[
        'periode_awal',
        'periode_akhir',
    ];

    protected $table = 'periode';

    public $timestamp = false;
    public function getJabatan(): HasMany
    {
        return $this->hasMany(Jabatan::class,'periode_id', 'id');
    }
    public function getPengurus(): HasOne
    {
        return $this->hasOne(Pengurus::class,'periode_id', 'id');
    }


}
