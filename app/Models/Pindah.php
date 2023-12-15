<?php

namespace App\Models;

use App\Models\Warga;
use App\Models\Hunian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pindah extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tanggal',
        'alasan',
        'hunian_asal',
        'warga_id',
        'hunian_id',
    ];

    protected $table ='pindah';

    public $timestamps = false;

    public function warga(): BelongsTo
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }
    public function hunian(): BelongsTo
    {
        return $this->belongsTo(Hunian::class, 'hunian_id', 'id');
    }
}
