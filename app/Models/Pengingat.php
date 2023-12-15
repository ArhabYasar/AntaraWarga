<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengingat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominal',
        'tanggal',
        'nama',
        'user_id',
        'status',
    ];

    protected $table = 'pengingat';

    public $timestamp = false;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function pembayaran(): HasOne
    {
        return $this->hasOne(Pembayaran::class, 'pengingat_id', 'id');
    }

    public function updateStatus()
{
    $totalPembayaran = $this->pembayaran()->sum('nominal');

    if ($totalPembayaran == 0) {
        $this->update(['status' => 'Lunas']);
    }
}

}
