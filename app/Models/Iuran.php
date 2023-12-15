<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Iuran extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe',
        'nama',
        'nominal',
        'keterangan',
        'user_id',
    ];
    protected $table = 'iuran';

    public $timestamp = false;
    public function getterima(): HasMany
    {
        return $this->hasMany(TerimaIuran::class, 'iuran_id', 'id');
    }
    public function getuser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
