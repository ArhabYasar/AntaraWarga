<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Warga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'pekerjaan',
        'tanggal_lahir',
        'tempat_lahir',
        'keluarga_id',
    ];

    protected $table = 'warga';

    public function keluarga(): BelongsTo
    {
        return $this->belongsTo(Keluarga::class, 'keluarga_id', 'id');
    }

    public function getRekening(): HasMany
    {
        return $this->hasMany(Rekening::class,'warga_id','id');
    }
    public function getPindah(): HasMany
    {
        return $this->hasMany(Pindah::class,'warga_id','id');
    }
    public function getKas(): HasMany
    {
        return $this->hasMany(Kas::class,'warga_id','id');
    }
    public function getRumah(): HasMany
    {
        return $this->hasMany(RumahKosong::class,'warga_id','id');
    }
    public function getSatpam(): HasOne
    {
        return $this->hasOne(Satpam::class,'warga_id','id');
    }
    public function getTerimaIuran(): HasMany
    {
        return $this->hasMany(TerimaIuran::class,'warga_id','id');
    }
}
