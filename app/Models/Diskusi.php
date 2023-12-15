<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diskusi extends Model
{
    use HasFactory;

    protected $fillable = [
        'topik',
        'isi',
    ];

    protected $table = 'diskusi';

    public $timestamp = false;
    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class, 'diskusi_id'); // Ganti 'topik_id' menjadi 'diskusi_id'
    }

}
