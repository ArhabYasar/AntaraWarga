<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Voting extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'judul',
    ];

    protected $table = 'voting';

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class, 'voting_id', 'id');
    }
}
