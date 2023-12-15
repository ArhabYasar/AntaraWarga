<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'voting_id',
        'isi',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function voting(): BelongsTo
    {
        return $this->belongsTo(Voting::class, 'voting_id', 'id');
    }
}
