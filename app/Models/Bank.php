<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'singkatan',
    ];

    protected $table = 'bank';

    public $timestamp = false;

    public function getRekening(): HasMany
    {
        return $this->hasMany(Rekening::class,'bank_id','id');
    }
}
