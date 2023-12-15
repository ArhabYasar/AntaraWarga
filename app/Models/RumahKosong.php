<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RumahKosong extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'keterangan',
        'warga_id',
        'hunian_id',
    ];

    protected $table = 'rumah_kosong';

    public $timestamp = false;

    public function getWarga(): BelongsTo
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }
    public function getHunian(): BelongsTo
    {
        return $this->belongsTo(Hunian::class, 'hunian_id', 'id');
    }
}
