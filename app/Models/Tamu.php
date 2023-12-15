<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'nama',
        'status',
        'keperluan',
        'hunian_id',
    ];

    protected $table = 'tamu';

    public $timestamp = false;

    public function getHunian(): BelongsTo
    {
        return $this->belongsTo(Hunian::class,'hunian_id', 'id');
    }
}
