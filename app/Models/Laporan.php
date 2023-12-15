<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'iuran_id',
    ];

    protected $table = 'laporan';

    public function iuran(): BelongsTo
    {
        return $this->belongsTo(Iuran::class, 'iuran_id', 'id');
    }
}
