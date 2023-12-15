<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pengingat_id',
        'tanggal',
        'nominal',
        'foto',
    ];

    protected $table = 'pembayaran';

    protected $guarded = ['foto'];

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function pengingat(): BelongsTo
    {
        return $this->belongsTo(Pengingat::class,'pengingat_id', 'id');
    }
    // Pada model Pembayaran
    public function updatePengingat()
    {
        $pengingat = $this->pengingat;
        
        // Pastikan ada pengingat terkait
        if ($pengingat) {
            // Kurangkan nominal pada pengingat dengan nominal pembayaran
            $pengingat->update([
                'nominal' => max(0, $pengingat->nominal - $this->nominal),
            ]);
    
            // Jika nominal pengingat menjadi 0, ubah status menjadi 'Lunas'
            if ($pengingat->nominal == 0) {
                $pengingat->updateStatus(); // Panggil metode updateStatus di sini
            }
        }
    }
}
