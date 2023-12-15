<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nkk',
        'status',
        'hunian_id',
    ];


    protected $table ='keluarga';

    public $timestamps = false;

    public function getWarga(): HasMany
    {
        return $this->hasMany(Warga::class,'keluarga_id', 'id');
    }
    public function getHunian(): BelongsTo
    {
        return $this->belongsTo(Hunian::class,'hunian_id', 'id');
    }
}
