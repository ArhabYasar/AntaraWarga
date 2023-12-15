<?php

namespace App\Models;

use App\Models\Warga;
use App\Models\Hunian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class KepemilikanHunian extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_kepemilikan',
        'warga_id',
        'hunian_id',
    ];
    protected $table ='kepemilikan_hunian';

    public $timestamps = false;

    //Relasi Hunian
    public function hunian(): BelongsTo
    {
        return $this->belongsTo(Hunian::class,'hunian_id','id');
    }

    //Relasi Warga
    public function warga(): BelongsTo
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }
}
