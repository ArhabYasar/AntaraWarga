<?php

namespace App\Models;

use App\Models\Warga;
use App\Models\Hunian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Satpam extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'warga_id',
        'hunian_id',
    ];

    protected $table = 'satpam';

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
