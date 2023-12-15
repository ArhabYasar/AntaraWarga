<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'pesan', // Isi pesan chat
        'diskusi_id', // ID diskusi yang terkait dengan pesan
    ];
    public function diskusi(): BelongsTo
    {
        return $this->belongsTo(Diskusi::class, 'diskusi_id');
    }

    protected $table = 'chat';

}
