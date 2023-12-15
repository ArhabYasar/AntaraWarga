<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kas extends Model
{
    use HasFactory;
    protected $fillable = [
        'kas',
        'warga_id',
    ];

    protected $timestamp = false;

    public $table = 'kas';
    public function getWarga(): BelongsTo
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }
}
