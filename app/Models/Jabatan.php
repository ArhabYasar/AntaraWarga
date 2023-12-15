<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'periode_id',
    ];

    protected $table = 'jabatan';

    public $timestamp = false;

    public function getPeriode(): BelongsTo
    {
        return $this->belongsTo(Periode::class,'periode_id', 'id');
    }
    public function getPengurus(): HasOne
    {
        return $this->hasOne(Pengurus::class,'jabatan_id', 'id');
    }
}
