<?php

namespace App\Models;

use App\Models\Iuran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TerimaIuran extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'nominal',
        'penerima',
        'iuran_id',
        'warga_id',
    ];

    protected $table = 'terima_iuran';

    public $timestamp = false;

    public function warga(): BelongsTo
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }
    public function iuran(): BelongsTo
    {
        return $this->belongsTo(Iuran::class, 'iuran_id', 'id');
    }

}
