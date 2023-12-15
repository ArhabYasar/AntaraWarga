<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nama',
        'username',
        'nik',
        'nkk',
        'nomor_hp',
        'email',
        'alamat',
        'user_id',
    ];

    protected $table = 'profile';

    protected $guarded = ['foto'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
