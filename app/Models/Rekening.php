<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rekening extends Model
{
    use HasFactory;

    protected $fillable = [
        'rekening',
        'bank_id',
        'warga_id',
    ];

    protected $timestamp = false;

    public $table = 'rekening';
    public function getWarga(): BelongsTo
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }
    public function getBank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'id');
    }
}
