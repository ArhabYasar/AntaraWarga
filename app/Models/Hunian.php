<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hunian extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat',
        'tipe',
        'luas_tanah',
        'luas_bangunan',
        'status_kepemilikan',
    ];

    protected $table = 'hunian';

    public function keluarga(): HasMany
    {
        return $this->hasMany(Keluarga::class, 'hunian_id', 'id');
    }

    public function kepemilikanHunian(): HasMany
    {
        return $this->hasMany(KepemilikanHunian::class,'hunian_id', 'id');
    }

    public function getPindah(): HasMany
    {
        return $this->hasMany(Pindah::class, 'hunian_id', 'id');
    }
    public function getRumah(): HasOne
    {
        return $this->hasOne(RumahKosong::class, 'hunian_id', 'id');
    }
    public function getSatpam(): HasOne
    {
        return $this->hasOne(Satpam::class, 'hunian_id', 'id');
    }
    public function getTamu(): HasOne
    {
        return $this->hasOne(Tamu::class, 'hunian_id', 'id');
    }
}
