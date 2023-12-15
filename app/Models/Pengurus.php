<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengurus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'periode_id',
        'jabatan_id',
    ];

    protected $table = 'pengurus';

    public $timestamp = false;

    public function getJabatan(): BelongsTo{
        return $this->belongsTo(Jabatan::class,'jabatan_id', 'id');
    }
    public function getPeriode(): BelongsTo{
        return $this->belongsTo(Periode::class,'periode_id', 'id');
    }

}
